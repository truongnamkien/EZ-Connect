<!DOCTYPE html>
<!--[if IE 8]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="ie9"><![endif]-->
<!--[if !IE]><!--><html lang="en"><!--<![endif]-->
    <head>
        <title>Unify | Login Page...</title>

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

        <!-- CSS Page Style -->
        <link rel="stylesheet" href="assets/css/pages/page_log_reg_v1.css">

        <!-- CSS Theme -->
        <link rel="stylesheet" href="assets/css/theme-colors/default.css">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="assets/css/custom.css">
    </head>

    <body>
        <div class="wrapper">
            <!--=== Header ===-->
            <div class="header">
                <?php include 'pagelet/top_nav.php'; ?>
                <?php include 'pagelet/main_menu.php'; ?>
            </div>
            <!--=== End Header ===-->

            <!--=== Breadcrumbs ===-->
            <div class="breadcrumbs">
                <div class="container">
                    <h1 class="pull-left">Login</h1>
                    <ul class="pull-right breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="">Pages</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div><!--/container-->
            </div><!--/breadcrumbs-->
            <!--=== End Breadcrumbs ===-->

            <!--=== Content Part ===-->
            <div class="container content">		
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <form class="reg-page">
                            <div class="reg-header">
                                <h2>Login to your account</h2>
                            </div>

                            <div class="input-group margin-bottom-20">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" placeholder="Username" class="form-control">
                            </div>
                            <div class="input-group margin-bottom-20">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" placeholder="Password" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6 checkbox">
                                    <label><input type="checkbox">Stay signed in</label>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn-u pull-right" type="submit">Login</button>
                                </div>
                            </div>

                            <hr>

                            <h4>Forget your Password ?</h4>
                            <p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>
                        </form>
                    </div>
                </div><!--/row-->
            </div><!--/container-->		
            <!--=== End Content Part ===-->

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