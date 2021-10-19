

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mosaddek.com/theme/Tanim/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
<head>
    <?php include("css_header.php") ?>
    <style type="text/css">
    span.success-message {
        font-size: 17px;
        font-weight: bold;
        color: green;
        transition: .6s;
    }
    span.eror-message {
        font-size: 17px;
        font-weight: bold;
        color: red;
        transition: .6s;
    }
    </style>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">
<form method="post">
    <!--===========header start===========-->
    <?php include("header.php") ?>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">

        <!--left sidebar start-->
        <?php include("sidebar.php") ?>
        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-0"> Sub Menu Add</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Sub Menu</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->


            <div class="container-fluid">

                <!--state widget start-->
                <div class="form-wrappper">
                    <div class="add-view-btn">
                       <input type="submit" name="sub_menu_add_btn" class="btn btn-info" value="Add">
                       <a href="view-sub_menu.php?page=1" class="btn btn-warning">View</a>
                    </div>
                    <div class="input-title">
                        <b>Add Sub Menu</b>
                    </div>
                    <div class="form-group">
                        <label> Serial Number<span>(Must be Required)</span></label>
                        <input type="text" name="sub_menu_serialNumber" class="form-control" placeholder="Ex:01">
                    </div>
                    <div class="form-group">
                        <label>Main Menu Name<span>(Must be Required)</span></label>
                        <select class="form-control" name="main_menu_name">
                          <option value="">Select One</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sub Menu Name<span>(Must be Required)</span></label>
                        <input type="text" name="sub_menu_name" class="form-control" placeholder="Add Sub Menu Name">
                    </div>
                    <div class="form-group">
                        <label>Link Name<span>(Must be Required)</span></label>
                        <input type="text" name="sub_menu_link" class="form-control" placeholder="Add Link Name">
                    </div>
                    <div class="form-group">
                        <label> Route Name<span>(Must be Required)</span></label>
                        <input type="text" name="sub_menu_route" class="form-control" placeholder="Add Route Name">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="sub_menu_save" class="btn btn-success" value="Save">
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
</form>
</body>

<!-- Mirrored from mosaddek.com/theme/Tanim/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
