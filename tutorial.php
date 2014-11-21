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
            <?php include 'pagelet/top_nav.php'; ?>
            <?php include 'pagelet/main_menu.php'; ?>


            <div class="breadcrumbs">
                <div class="container">
                    <h1 class="pull-left">Tutorial</h1>
                    <ul class="pull-right breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="software.php">Software</a></li>
                        <li><a href="sub_software.php">Sub Software</a></li>
                        <li class="active">Tutorial</li>
                    </ul>
                </div>
            </div>

            <div class="container content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="funny-boxes funny-boxes-colored funny-boxes-blue">
                            <div class="row">
                                <div class="col-md-4 funny-boxes-img">
                                    <h2><a href="#">Blue Box</a></h2>
                                    <ul class="list-unstyled funny-boxes-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
                                    <a href="#" class="btn-u btn-u-red">read more</a>
                                </div>
                                <div class="col-md-8">
                                    <img class="img-responsive" src="assets/img/new/img5.jpg" alt="">
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>          
                <div class="headline-center margin-top-20">
                    <h2>Recent Works</h2>
                    <p>Integer odio ligula, tincidunt id volutpat et, imperdiet eget mi. Quisque laoreet porttitor turpis sed <a href="#">fermentum</a>. Nullam sodales blandit nisi, tristique tempor nunc hendrerit at. Sed posuere mollis orci</p>
                </div>

                <?php include 'pagelet/tutorial_list.php'; ?>
                <?php include 'pagelet/tutorial_list.php'; ?>
                <?php include 'pagelet/tutorial_list.php'; ?>
                <?php include 'pagelet/tutorial_list.php'; ?>
                <?php include 'pagelet/tutorial_list.php'; ?>
            </div>


            <?php include 'pagelet/footer.php'; ?>
        </div><!--/wrapper-->

        <!-- JS Global Compulsory -->           
        <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
        <!-- JS Customization -->
        <script type="text/javascript" src="assets/js/custom.js"></script>
        <!-- JS Page Level -->           
        <script type="text/javascript" src="assets/js/app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                App.init();
            });
        </script>
        <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
        <![endif]-->

    </body>
</html> 