
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:46:28 GMT -->
<head>
    <?php include("css_header.php") ?>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">
<form method="post" enctype="multipart/form-data">

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
                            <h4 class="mb-0"> Edit Slider</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Edit Slider</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->


            <div class="container-fluid">
                <div class="content-form-wrapper">
                    <div class="content-form-title">
                        <h3>Edit Slider</h3>
                    </div>
                    <div class="content-form">
                      <div class="form-group row">
                        <label class="col-lg-4 col-md-4 col-12"><b>SL</b></label>
                        <input readonly type="number" name="slider_picture_sl" class="form-control col-lg-5 col-md-5 col-12" value="<?php echo $fetch['1'] ?>">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-md-4 col-12"><b>Links</b></label>
                        <input type="text" name="slider_picture_url" class="form-control col-lg-5 col-md-5 col-12" placeholder="Ex:url" value="<?php echo $fetch['2'] ?>">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-md-4 col-12"><b>Image</b></label>
                        <input type="file" name="slider_picture">
                    </div>
                    </div>
                    <div class="submit-btn" style="text-align: center;margin-top: 20px;">
                         <input type="submit" name="slider_update" value="Update" class="btn btn-info">
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

</form>
</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
