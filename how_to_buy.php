
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
        <?php include("sidebar.php"); ?>
        <!--left sidebar end-->

         <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-0"> How To Buy</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">How To Buy</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!--page title end-->


            <div class="container-fluid">
                <div class="content-form-wrapper">
                    <div class="content-form-title">
                        <h3>How To Buy</h3>
                    </div>
                    <?php 
                    if(isset($_POST["howtobuy_submit"]))
                    {
                        $hb_sl=$_POST["how_to_buy_picture_sl"];

                        if($hb_sl == !'')
                        {
                            $sql_insert=$db->link->query("INSERT INTO `how_to_buy` (`sl`) VALUES ('$hb_sl') ");

                            if($sql_insert)
                            {
                                $path="../assets/img/how_to_order/$hb_sl.jpg";
                                move_uploaded_file($_FILES['how_to_buy_picture']['tmp_name'],$path);
                                echo "<div class='alert alert-success'>Data Insert Successfully!</div>";
                            }
                            else
                            {
                                echo "<div class='alert alert-danger'>Data Insert Unsuccessfully!</div>";
                            }
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>All Fields Are Required!</div>";
                        }

                    }

                    ?>
                    <div class="content-form">
                      <div class="form-group row">
                        <label class="col-lg-4 col-md-4 col-12"><b>SL</b></label>
                        <input type="number" name="how_to_buy_picture_sl" class="form-control col-lg-5 col-md-5 col-12">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-md-4 col-12"><b>Image</b></label>
                        <input type="file" name="how_to_buy_picture">
                    </div>
                    </div>
                    <div class="submit-btn" style="text-align: center;margin-top: 20px;">
                         <input type="submit" name="howtobuy_submit" value="Submit" class="btn btn-info">
                         <input type="submit" name="howtobuy_view" value="View" class="btn btn-secondary">
                    </div>
                    <?php 

                    if(isset($_POST["howtobuy_view"]))
                    {
                    ?>
                    <table class="table table-hover table-bordered" style="margin-top: 50px;">
                        <tr>
                            <th>Id</th>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    <?php
                    $sql_select=$db->link->query("SELECT * FROM `how_to_buy`");
                    if($sql_select)
                    {
                        while ($fetch = $sql_select->fetch_array()) 
                        {
                        ?>
                        <tr>
                            <td><?php echo $fetch['0']; ?></td>
                            <td><?php echo $fetch['1']; ?></td>
                            <td>
                                <img src="../assets/img/how_to_order/<?php echo $fetch['1'] ?>.jpg" style="height: 50px;width: 50px;">
                            </td>
                            <td>
                                <a href="hbt_edit.php?htbId=<?php echo $fetch['0'] ?>" class="btn btn-info">Edit</a>
                                <a href="hbt_delete.php?htbId=<?php echo $fetch['0'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                    ?>
                    </table>
                    <?php
                    }

                    ?>
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
