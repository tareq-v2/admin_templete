
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
                            <h4 class="mb-0"> Customer Message</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Customer Message</li>
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


                <div class="customerSms-view-area" style="margin-top: 20px;">
                   <table class="table table-bordered table-hover table-stripped">
                       <thead>
                           <tr class="table-active">
                               <th>Sl</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>SMS</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                   </table>
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
