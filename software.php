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

            <div class="bg-grey">
                <div class="container content job-partners">
                    <div class="title-box-v2">
                        <h2>Our <span class="color-green">Featured</span> Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <?php include 'pagelet/software_list.php'; ?>
                    <?php include 'pagelet/software_list.php'; ?>
                    <?php include 'pagelet/software_list.php'; ?>
                    <?php include 'pagelet/software_list.php'; ?>
                    <?php include 'pagelet/software_list.php'; ?>
                </div>
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