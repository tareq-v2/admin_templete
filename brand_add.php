
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
<head>
    <?php include("css_header.php") ?>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">
<form method="POST">
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
                            <h4 class="mb-0"> Add Brand</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Add Brand</li>
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
                            <h3><b>Add Brand</b></h3>
                        </div>
                        <div class="form-body-main">
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Brand Name</b></label>
                                <input type="text" name="brand_name" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group" style="text-align: center !important;">
                                <input type="submit" name="create_brand_btn" class="btn btn-success" value="Create">
                                <input type="submit" name="show_brand_btn" class="btn btn-warning" value="View">
                            </div>
                        </div>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Brand Name</th>
                                <th>Action</th>
                            </tr>
                                <tr>
                                    <td></td>
                                    <td>></td>
                                    <td>
                                        <a href="brand_edit.php" class="btn btn-info">Edit</a>
                                        <a href="brand_delete.php" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
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
</div>
</form>
</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>