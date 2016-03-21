<<<<<<< HEAD
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>API Docs Management Sys</title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->

        <!-- start: GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <!-- end: GOOGLE FONTS -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/themify-icons/themify-icons.min.css">
        <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
        <!-- end: MAIN CSS -->
        <!-- start: CLIP-TWO CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/themes/theme-1.css" id="skin_color" />
        <!-- end: CLIP-TWO CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

        <link href="<?= base_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/DataTables/css/DT_bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">

        <link href="<?= base_url() ?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">

        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/iCheck/all.css"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/iCheck/minimal/blue.css"  />

        <link href="<?= base_url() ?>assets/alertify/alertify.core.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>assets/alertify/alertify.default.css" rel="stylesheet" type="text/css"/>

        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

        <style type="text/css">
            .action-row{
                margin: 10px 0;
            }
            table thead tr th,
            table tbody tr td{
                text-align: center
            }
        </style>

    </head>   
    <body>
        <div id="app">
            <!-- sidebar -->
            <div class="sidebar app-aside" id="sidebar">
                <div class="sidebar-container perfect-scrollbar">
                    <nav>
                        <!-- start: MAIN NAVIGATION MENU -->                        
                        <ul class="main-navigation-menu">                            
                            <li>
                                <a href="<?= site_url() ?>admin/category">
                                    <div class="item-content">
                                        <div class="item-media">
                                            <i class="ti-home"></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> API Category </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url() ?>admin/document">
                                    <div class="item-content">
                                        <div class="item-media">
                                            <i class="ti-home"></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> API Document </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- end: MAIN NAVIGATION MENU -->
                    </nav>
                </div>
            </div>
            <!-- / sidebar -->
            <div class="app-content">
                <!-- start: TOP NAVBAR -->
                <header class="navbar navbar-default navbar-static-top">
                    <!-- start: NAVBAR HEADER -->
                    <div class="navbar-header">
                        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="navbar-brand" href="#">
                            <img src="<?=  base_url()?>assets/images/logo.png" alt="DataDuhu"/>                 
                        </a>
                        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="ti-view-grid"></i>
                        </a>
                    </div>
                    <!-- end: NAVBAR HEADER -->
                    <!-- start: NAVBAR COLLAPSE -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-right">
                            
                            
                            <!-- start: USER OPTIONS DROPDOWN -->
                            <li class="dropdown current-user">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url() ?>assets/images/avatar-1.jpg" alt=""> <span class="username"><i class="ti-angle-down"></i></i></span>
                                </a>
                                <ul class="dropdown-menu dropdown-dark">
                                    <li>
                                        <a href="<?= site_url() ?>admin/logout">
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: USER OPTIONS DROPDOWN -->
                        </ul>
                        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
                        <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <div class="arrow-left"></div>
                            <div class="arrow-right"></div>
                        </div>
                        <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
                    </div>
                    <!-- end: NAVBAR COLLAPSE -->
                </header>
=======
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>API Docs Management Sys</title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->

        <!-- start: GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <!-- end: GOOGLE FONTS -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/themify-icons/themify-icons.min.css">
        <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
        <!-- end: MAIN CSS -->
        <!-- start: CLIP-TWO CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/themes/theme-1.css" id="skin_color" />
        <!-- end: CLIP-TWO CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

        <link href="<?= base_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/DataTables/css/DT_bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">

        <link href="<?= base_url() ?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url() ?>assets/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">

        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/iCheck/all.css"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/iCheck/minimal/blue.css"  />

        <link href="<?= base_url() ?>assets/alertify/alertify.core.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>assets/alertify/alertify.default.css" rel="stylesheet" type="text/css"/>

        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

        <style type="text/css">
            .action-row{
                margin: 10px 0;
            }
            table thead tr th,
            table tbody tr td{
                text-align: center
            }
        </style>

    </head>   
    <body>
        <div id="app">
            <!-- sidebar -->
            <div class="sidebar app-aside" id="sidebar">
                <div class="sidebar-container perfect-scrollbar">
                    <nav>
                        <!-- start: MAIN NAVIGATION MENU -->                        
                        <ul class="main-navigation-menu">                            
                            <li>
                                <a href="<?= site_url() ?>admin/category">
                                    <div class="item-content">
                                        <div class="item-media">
                                            <i class="ti-home"></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> API Category </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url() ?>admin/document">
                                    <div class="item-content">
                                        <div class="item-media">
                                            <i class="ti-home"></i>
                                        </div>
                                        <div class="item-inner">
                                            <span class="title"> API Document </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- end: MAIN NAVIGATION MENU -->
                    </nav>
                </div>
            </div>
            <!-- / sidebar -->
            <div class="app-content">
                <!-- start: TOP NAVBAR -->
                <header class="navbar navbar-default navbar-static-top">
                    <!-- start: NAVBAR HEADER -->
                    <div class="navbar-header">
                        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="navbar-brand" href="#">
                            <img src="<?=  base_url()?>assets/images/logo.png" alt="DataDuhu"/>                 
                        </a>
                        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="ti-view-grid"></i>
                        </a>
                    </div>
                    <!-- end: NAVBAR HEADER -->
                    <!-- start: NAVBAR COLLAPSE -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-right">
                            
                            
                            <!-- start: USER OPTIONS DROPDOWN -->
                            <li class="dropdown current-user">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url() ?>assets/images/avatar-1.jpg" alt=""> <span class="username"><i class="ti-angle-down"></i></i></span>
                                </a>
                                <ul class="dropdown-menu dropdown-dark">
                                    <li>
                                        <a href="<?= site_url() ?>admin/logout">
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: USER OPTIONS DROPDOWN -->
                        </ul>
                        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
                        <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <div class="arrow-left"></div>
                            <div class="arrow-right"></div>
                        </div>
                        <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
                    </div>
                    <!-- end: NAVBAR COLLAPSE -->
                </header>
>>>>>>> origin/master
                <!-- end: TOP NAVBAR -->