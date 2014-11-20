<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>
        <title>Unify | Welcome...</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
        <link rel="stylesheet" href="assets/css/plugins/brand-buttons/brand-buttons.css">
        <link rel="stylesheet" href="assets/css/plugins/brand-buttons/brand-buttons-inversed.css">
        <link rel="stylesheet" href="assets/css/pages/page_one.css">

        <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

        <!-- CSS Theme -->    
        <link rel="stylesheet" href="assets/css/theme-colors/default.css">
        <link rel="stylesheet" href="assets/css/plugins/hover-effect/css/custom-hover-effects.css">
        <link rel="stylesheet" href="assets/css/pages/page_job_inner.css">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="assets/css/custom.css">
    </head> 

    <body class="header-fixed">
        <div class="wrapper">
            <div class="header">
                <div class="topbar">
                    <div class="container">
                        <!-- Topbar Navigation -->
                        <ul class="loginbar pull-right">
                            <li>
                                <i class="fa fa-globe"></i>
                                <a>Languages</a>
                                <ul class="languages">
                                    <li class="active">
                                        <a href="#">English <i class="fa fa-check"></i></a> 
                                    </li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">Russian</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                            <li class="topbar-devider"></li>   
                            <li><a href="page_faq.html">Help</a></li>  
                            <li class="topbar-devider"></li>   
                            <li><a href="page_login.html">Sign Up</a></li>   
                            <li class="topbar-devider"></li>   
                            <li><a href="page_login.html">Login</a></li>   
                        </ul>
                        <!-- End Topbar Navigation -->
                    </div>
                </div>
            </div>

            <!--=== Header v3 ===-->    
            <div class="header-v3 header-sticky">
                <!-- Navbar -->
                <div class="navbar navbar-default mega-menu" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <img id="logo-header" src="assets/img/logo1-default.png" alt="Logo">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <?php include 'main_menu.php'; ?>
                        </div><!--/navbar-collapse-->
                    </div>    
                </div>            
                <!-- End Navbar -->
            </div>
            <!--=== End Header v3 ===-->    

            <div class="bg-grey">
                <div class="container content job-partners">
                    <div class="title-box-v2">
                        <h2>Our <span class="color-green">Featured</span> Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <?php include 'software_list.php'; ?>
                    <?php include 'software_list.php'; ?>
                    <?php include 'software_list.php'; ?>
                    <?php include 'software_list.php'; ?>
                    <?php include 'software_list.php'; ?>
                </div>
            </div>

            <!--=== Footer Version 1 ===-->
            <div class="footer-v1">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <!-- About -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
                                <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                                <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>    
                            </div><!--/col-md-3-->
                            <!-- End About -->

                            <!-- Latest -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <div class="posts">
                                    <div class="headline"><h2>Latest Posts</h2></div>
                                    <ul class="list-unstyled latest-list">
                                        <li>
                                            <a href="#">Incredible content</a>
                                            <small>May 8, 2014</small>
                                        </li>
                                        <li>
                                            <a href="#">Best shoots</a>
                                            <small>June 23, 2014</small>
                                        </li>
                                        <li>
                                            <a href="#">New Terms and Conditions</a>
                                            <small>September 15, 2014</small>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/col-md-3-->  
                            <!-- End Latest --> 

                            <!-- Link List -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <div class="headline"><h2>Useful Links</h2></div>
                                <ul class="list-unstyled link-list">
                                    <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                                </ul>
                            </div><!--/col-md-3-->
                            <!-- End Link List -->                    

                            <!-- Address -->
                            <div class="col-md-3 map-img md-margin-bottom-40">
                                <div class="headline"><h2>Contact Us</h2></div>                         
                                <address class="md-margin-bottom-40">
                                    25, Lorem Lis Street, Orange <br />
                                    California, US <br />
                                    Phone: 800 123 3456 <br />
                                    Fax: 800 123 3456 <br />
                                    Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                                </address>
                            </div><!--/col-md-3-->
                            <!-- End Address -->
                        </div>
                    </div> 
                </div><!--/footer-->

                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">                     
                                <p>
                                    2014 &copy; All Rights Reserved.
                                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                                </p>
                            </div>

                            <!-- Social Links -->
                            <div class="col-md-6">
                                <ul class="footer-socials list-inline">
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Social Links -->
                        </div>
                    </div> 
                </div><!--/copyright-->
            </div>     
            <!--=== End Footer Version 1 ===-->
        </div><!--/wrapper-->

        <!-- JS Global Compulsory -->           
        <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
        <script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
        <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <!-- JS Customization -->
        <script type="text/javascript" src="assets/js/custom.js"></script>
        <!-- JS Page Level -->           
        <script type="text/javascript" src="assets/js/app.js"></script>
        <script type="text/javascript" src="assets/js/plugins/revolution-slider.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                App.init();
                App.initCounter();
                App.initParallaxBg();
                RevolutionSlider.initRSfullScreenOffset();
            });
        </script>
        <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
        <![endif]-->

    </body>
</html> 