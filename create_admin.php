
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
<head>
    <?php include("css_header.php") ?>
    <style media="screen" type="text/css">
    .select-all-btn {
      background: black;
      padding: 5px;
      color: white;
    }
    .main-menu {
    background: lightgray;
    padding: 5px;
}
    </style>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

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
                            <h4 class="mb-0"> Create Admin</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Create Admin</li>
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
                            <h3><b>Create Admin</b></h3>
                        </div>
                        <div class="form-body-main">
                         
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Username</b></label>
                                <input required type="text" name="admin_username" placeholder="username" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Email</b></label>
                                <input required type="mail" name="admin_mail" placeholder="ex:example@gmail.com" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Phone</b></label>
                                <input type="number" name="admin_phone" placeholder="ex:01575434262" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Adress</b></label>
                                <input type="text" name="admin_adress" placeholder="ex:Feni" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>User Type</b></label>
                                <select required class="form-control col-lg-5 col-md-5 col-12" name="user_type">
                                  <option value="">Select One</option>
                                  <option value="Active User">Active User</option>
                                  <option value="Inactive User">Inactive User</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Password</b></label>
                                <input required type="password" name="admin_pass" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Confirm Password</b></label>
                                <input required type="password" name="admin_confirm_pass" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Picture</b></label>
                                <input type="file" class="filestyle" name="admin_picture" accept="image/*" id="file" onChange="viewShowImage(this)"/><br><br>
                   					   <img id="preview" src="image/admin-image/preview.png" class='img-responsive img-thumbnail' height='90' width='90' style='margin-top: 5px; margin-left:15px;'>
                            </div>
                            <div class="form-group" style="text-align: center !important;">
                                <input type="submit" name="create_admin" class="btn btn-success col-4" value="Create">
                            </div>
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
      </script>
  </form>
</body>

</html>
