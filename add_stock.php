
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
<head>
    <?php include("css_header.php") ?>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <?php include("header.php") ?>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">

        <!--left sidebar start-->
        <?php include("sidebar.php");?>
        <!--left sidebar end-->

         <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-0"> Add Product Stock</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Add Product Stock</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->


            <div class="container-fluid">

                <!--state widget start-->
                <div class="form-wrappper">
                    <div class="form-body">
                        <div class="form-title">
                            <h3><b>Add Product Stock</b></h3>
                        </div>
                        <?php 

                        if(isset($_POST["add_product_stock"]))
                        {
                            $product_code=$_POST["product_code"];
                            $product_weight=$_POST["product_weight"];
                            $product_stock=$_POST["product_stock"];

                            $sql_check=$db->link->query("SELECT * FROM `product_stock` WHERE `product_code`='$product_code'");

                            if($sql_check)
                            {
                                $fetch=$sql_check->fetch_assoc();
                            }

                            $previous_stock=$fetch['quantity'];

                            $present_stock=$previous_stock + $product_stock;

                            // $check=mysqli_num_rows($sql_check) > 0;

                            if($product_stock == '')
                            {
                                echo "<div class='alert alert-danger'>Product Sotck Ammount Is Required</div>";
                            }
                            elseif($product_stock == !'' && mysqli_num_rows($sql_check) > 0)
                            {   
                                $sql_update_stock=$db->link->query("UPDATE `product_stock` SET `quantity`='$present_stock',`date`='$date' WHERE `product_code`='$product_code' ");
                                if($sql_update_stock)
                                {
                                    echo "<div class='alert alert-info'>Product Stock Updated</div>";
                                }
                            }
                            else
                            {
                                $sql_stock=$db->link->query("INSERT INTO `product_stock`(`product_code`, `product_weight`, `quantity`, `date`) VALUES ('$product_code','$product_weight','$product_stock','$date')");
                                if($sql_stock)
                                {
                                    echo "<div class='alert alert-success'>Product Stock Add Successfully</div>";
                                }
                            }
                        }

                        ?>
                        <form method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-12"><b>Product Code</b></label>
                            <input id="product_code" type="text" name="product_code" placeholder="EX:PROD001" class="form-control col-lg-5 col-md-5 col-12">
                        </div>
                        <div id="data" class="form-body-main">
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Item Name</b></label>
                                <input readonly type="text" name="item_name" class="form-control col-lg-5 col-md-5 col-12">
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-12"><b>Catagorie Name</b></label>
                                    <input readonly type="text" name="catagorie_name" class="form-control col-lg-5 col-md-5 col-12">
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-12"><b>Brand Name</b></label>
                                    <input readonly type="text" name="brand_name" class="form-control col-lg-5 col-md-5 col-12">
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-12"><b>Product Name(English)</b></label>
                                    <input readonly type="text" name="product_name_english" class="form-control col-lg-5 col-md-5 col-12">
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-12"><b>Product Name(Bangla)</b></label>
                                    <input readonly type="text" name="product_name_bangla" class="form-control col-lg-5 col-md-5 col-12">
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-12"><b>Product Weight</b></label>
                                     <input readonly type="text" name="product_weight" class="form-control col-lg-5 col-md-5 col-12">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Stock Ammount</b></label>
                                 <input type="text" name="product_stock" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group" style="text-align: center !important;">
                                <input type="submit" name="add_product_stock" class="btn btn-success col-4" value="Add">
                            </div>
                    </form>
                    </div>
                </div>
                <!--state widget end-->

                    <!--activity widget end-->
                </div>
            </div>

        </main>
        <!--main contents end-->


        <!--===========app body end===========-->

    <!--===========footer start===========-->
    <?php include("footer.php") ?>
    <!--===========footer end===========-->


    <?php include("js_footer.php") ?>
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $("#product_code").on("keyup",function(){

                var product_code = $("#product_code").val();

                // alert(product_code)

                $.ajax({
                    url : "add_stock_controller.php",
                    type : "POST",
                    data : {prod_code : product_code},
                    success : function(data){
                        $("#data").html(data);
                    }
                });
            });

        });

    </script>

</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
