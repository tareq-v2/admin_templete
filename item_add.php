
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
                            <h4 class="mb-0"> Create Item</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">Create Item</li>
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
                            <h3><b>Create Item</b></h3>
                        </div>
                        <div class="form-body-main">
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Sl</b></label>
                                <input type="number" name="item_sl" placeholder="Ex:01" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Item Name</b></label>
                                <input type="text" name="item_name" placeholder="item_name" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Item Type</b></label>
                                <select class="form-control col-lg-5 col-md-5" name="item_type">
                                    <option value="">Select One</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Item Image</b></label>
                                <input type="file" class="filestyle" name="item_image" accept="image/*" id="file" onChange="viewShowImage(this)"/><br><br>
                                <img id="preview" src="image/admin-image/preview.png" class='img-responsive img-thumbnail' height='90' width='90' style='margin-top: 5px; margin-left:15px;'>
                                <!-- <label class="col-lg-4 col-md-4 col-12"><b></b></label>
                                <input type="file" name="item_image" class="form-control col-lg-5 col-md-5 col-12"> -->
                            </div>
                            <!-- <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Item Banner</b></label>
                                <input type="file" name="item_banner" class="form-control col-lg-5 col-md-5 col-12">
                            </div> -->
                            <div class="form-group" style="text-align: center !important;">
                                <input type="submit" name="create_item_btn" class="btn btn-success" value="Create">
                                <input type="submit" name="show_item_btn" class="btn btn-warning" value="View">
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
    <script type="text/javascript">
      function viewShowImage(e){
      var file = e.files[0];
        var imagefile = file.type;
        var type = ["image/jpeg","image/png","image/jpg"];
        if(imagefile==type[0] || imagefile==type[1] || imagefile==type[2]){
          var reader = new FileReader();
                  reader.onload = imageIsLoaded;
                  reader.readAsDataURL(e.files[0]);
        }else{
          alert("Please select a vild image");
        }
              function imageIsLoaded(e) {
                  $("#file").css('border-color','GREEN');
          //$("#textt").text("Selected Image : ");
                  $("#preview").attr('src',e.target.result);
          $("#preview").css('height','100px');
              }
        }

        $(":file").filestyle();
      </script>
</div>
</form>
</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
