
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
                            <h4 class="mb-0"> All Product</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">All Product</li>
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
                            <h3><b>All Product</b></h3>
                        </div>
                        <div class="all-products" style="width: 1061px;overflow: scroll;">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Product Code</th>
                                        <th>Item Name</th>
                                        <th>Catagorie Name</th>
                                        <th>Brand Name</th>
                                        <th>Product Name (English)</th>
                                        <th>Product Name (Bangla)</th>
                                        <th>Product Quantity</th>
                                        <th>Product Description</th>
                                        <th>Purchase Price</th>
                                        <th>Sale Price</th>
                                        <th>Old Price</th>
                                        <th>Stock Status</th>
                                        <th>Product Type</th>
                                        <th>Product Status</th>
                                        <th>Product Weight</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
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

</body>


</html>

