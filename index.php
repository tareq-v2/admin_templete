
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
<head>
  <?php include("css_header.php") ?>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Khassfood Admin</title>

    <!--google font-->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> -->
    <!--common style-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/lobicard/css/lobicard.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--easy pie chart-->
    <link href="assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">

    <!--custom css-->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/summernote-lite.css" rel="stylesheet">
    <link href="assets/css/summernote.css" rel="stylesheet">

    <!-- uikit css -->

    <link rel="stylesheet" href="../assets/css/uikit.min.css">


    <!-- zoom image -->

    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">

        <!--left sidebar start-->
        <div class="left-sidebar">
            <nav class="sidebar-menu">
                <ul id="nav-accordion">
                    <li class="sub-menu">
                        <a href="javascript:;" class="active">
                            <i class=" icon-grid"></i>
                            <span>Developer Tools</span>
                        </a>
                        <ul class="sub">
                            <!-- <li class="active"><a  href="index.php">Dashboard</a></li> -->
                            <li><a  href="main_menu_add.php">Main Menu</a></li>
                            <li><a  href="sub_menu_add.php">Sub Menu</a></li>
                        </ul>
                    </li>

                    <li class="nav-title">
                        <h5 class="text-uppercase">Components</h5>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" icon-grid"></i>
                            <span>Create Admin</span>
                        </a>
                        <ul class="sub">
                          <li><a href="create_admin.php">Create Admin</a></li>
                          <li><a href="view_admin.php">View Admin</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-0"> Dashboard</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->


            <div class="container-fluid">

                <!--state widget start-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="guest_information.php"><h6 class="mb-0 mt-3">Register Users</h6></a>
                                <p class="f12 mb-0">New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="active_user.php"><h6 class="mb-0 mt-3">Active Users</h6></a>
                                
                                <p class="f12 mb-0">Active Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="inactive_user.php"><h6 class="mb-0 mt-3">Inactive Users</h6></a>
                                <p class="f12 mb-0">Inactive Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="seller_register.php"><h6 class="mb-0 mt-3">Register Seller</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="active_seller.php"><h6 class="mb-0 mt-3">Active Seller</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-people text-primary f30"></i>
                                <a href="inactive_seller.php"><h6 class="mb-0 mt-3">Inactive Seller</h6></a>
                                <p class="f12 mb-0">32 New Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="order_placed.php"><h6 class="mb-0 mt-3">Order Placed</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="pending_order.php.php"><h6 class="mb-0 mt-3">Pending Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="process_order.php"><h6 class="mb-0 mt-3">Process Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="onthe_way_order.php"><h6 class="mb-0 mt-3">On The Way Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="reject_order.php"><h6 class="mb-0 mt-3">Reject Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-basket-loaded text-info f30"></i>
                                <a href="complete_order.php"><h6 class="mb-0 mt-3">Sucess Order</h6></a>
                                <p class="f12 mb-0">123 New Order Placed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="icon-trash text-info f30"></i>
                                <a href="complete_order.php"><h6 class="mb-0 mt-3">Clear Shopping Cart Data</h6></a>
                                <p class="f12 mb-0">Shopping Cart Data</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <i class="fa fa-toggle-off text-info f30"></i>
                                <a href="complete_order.php"><h6 class="mb-0 mt-3">Flash Sale</h6></a>
                                <p class="f12 mb-0">Flash Sale Activation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->
            </div>

        </main>
        <!--main contents end-->

    </div>
    <!--===========app body end===========-->

    <!--===========footer start===========-->
    <footer class="app-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                2018 © Diverse Admin by MHS
            </div>
            <div class="col-4">
                <a href="#" class="float-right back-top">
                    <i class=" ti-arrow-circle-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

    <!--===========footer end===========-->
<!-- Placed js at the end of the page so the pages load faster -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
<script class="include" type="text/javascript" src="assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/vendor/lobicard/js/lobicard.js"></script>
<script src="assets/vendor/jquery.scrollTo.min.js"></script>

<!--chartjs-->
<script src="assets/vendor/chartjs/Chart.min.js"></script>

<!-- uikit js -->
<script src="../assets/js/uikit.min.js" charset="utf-8"></script>
<!--chartjs initialization-->
<script>

    var ctx = document.getElementById('myChart-light').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgba(167,104,243,.2)',
                borderColor: 'rgba(167,104,243,1)',
                data: [0, 20, 9, 25, 15, 25,18]
            }]


        },

        // Configuration options go here
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },

            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            elements: {
                line: {
                    tension: 0.00001,
                    //tension: 0.4,
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });


    var ctx = document.getElementById('myChart-tow-light').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgba(54,162,245,.2)',
                borderColor: 'rgba(54,162,245,1)',
                //data: [6.06, 82.2, -22.11, 21.53, -21.47, 73.61, -53.75, -60.32]
                data: [70, 45, 65, 50, 65, 35, 50]
            }]


        },

        // Configuration options go here
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            elements: {
                line: {
                    //tension: 0.00001,
                    tension: 0.4,
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });

</script>

<script type="text/javascript">
           $(document).ready(function() {
    $('#summernote').summernote();
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
});

</script>


<script type="text/javascript">
    $("#summernote").summernote({
lang: 'hu-HU',
height: 300,
minHeight: null,
maxHeight: null,
 toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
        ]
});
</script>

<!--custom chart-->
<script src="assets/vendor/custom-chart/Chart.min.js"></script>
<script src="assets/vendor/custom-chart/underscore-min.js"></script>
<script src="assets/vendor/custom-chart/moment.min.js"></script>
<script src="assets/vendor/custom-chart/accounting.min.js"></script>
<!--custom chart init-->
<script src="assets/vendor/custom-chart/custom-chart-init.js"></script>


<!--easy pie chart-->
<script src="assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js"></script>

<!--vectormap-->
<script src="assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/vendor/vmap-init.js"></script>


<!--[if lt IE 9]>
<script src="assets/vendor/modernizr.js"></script>
<![endif]-->

<!--init scripts-->
<script src="assets/js/scripts.js"></script>
<!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->
<script src="assets/js/summernote-lite.js"></script>
<script src="assets/js/summernote.js"></script>


</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
