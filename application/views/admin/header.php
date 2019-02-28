<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <link rel="shortcut icon" href="<?php echo base_url();?>/asset/web/img/icon.png">
    <link href="<?php echo base_url();?>/asset/web/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/asset/web/css/logo-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/web/css/font-awesome.css">
    <script src="<?php echo base_url(); ?>asset/web/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>asset/web/js/jquery-2.2.3.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span> 
                 </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url();?>/asset/web/img/logopa.png" width="188px" height="50px">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right ">
                    <li >
                        <a href="<?php echo base_url();?>index.php/cpanel">
                        <i class="fa fa-home"></i> Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/cpanel/pengumuman">
                        <i class="fa fa-bullhorn"></i> Pengumuman</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/cpanel/jadwal_kuliah">
                        <i class="fa fa-clock-o"></i> Jadwal Kuliah</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/cpanel/data_mahasiswa">
                        <i class="fa fa-users"></i> Data Mahasiswa</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>index.php/cpanel/data_dosen">
                        <i class="fa fa-user"></i> Data Dosen</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>index.php/cpanel/struktur_organisasi">
                        <i class="fa fa-sitemap"></i> Struktur Organisasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/cpanel/logout">
                        <i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


          
  