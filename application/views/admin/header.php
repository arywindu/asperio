<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/res/admin/images/favicon.png">
    <title><?php echo $title_web; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/res/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/res/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/res/admin/css/style_new.css" rel="stylesheet">    
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>/res/admin/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url(); ?>/res/img/logo.png" alt="homepage" class="img-logo" />
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text 
                        <span>
                            <img src="<?php echo base_url(); ?>/res/img/logo.png" alt="homepage" class="dark-logo" />
                        </span>
                        -->
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('ctrl'); ?>" target="blank"><i class="fa fa-window-maximize"></i> Visit website</a>
                        </li>                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>/upload/img_profile/default.png" alt="user" class="profile-pic m-r-5" /><?php echo $this->session->username; ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                         <li>
                            <a href="<?php echo site_url('ctrladmin'); ?>" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('ctrladmin/article'); ?>" class="waves-effect"><i class="fa fa-file-text-o m-r-10" aria-hidden="true"></i>Artikel</a>
                        </li>                        
                        <li><!-- 
                            <a href="<?php echo site_url('ctrladmin/registrant'); ?>" class="waves-effect"><i class="fa fa-grav m-r-10" aria-hidden="true"></i>Data Pengguna</a> -->
                        </li>                        
                        <li><!--
                            <a href="<?php echo site_url('ctrladmin/administrator'); ?>" class="waves-effect"><i class="fa fa-mortar-board m-r-10" aria-hidden="true"></i>Data Admin</a> -->
                        </li>
                        <li> 
                            <a href="<?php echo site_url('ctrladmin/slider_image'); ?>" class="waves-effect"><i class="fa fa-image m-r-10" aria-hidden="true"></i>Webinar</a>
                        </li>
                        <li> <!-- 
                            <a href="<?php echo site_url('ctrladmin/contraception'); ?>" class="waves-effect"><i class="fa fa-modx m-r-10" aria-hidden="true"></i>Alat Kontrasepsi</a> -->
                        </li>
                    </ul>
                    <center>
                        <a class="btn btn-danger mt-4" href="<?php echo site_url('ctrladmin/user_logout'); ?>"><i class="fa fa-power-off"></i> Sign out</a>
                    </center>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        