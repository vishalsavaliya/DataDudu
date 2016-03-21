<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>API DOCUMENTATIONS </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?= base_url() ?>webassets/ico/favicon.png">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url() ?>webassets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?= base_url() ?>webassets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>webassets/css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,500,700' rel='stylesheet' type='text/css'>
        <script src="<?= base_url() ?>webassets/js/jquery.js"></script>
    </head>

    <body class="knowkedgebase">
        <!-- Navbar -->
        <header class="banner navbar navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <a title="KnowledgePress" href="<?=  site_url()?>en"><img src="<?= base_url() ?>webassets/img/logo.png" alt="KnowledgePress"/></a>
                    </div>
                    <button data-target=".nav-responsive" data-toggle="collapse" type="button" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <nav class="nav-main hidden-xs" role="navigation">
                    <form method="post" id="langform" action="#">
                        <ul id="menu-main" class="nav navbar-nav" style=""> 
<!--                            <li>                                
                                <label style="margin-top: 20px;color: #fff;font-weight: normal">Language</label>
                            </li> -->
                            <li>                                
                                <a href="<?=  site_url()?>cn" class="">Chinese</a>
                            </li>                        
                        </ul> 
                    </form>
                </nav> 
            </div>
        </header>

        <!-- Paga title -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-lg-8">
                        <h1>API DOCUMENTS</h1>
                        <p class="tagline">Search & Find API Documents</p>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <form role="search" method="post" id="searchform" class="form-search" action="<?= site_url() ?>en/search">
                            <div class="append-icon">
                                <input type="text" value="" name="keyword" id="autocomplete-dynamic" class="form-control input-lg" autocomplete="off" placeholder="Search...">
                                <span><i class="icon-search"></i></span>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>