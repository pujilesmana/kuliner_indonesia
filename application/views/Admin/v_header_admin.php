<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?php echo $title?></title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/admin/images/favicon.ico" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/style.css" />
 
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<!-- <div id="pre-loader">
    <img src="images/pre-loader/loader-01.svg" alt="">
</div>
 -->
<!--=================================
 preloader -->


<!--=================================
 header start-->
 
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url()?>assets/admin/images/logo-dark.png" alt="" ></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url()?>assets/admin/images/logo-icon-dark.png" alt=""></a>
  </div>
  <!-- Top bar left -->
  <!-- top bar right -->
  <ul class="nav navbar-nav ml-auto">
   <!--  <li class="nav-item dropdown ">
      <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="ti-bell"></i>
        <span class="badge badge-danger notification-status"> </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
        <div class="dropdown-header notifications">
          <strong>Notifications</strong>
          <span class="badge badge-pill badge-warning">05</span>
        </div>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">New registered user <small class="float-right text-muted time">Just now</small> </a>
        <a href="#" class="dropdown-item">New invoice received <small class="float-right text-muted time">22 mins</small> </a>
        <a href="#" class="dropdown-item">Server error report<small class="float-right text-muted time">7 hrs</small> </a>
        <a href="#" class="dropdown-item">Database report<small class="float-right text-muted time">1 days</small> </a>
        <a href="#" class="dropdown-item">Order confirmation<small class="float-right text-muted time">2 days</small> </a>
      </div>
    </li> -->
    <?php
      $id_admin=$this->session->userdata('idadmin');
      $q=$this->db->query("SELECT * FROM user WHERE user_id='$id_admin'");
      $c=$q->row_array();
    ?>
    <li class="nav-item dropdown mr-30">
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="<?php echo base_url()?>assets/admin/images/profile-avatar.jpg" alt="avatar">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
          <div class="media">
            <div class="media-body">
              <h5 class="mt-0 mb-0"><?php echo $c['user_nama'];?></h5>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo base_url()?>Login/logout"><i class="text-danger ti-unlock"></i>Logout</a>
      </div>
    </li>
  </ul>
</nav>

<!--=================================
 header End-->

<!--=================================
 Main content -->
 
<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar start-->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
      <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
            <li> <a href="<?php echo base_url()?>Admin/Home">Tulisan</a> </li>
            <li> <a href="<?php echo base_url()?>Admin/Kategori">Kategori</a> </li>
          </ul>
        </li>
        <!-- menu title -->
         <!-- <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li> -->
        <!-- menu item Elements-->       
        <!-- <li>
          <a href="<?php echo base_url()?>Admin/Home"><i class="ti-menu-alt"></i><span class="right-nav-text">Tulisan</span> </a>
        </li> -->
        </ul>
      </li>
    </ul>
  </div> 
</div>  

<!-- Left Sidebar End-->