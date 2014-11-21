<div class="header-v3 header-sticky">
    <div class="navbar navbar-default mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img id="logo-header" src="assets/img/logo1-default.png" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse"><ul class="nav navbar-nav">
                    <?php for ($j = 0; $j < 5; $j++): ?>
                        <!-- Portfolio -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="software.php" class="dropdown-toggle">
                                Software
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row equal-height">
                                                <?php for ($i = 0; $i < 6; $i++): ?>
                                                    <div class="col-md-2 equal-height-in">
                                                        <ul class="list-unstyled equal-height-list">
                                                            <li><h3>#</h3></li>
                                                            <li><a href="sub_software.php">3D-Coat</a></li>
                                                            <li><a href="sub_software.php">3DEqualizer</a></li>
                                                            <li><a href="sub_software.php">3ds Max</a></li>

                                                            <li><h3>A</h3></li>
                                                            <li><a href="sub_software.php">After Effects</a></li>
                                                            <li><a href="sub_software.php">Arnold</a></li>
                                                            <li><a href="sub_software.php">AutoCAD</a></li>
                                                            <li><a href="sub_software.php">Axure</a></li>

                                                            <li><h3>B</h3></li>
                                                            <li><a href="sub_software.php">Backburner</a></li>
                                                            <li><a href="sub_software.php">Behance</a></li>
                                                            <li><a href="sub_software.php">Blender</a></li>
                                                            <li><a href="sub_software.php">BodyPaint 3D</a></li>
                                                            <li><a href="sub_software.php">boujou</a></li>
                                                        </ul>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Ens Portfolio -->

                        <li class="dropdown mega-menu-fullwidth">
                            <a href="software.php" class="dropdown-toggle">
                                3D
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row equal-height">
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list two-column">
                                                        <li class="title"><h3>Default</h3></li>
                                                        <li><a href="sub_software.php">Animation</a></li>
                                                        <li><a href="sub_software.php">Dynamics</a></li>
                                                        <li><a href="sub_software.php">Getting Started</a></li>
                                                        <li><a href="sub_software.php">Lighting</a></li>
                                                        <li><a href="sub_software.php">Modeling</a></li>
                                                        <li><a href="sub_software.php">Rendering</a></li>
                                                        <li><a href="sub_software.php">Rigging</a></li>
                                                        <li><a href="sub_software.php">Scripting</a></li>
                                                        <li><a href="sub_software.php">Sculpting</a></li>
                                                        <li><a href="sub_software.php">Texturing</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list three-column">
                                                        <li class="title"><h3>Default</h3></li>
                                                        <li><a href="sub_software.php">Animation</a></li>
                                                        <li><a href="sub_software.php">Dynamics</a></li>
                                                        <li><a href="sub_software.php">Getting Started</a></li>
                                                        <li><a href="sub_software.php">Lighting</a></li>
                                                        <li><a href="sub_software.php">Modeling</a></li>
                                                        <li><a href="sub_software.php">Rendering</a></li>
                                                        <li><a href="sub_software.php">Rigging</a></li>
                                                        <li><a href="sub_software.php">Scripting</a></li>
                                                        <li><a href="sub_software.php">Sculpting</a></li>
                                                        <li><a href="sub_software.php">Texturing</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 equal-height-in">
                                                    <ul class="list-unstyled equal-height-list two-column">
                                                        <li class="title"><h3>Default</h3></li>
                                                        <li><a href="sub_software.php">Animation</a></li>
                                                        <li><a href="sub_software.php">Dynamics</a></li>
                                                        <li><a href="sub_software.php">Getting Started</a></li>
                                                        <li><a href="sub_software.php">Lighting</a></li>
                                                        <li><a href="sub_software.php">Modeling</a></li>
                                                        <li><a href="sub_software.php">Rendering</a></li>
                                                        <li><a href="sub_software.php">Rigging</a></li>
                                                        <li><a href="sub_software.php">Scripting</a></li>
                                                        <li><a href="sub_software.php">Sculpting</a></li>
                                                        <li><a href="sub_software.php">Texturing</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    <?php endfor; ?>

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/navbar-collapse-->
        </div>
    </div>
</div>