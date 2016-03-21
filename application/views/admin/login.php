<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>API Docs Management Sys</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />

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
    </head>
    <!-- start: BODY -->
    <body style="background: #FFF">
        <!-- start: LOGIN -->
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="logo margin-top-30">
                    <img src="<?= base_url() ?>assets/images/logo.png" alt="Clip-Two"/>
                </div>
                <!-- start: LOGIN BOX -->
                <div class="box-login">
                    <form class="form-login" action="<?= site_url() ?>admin/login/checkLogin" method="post">
                        <fieldset>
                            <legend>
                                Sign in to your account
                            </legend>
                            <p>
                                Please enter your name and password to log in.
                            </p>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                                    <i class="fa fa-envelope"></i> </span>
                            </div>
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <input type="password" class="form-control password" name="password" placeholder="Password" required="">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <?php
                            $error = $this->session->userdata('error');
                            $this->session->unset_userdata('error');
                            ?>
                            <?php if ($error != ""): ?>
                                <div class="md-form-group">
                                    <span style="color:red"><?= $error ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- end: LOGIN BOX -->
            </div>
        </div>
        <!-- end: LOGIN -->
        <!-- start: MAIN JAVASCRIPTS -->
        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery-cookie/jquery.cookie.js"></script>
        <script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/switchery/switchery.min.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="<?= base_url() ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: CLIP-TWO JAVASCRIPTS -->
        <script src="<?= base_url() ?>assets/js/main.js"></script>
        <!-- start: JavaScript Event Handlers for this page -->
        <script src="<?= base_url() ?>assets/js/login.js"></script>
        <script>
            jQuery(document).ready(function () {
                Main.init();
                Login.init();
            });
        </script>
        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
    <!-- end: BODY -->
</html>
=======
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>API Docs Management Sys</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />

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
    </head>
    <!-- start: BODY -->
    <body style="background: #FFF">
        <!-- start: LOGIN -->
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="logo margin-top-30">
                    <img src="<?= base_url() ?>assets/images/logo.png" alt="Clip-Two"/>
                </div>
                <!-- start: LOGIN BOX -->
                <div class="box-login">
                    <form class="form-login" action="<?= site_url() ?>admin/login/checkLogin" method="post">
                        <fieldset>
                            <legend>
                                Sign in to your account
                            </legend>
                            <p>
                                Please enter your name and password to log in.
                            </p>
                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                                    <i class="fa fa-envelope"></i> </span>
                            </div>
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <input type="password" class="form-control password" name="password" placeholder="Password" required="">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <?php
                            $error = $this->session->userdata('error');
                            $this->session->unset_userdata('error');
                            ?>
                            <?php if ($error != ""): ?>
                                <div class="md-form-group">
                                    <span style="color:red"><?= $error ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- end: LOGIN BOX -->
            </div>
        </div>
        <!-- end: LOGIN -->
        <!-- start: MAIN JAVASCRIPTS -->
        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery-cookie/jquery.cookie.js"></script>
        <script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/switchery/switchery.min.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="<?= base_url() ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: CLIP-TWO JAVASCRIPTS -->
        <script src="<?= base_url() ?>assets/js/main.js"></script>
        <!-- start: JavaScript Event Handlers for this page -->
        <script src="<?= base_url() ?>assets/js/login.js"></script>
        <script>
            jQuery(document).ready(function () {
                Main.init();
                Login.init();
            });
        </script>
        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
    <!-- end: BODY -->
</html>
>>>>>>> origin/master
