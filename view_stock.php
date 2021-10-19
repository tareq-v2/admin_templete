
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
                            <h4 class="mb-0"> View Product Stock</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">View Product Stock</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->
            <div class="container-fluid">
                <div class="content-form-wrapper">
                    <div class="content-form-title">
                        <h3>View Product Stock</h3>
                    </div>
                    <div class="buttons-area" style="margin-top: 50px;">
                        <div class="all-btns">
                            <button class="dt-button buttons-copy buttons-php5" aria-cotrols="example"><span>Coppy</span></button>
                            <button class="dt-button buttons-csv buttons-php5" aria-cotrols="example"><span>CSV</span></button>
                            <button class="dt-button buttons-excel buttons-php5" aria-cotrols="example"><span>Excel</span></button>
                            <button class="dt-button buttons-print buttons-php5" aria-cotrols="example" type="print"><span>Print</span></button>
                        </div>
                    </div>
                    <div class="stock-view" style="margin-top: 30px;">
                      <table class="table table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>

        </main>
        <!--main contents end-->

    </div>
    <!--===========app body end===========-->

    <!--===========footer start===========-->
    <?php include("footer.php") ?>
    <!--===========footer end===========-->


    <?php include("js_footer.php") ?>


</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
