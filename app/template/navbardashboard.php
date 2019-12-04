<?php
    class navbardashboard {
        public function __construct(){
        echo '
            <header id="header" class="header header-hide">
                <div class="container">
                <div id="logo" class="pull-left">
                    <h1><a href="../dashboard/index.php#hero" class="scrollto"><span>dari</span>tutor</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="../dashboard/index.php#hero"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                    <li class="menu-active"><a href="../dashboard/index.php#hero">Home</a></li>
                    <li><a href="../dashboard/index.php#features">History</a></li>
                    <li><a href="../dashboard/index.php#footer">About Us</a></li>
                    <li><a href="../login/index.php">Sign Out</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </header><!-- #header --> ';
        }
    }
?>