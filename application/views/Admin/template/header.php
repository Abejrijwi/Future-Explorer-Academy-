<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/fontawesome/css/all.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/css/main.css">
     <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/css/bootstrap.css"> -->

  </head>
  <body class="app sidebar-mini rtl">
    <!-- User type Login -->
          <?php
            $user = "";
              if ($_SESSION['logged_in']['utype'] == 1) {
                  $user = "ADMIN";
              }
              else{
                  $user = "USER";
              }
          ?>
    <!-- Navbar-->
    <header class="app-header "><a class="app-header__logo" href="#"><?php echo $user;?></a>
      <!-- Sidebar toggle button-->
      <a href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
        <i class="fas fa-align-left" style="color: #fff;position: absolute;top: 20px;left: 244px;"></i>
      </a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
          <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
          </li>

          <a class="app-nav__item" href="<?php echo site_url('Admin/logout'); ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </ul>
    </header><hr>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <aside class="app-sidebar ">

<!-- <?php echo base_url(); ?>public/upload/onlinereg/<?php echo $_SESSION['logged_in']['image']; ?> -->

        <div class="app-sidebar__user"><img src="<?php echo base_url(); ?>public/uploads/onlinereg/<?php echo $_SESSION['logged_in']['image']; ?>" alt="Picture" class=" img-circle" style="height: 70px">




          <div>
            <p class="app-sidebar__user-name m-2"><?php echo $_SESSION['logged_in']['name']; ?></p>
            <p class="app-sidebar__user-designation m-2 text-muted"><?php echo $_SESSION['logged_in']['email']; ?>
          </p>

                <?php
                  if ($_SESSION['logged_in']['status'] == 1) {
                ?>
                  <p class="app-sidebar__user-designation m-2 text-white"><i class="fas fa-certificate text-success m-2"></i>Online </p>
                        
                <?php } ?>

          </div>

        </div>

      <ul class="app-menu">



           <?php
                  if ($_SESSION['logged_in']['utype'] == 1) {
            ?>
            <li>
              <a class="app-menu__item " href="<?php echo site_url('Admin/log_user_status'); ?>">
                <i class="app-menu__icon fas fas fa-user"></i>
                <span class="app-menu__label">User Login Status</span></a>
            </li>

           <?php } ?>

            <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>
            <li>
              <a class="app-menu__item" href="<?php echo site_url('Admin/'); ?>">
                <i class="app-menu__icon fas fa-tachometer-alt"></i>
                <span class="app-menu__label">Dashboard</span></a>
            </li>
             <?php } ?>

            <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?> 
            <li>
              <a class="app-menu__item" href="<?php echo site_url('Admin/contact'); ?>">
                <i class="app-menu__icon fas fa-graduation-cap"></i>
                <span class="app-menu__label">Contact Us</span></a>
            </li>
            <?php } ?>

            <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?> 
            <li>
              <a class="app-menu__item" href="<?php echo site_url('Admin/feedback'); ?>">
                <i class="app-menu__icon fas fa-book"></i>
                <span class="app-menu__label">Feedback</span></a>
            </li>
          <?php } ?>

            <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?> 
            <li>
              <a class="app-menu__item" href="<?php echo site_url('Admin/Registration'); ?>">
                <i class="app-menu__icon fas fa-graduation-cap"></i>
                <span class="app-menu__label">Student Registration</span></a>
            </li>
            <?php } ?>

           

            <li>
              <a class="app-menu__item" href="<?php echo site_url('Admin/questan'); ?>">
                <i class="app-menu__icon fas fa-question"></i>
                <span class="app-menu__label">Manage Que & Ans</span></a>
            </li>

            <li>
              <a class="app-menu__item" href="<?php echo site_url('Admin/project'); ?>">
                <i class="app-menu__icon fas fa-question"></i>
                <span class="app-menu__label">Project</span></a>
            </li>


             <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>
           <li>
              <a class="app-menu__item" href="<?php echo site_url('Admin/gallery'); ?>">
                <i class="app-menu__icon fas fas fa-user-graduate"></i>
                <span class="app-menu__label">Manage Gallery</span></a>
            </li>
               <?php } ?>

            <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>
  
            <li>
              <a class="app-menu__item" href="<?php echo site_url('Admin/course'); ?>">
                <i class="app-menu__icon fas fas fa-user-graduate"></i>
                <span class="app-menu__label">Manage course</span></a>
            </li>
            <?php } ?>

            <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>
            <li>
              <a class="app-menu__item" href="">
                <i class="app-menu__icon fas fa-trophy"></i>
                <span class="app-menu__label">Examination Result</span></a>
            </li>
            <?php } ?>


            <?php if (($_SESSION['logged_in']['utype'] == 1) || ($_SESSION['logged_in']['utype'] == 2)) { ?>
            <li>
              <a class="app-menu__item" href="">
                <i class="app-menu__icon fas fa-user-lock"></i>
                <span class="app-menu__label">Manage Admin</span></a>
            </li>
            <?php } ?>

            <li>
              <a class="app-menu__item" href="">
                <i class="app-menu__icon fas fa-user"></i>
                <span class="app-menu__label">User Profile</span></a>
            </li>
      </ul>
    </aside>
</div>
    <!-- Main Side bar -->
    
    