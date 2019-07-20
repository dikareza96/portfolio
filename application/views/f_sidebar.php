<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE HTML>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lonon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Rambla:400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/et-lineicons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css')?>">
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="lonon-page"> <a href="#" class="js-lonon-nav-toggle lonon-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->
        <aside id="lonon-aside">
            <!-- Logo -->
            <h1 id="lonon-logo">
                <img src="images/profile.jpg" alt=""><br />
                <a href="index.html">Lonon F. Smith<span>Web Designer</span></a>
            </h1>
            <!-- Menu -->
            <nav id="lonon-main-menu">
                <ul>
                    <li class="lonon-active"><a href="<?=site_url('data/index');?>">Home</a></li>
                    <li><a href="<?=site_url('data/resume');?>">Resume</a></li>
                    <li><a href="<?=site_url('data/portfolio');?>">Portfolio</a></li>
                    <li><a href="<?=site_url('data/services');?>">Services</a></li>
                    <li><a href="<?=site_url('data/blog');?>">Blog</a></li>
                    <li><a href="<?=site_url('data/contact');?>">Contact</a></li>
                </ul>
            </nav>
            <!-- Sidebar Footer -->
            <div class="lonon-footer">
                <ul>
                    <li><a href="#"><i class="ti-facebook font-14px gray-icon"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt font-14px gray-icon"></i></a></li>
                    <li><a href="#"><i class="ti-instagram font-14px gray-icon"></i></a></li>
                    <li><a href="#"><i class="ti-dribbble font-14px gray-icon"></i></a></li>
                </ul>
                <p><small>&copy; 2019 Lonon. by <a href="#">DuruThemes</a></small></p>
            </div>
        </aside>
        