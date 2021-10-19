
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
        <?php include("sidebar.php") ?>
        <!--left sidebar end-->

         <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mb-0"> View Sub Menu</h4>
                            <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="default-color">Home</a></li>
                                <li class="breadcrumb-item active">View Sub Menu</li>
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

                <div class="back-menu">
                  <a href="sub_menu_add.php" class="btn btn-outline-success">Add Sub Menu</a>
                </div>

                <div class="admin-view-area">
                   <table class="table table-bordered table-hover table-stripped" style="text-align: center;">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Serial Number</th>
                               <th>Main Menu Name</th>
                               <th>Sub Menu Name</th>
                               <th>Link Name</th>
                               <th>Route Name</th>
                               <th>Action</th>
                           </tr>
                           <?php
                           $limit=10;
                           if($_GET['page'])
                           {
                             $page=$_GET['page'];
                           }
                           else
                           {
                             $page=1;
                           }
                           $offset=($page-1) * $limit;
                           $sql_select=$db->link->query("SELECT * FROM `sub_menu` LIMIT $offset,$limit");
                           if($sql_select)
                           {
                             while ($fetch = $sql_select->fetch_assoc())
                             {
                           ?>
                           <tr>
                             <td><?php echo $fetch['id'] ?></td>
                             <td><?php echo $fetch['sl'] ?></td>
                             <td><?php echo $fetch['main_menu_name'] ?></td>
                             <td><?php echo $fetch['sub_menu_name'] ?></td>
                             <td><?php echo $fetch['link_name'] ?></td>
                             <td><?php echo $fetch['route_name'] ?></td>
                             <td>
                               <a href="sub_menu_edit.php?subMenuid=<?php echo $fetch['id'] ?>" class="btn btn-outline-success">Edit</a>
                               <a href="sub_menu_delete.php?subMenuid=<?php echo $fetch['id'] ?>" class="btn btn-outline-danger">Delete</a>
                             </td>
                           </tr>
                           <?php
                             }
                           }
                           ?>
                       </thead>
                   </table>
                </div>
                <!-- pagination -->

                <nav aria-label="...">
                  <?php
                  $sql_select1=$db->link->query("SELECT * FROM `sub_menu`");
                  if(mysqli_num_rows($sql_select1) > 0)
                  {
                  ?>
                  <ul class="pagination">
                  <?php
                    $total_records=mysqli_num_rows($sql_select1);
                    $total_pages=ceil($total_records / $limit);

                    if($page  > 1)
                    {
                    ?>
                    <li class="page-item">
                      <a class="page-link" href="view-sub_menu.php?page=<?php echo ($page - 1); ?>" tabindex="-1">Previous</a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php
                    for ($i=1; $i <= $total_pages ; $i++)
                    {
                      if($i == $page)
                      {
                        $active="active";
                      }
                      else
                      {
                        $active="";
                      }
                    ?>
                    <li class="page-item <?php echo $active; ?>">
                      <a class="page-link" href="view-sub_menu.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                    <?php
                      }
                      ?>
                      <?php
                      if($total_pages > $page)
                      {
                      ?>
                      <li class="page-item">
                        <a class="page-link" href="view-sub_menu.php?page=<?php echo ($page + 1); ?>">Next</a>
                      </li>
                      <?php
                      }
                    }
                    ?>
                    </ul>
                </nav>

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
