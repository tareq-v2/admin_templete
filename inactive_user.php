
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
                            <h4 class="mb-0"> Viewe Inactive User</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">View Inactive User</li>
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
                            <input type="search" name="search_field"> <input type="submit" name="search_btn" class="btn btn-secondary" value="Search">
                        </div>
                    </div>
                </div>


                <div class="seller-view-area" style="margin-top: 50px;">
                   <table class="table table-bordered table-hover table-stripped">
                       <thead>
                           <tr class="table-active">
                               <th>Access</th>
                               <th>Id</th>
                               <th>Name</th>
                               <th>Phone</th>
                               <th>E-mail</th>
                               <th>Adress</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                         <?php

                         if(isset($_POST["search_btn"]))
                         {
                            $value=$_POST["search_field"];

                            $sql_query=$db->link->query("SELECT * FROM `guest_info` WHERE `guest_name` LIKE '%$value%' OR `guest_mail` LIKE '%$value%' && `status`='inactive' ");
                            if($sql_query)
                            {
                              while ($fetch_search=$sql_query->fetch_assoc()) 
                              {
                              ?>
                              <tr>
                                <td><a target="blank" href="guest_access_login.php?guest_email=<?php echo $fetch_search['guest_mail'] ?>&guest_pwd=<?php echo $fetch_search['guest_pwd']; ?>" class="btn btn-info">Login</a></td>
                                <td><?php echo $fetch_search['id']; ?></td>
                                <td><?php echo $fetch_search['guest_name']; ?></td>
                                <td><?php echo $fetch_search['guest_phone']; ?></td>
                                <td><?php echo $fetch_search['guest_mail']; ?></td>
                                <td><?php echo $fetch_search['guest_adress']; ?></td>
                                <td>
                                  <?php 

                                  if($fetch_search['status'] == 'inactive')
                                  {
                                  ?>
                                  <a href="guest_active_status_change.php?guest_id=<?php echo $fetch_search['id']; ?>" class="btn btn-secondary">Active</a>
                                  <?php
                                  }
                                  elseif($fetch_search['status'] == 'active')
                                  {
                                  ?>
                                  <a href="guest_inactive_status_change.php?guest_id=<?php echo $fetch_search['id']; ?>" class="btn btn-warning">Inactive</a>
                                  <?php
                                  }
                                  ?>
                                </td>
                                <td>
                                  <a href="guest_delete.php?guest_id=<?php echo $fetch_search['id']; ?>&guest_name=<?php echo $fetch_search['guest_name']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                              <?php
                              }
                            }
                         }
                         else
                         {
                            $sql_select=$db->link->query("SELECT * FROM `guest_info`  WHERE `status`='inactive'");

                           if($sql_select)
                           {
                            while ($fetch=$sql_select->fetch_assoc()) 
                            {
                            ?>
                            <tr>
                              <td><a target="blank" href="guest_access_login.php?guest_email=<?php echo $fetch['guest_mail'] ?>&guest_pwd=<?php echo $fetch['guest_pwd']; ?>" class="btn btn-info">Login</a></td>
                              <td><?php echo $fetch['id']; ?></td>
                              <td><?php echo $fetch['guest_name']; ?></td>
                              <td><?php echo $fetch['guest_phone']; ?></td>
                              <td><?php echo $fetch['guest_mail']; ?></td>
                              <td><?php echo $fetch['guest_adress']; ?></td>
                              <td>
                                <?php 

                                if($fetch['status'] == 'inactive')
                                {
                                ?>
                                <a href="guest_active_status_change.php?guest_id=<?php echo $fetch['id']; ?>" class="btn btn-secondary">Active</a>
                                <?php
                                }
                                elseif($fetch['status'] == 'active')
                                {
                                ?>
                                <a href="guest_inactive_status_change.php?guest_id=<?php echo $fetch['id']; ?>" class="btn btn-warning">Inactive</a>
                                <?php
                                }
                                ?>
                              </td>
                              <td>
                                <a href="guest_delete.php?guest_id=<?php echo $fetch['id']; ?>&guest_name=<?php echo $fetch['guest_name']; ?>" class="btn btn-danger">Delete</a>
                              </td>
                            </tr>
                          <?php
                            }

                           }
                         }
                         ?>
                       </tbody>
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
  </div>
</form>
</body>

<!-- Mirrored from mosaddek.com/theme/diverse/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jul 2020 06:47:43 GMT -->
</html>
