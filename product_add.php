
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
                            <h4 class="mb-0"> Add Product</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
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
                            <h3><b>Add Product</b></h3>
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-12"><b>Product Code</b></label>
                            <input type="text" name="product_code" placeholder="EX:PROD001" class="form-control col-lg-5 col-md-5 col-12">
                        </div>
                        <div class="form-body-main">
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Item Name</b></label>
                                <select class="form-control col-lg-5 col-md-5 col-12" name="item_name" id="item_name">
                                    <option value="" selected="disable">Select One</option>
                                    
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Catagorie Name</b></label>
                                <select class="form-control col-lg-5 col-md-5 col-12" name="catagorie_name" id="catagorie_name">
                                    <option value="" selected="disable">Select One</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Brand Name</b></label>
                                <select class="form-control col-lg-5 col-md-5 col-12" name="brand_name">
                                    <option value="" selected="disable">Select One</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Product Name(English)</b></label>
                                <input type="text" name="product_name_english" placeholder="Product Name(English)" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Product Name(Bangla)</b></label>
                                <input type="text" name="product_name_bangla" placeholder="Product Name(Bangla)" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Product Quantity</b></label>
                                <input type="number" name="product_quantity" placeholder="Product Quantity" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Product Descripton</b></label>
                                <textarea name="product_description" class="form-control col-lg-5 col-md-5 col-12"></textarea>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Purchase Price</b></label>
                                <input type="text" name="product_purchase_price" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Sale Price</b></label>
                                <input type="text" name="product_sale_price" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Old Price</b></label>
                                <input type="text" name="product_old_price" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Stock Status</b></label>
                                <select name="stock_status" class="form-control col-lg-5 col-md-5 col-12">
                                    <option value="" selected="disable">Select One</option>
                                    <option value="stock_available">Stock Available</option>
                                    <option value="stock_out">Stock Out</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Product Type</b></label>
                                <select name="product_type" class="form-control col-lg-5 col-md-5 col-12">
                                    <option value="" selected="disable">Select One</option>
                                    <option value="new_product">New Product</option>
                                    <option value="popular_product">Popular Product</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Product Status</b></label>
                                <select name="product_status" class="form-control col-lg-5 col-md-5 col-12">
                                    <option value="" selected="disable">Select One</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Product Weight</b></label>
                                 <select name="product_weight" class="form-control col-lg-5 col-md-5 col-12">
                                    <option value="" selected="disable">Select One</option>
                                </select>   
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Flie 1</b></label>
                                <input type="file" name="product_pciture_1" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>File 2</b></label>
                                <input type="file" name="product_pciture_2" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>File 3</b></label>
                                <input type="file" name="product_pciture_3" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group" style="text-align: center !important;">
                                <input type="submit" name="add_product" class="btn btn-success col-4" value="Add">
                            </div>
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
        
    </script>

</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
