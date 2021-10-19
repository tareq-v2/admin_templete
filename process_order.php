
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
                            <h4 class="mb-0"> Viewe Process Order</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">View Process Order</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->


            <div class="container-fluid">

                <!--state widget start-->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="buttons-area">
                            <div class="all-btns">
                                <button class="dt-button buttons-copy buttons-php5" aria-cotrols="example"><span>Coppy</span></button>
                                <button class="dt-button buttons-csv buttons-php5" aria-cotrols="example"><span>CSV</span></button>
                                <button class="dt-button buttons-excel buttons-php5" aria-cotrols="example"><span>Excel</span></button>
                                <button class="dt-button buttons-print buttons-php5" aria-cotrols="example" type="print"><span>Print</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="search-area">
                            <input type="search" name="admin_search"> <input type="submit" name="search_btn" class="btn btn-secondary" value="Search">
                        </div>
                    </div>
                </div>

                <div class="order-other-page" style="margin-top: 20px;">
                    <a href="reject_order.php" class="btn btn-danger">Reject</a>
                    <a href="complete_order.php" class="btn btn-success">Success</a>
                    <a href="onthe_way_order.php" class="btn btn-primary">On The Way</a>
                    <a href="process_order.php" class="btn btn-warning">Process Order</a>
                    <a href="pending_order.php" class="btn btn-info">Pending Order</a>
                    <!-- <a href="reject_order.php" class="btn btn-danger">Reject</a> -->
                </div>


                <div class="admin-view-area">
                   <div class="table-responsive">
                       <table class="table table-bordered">
                       <thead>
                           <tr class="table-active">
                               <th>SL</th>
                               <th>Invoice ID</th>
                               <th>Customer Name</th>
                               <th>Customer Phone</th>
                               <th>Delivery Area</th>
                               <th>Pay Method</th>
                               <th>Pay Account</th>
                               <th>Transaction ID</th>
                               <th>Delivery Charge</th>
                               <th>Discount</th>
                               <th>Sub Total</th>
                               <th>Grand Total</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                   </table>
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

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
Process Order
