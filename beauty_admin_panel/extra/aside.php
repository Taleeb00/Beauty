<?php
include "connection.php";
?>
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
     
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          
            <li>
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            
            </li>
            <li class="treeview">
              <a href="apply_data_table.php?check ">
                <i class="fa fa-files-o"></i>
                <span>Apply Table</span>
                <span class="label label-primary pull-right">
                <?php
                  $result= mysqli_query($connect,"SELECT Count(id) as idd from apply where view_status= 'not view'");
                  $row=mysqli_fetch_array($result);
                  echo $row['idd'];
                  
                ?>

                </span>
              </a>
            </li>
            <li class="treeview">
              <a href="services_form.php">
                <i class="fa fa-files-o"></i>
                <span>Add Services</span>
                <span class="label label-primary pull-right"></span>
              </a>
            </li>
            <li class="treeview">
              <a href="contact.php">
                <i class="fa fa-files-o"></i>
                <span>Contact From</span>
                <span class="label label-primary pull-right"></span>
              </a>
            </li>
            <li class="treeview">
              <a href="contact_timing.php?check">
                <i class="fa fa-files-o"></i>
                <span>Opening days form</span>
               
              </a>
            </li>
            </li>
    
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>