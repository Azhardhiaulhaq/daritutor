<?php
    class navbar {
        public function __construct(){
        echo '
            <header id="header" class="header header-hide">
                <div class="container">
                <div id="logo" class="pull-left">
                    <h1><a href="../homepage/index.php#hero" class="scrollto"><span>dari</span>tutor</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="../homepage/index.php#hero"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                    <li class="menu-active"><a href="../homepage/index.php#hero">Home</a></li>
                    <li><a href="../homepage/index.php#features">Features</a></li>
                    <li><a href="../homepage/index.php#footer">About Us</a></li>
                    <li><a href="../login/index.php">Sign In</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </header><!-- #header --> ';
        }
    }
?>