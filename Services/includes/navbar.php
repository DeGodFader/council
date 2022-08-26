<?php include("../includes/header2.php")?>
<?php require_once("../../admin//includes/init.php")?>

<body class="container-fluid">
    <div class="container-fluid">
        <!-- Header Start -->
        <div class="header">
            <div class="container-">
                <div class="header-top row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand">
                            <a href="index.php">
                                # Council
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="topbar">
                            <div class="topbar-col">
                                <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+012 345 67890</a>
                            </div>
                            <div class="topbar-col">
                                <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>info@example.com</a>
                            </div>
                            <div class="topbar-col">
                                <div class="topbar-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar navbar-expand-lg bg-light navbar-light">
                            <a href="#" class="navbar-brand">MENU</a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav ml-auto">
                                    <a href="../../index.php" class="nav-item nav-link <?php if(basename($_SERVER["PHP_SELF"])=="index.php")echo "active"?>">Home</a>
                                    <a href="../../about.php" class="nav-item nav-link <?php if(basename($_SERVER["PHP_SELF"])=="about.php")echo "active"?>">About</a>
                                    <a href="se../../rvice.php" class="nav-item nav-link <?php if(basename($_SERVER["PHP_SELF"])=="service.php")echo "active"?>">Service</a>
                                    <a href="port../../folio.php" class="nav-item nav-link <?php if(basename($_SERVER["PHP_SELF"])=="portfolio.php")echo "active"?>">Project</a>
                                    <a href="s../../ingle.php" class="nav-item nav-link <?php if(basename($_SERVER["PHP_SELF"])=="single.php")echo "active"?>">Single</a>
                                    <a href="co../../ntact.php" class="nav-item nav-link <?php if(basename($_SERVER["PHP_SELF"])=="contact.php")echo "active"?>">Contact</a>
                                    <?php if(!isset($_SESSION["ID"])){?>
                                    <?php if(basename($_SERVER["PHP_SELF"])!="Login.php"){?><a href="../../Login.php" class="btn ">SignIn</a><?php }?>
                                    <?php if(basename($_SERVER["PHP_SELF"])!="Register.php"){?><a href="../../Register.php" class="btn">SignUp</a><?php }?>
                                    <?php }else{?>
                                        <?php if($_SESSION["Level"]==1){?><a href="admin/" class="btn ">Admin</a><?php }?>
                                        <a href="../../admin/Logout.php" class="btn ">LogOut</a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Header End -->
        <?php
          if(isset($_GET['Service']) && isset($_GET["Page"])){  
        ?>

        <div class="container-fluid">
            <div class="section-header">
                <h2><?php echo $_GET['Service']?></h2>
                <h3><?php echo $_GET["Page"]?></h3>
            </div>
        <br>
        </div>
        <?php }?>
        <div class="container-xl" style="max-width:1500px">
        <div class="container-fluid">