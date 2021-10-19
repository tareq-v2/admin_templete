
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
                            <h4 class="mb-0"> Main Menu Add</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Main Menu</li>
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
                       <input type="submit" name="main_menu_add_btn" class="btn btn-info" value="Add">
                       <a href="view_main_menu.php" class="btn btn-warning" name="main_menu_view_btn">View</a>
                    </div>
                    <div class="input-title">
                        <b>Add Main Menu</b>
                    </div>
                    <div class="form-group">
                        <label>Add Serial Number<span>(Must be Required)</span></label>
                        <input type="text" name="main_menu_serialNumber" class="form-control" placeholder="Ex:01">
                    </div>
                    <div class="form-group">
                        <label>Add Link Name<span>(Must be Required)</span></label>
                        <input type="text" name="main_menu_link" class="form-control" placeholder="Add Link Name">
                    </div>
                    <div class="form-group">
                        <label>Add Menu Name<span>(Must be Required)</span></label>
                        <input type="text" name="main_menu_name" class="form-control" placeholder="Add Link Name">
                    </div>
                    <div class="form-group">
                        <label>Add Route Name<span>(Must be Required)</span></label>
                        <input type="text" name="main_menu_routeName" class="form-control" placeholder="Add Route Name">
                    </div>
                    <?php

                    if(isset($_POST["main_menu_save"]))
                    {
                      $main_menu_Sl=$_POST["main_menu_serialNumber"];
                      $main_menulink=$_POST["main_menu_link"];
                      $main_menu_name=$_POST["main_menu_name"];
                      $main_menu_routeName=$_POST["main_menu_routeName"];

                      $sql_insert=$db->link->query("INSERT INTO `main_menu`(`id`, `serial_number`, `link_name`, `menu_name`, `route_name`) VALUES ('','$main_menu_Sl','$main_menulink','$main_menu_name','$main_menu_routeName')");
                      if($sql_insert)
                      {
                        echo "<span class='success-message'>Data Insert Successfully</span>";
                      }
                      else
                      {
                        echo "<span class='eror-message'>Data Insert Unsuccessfull</span>";
                      }
                      }
                    ?>
                    <div class="form-group">
                        <input type="submit" name="main_menu_save" class="btn btn-success" value="Save">
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
</fortm>
</body>

<!-- Mirrored from mosaddek.com/theme/Tanim/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
