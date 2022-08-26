<?php include("includes/header2.php")?>
<body>
    <div class="container-fluid">
        <!-- Header Start -->
        <div class="header home">
            <div class="container-fluid">
            <?php include("includes/navbar.php")?>
                <div style="align-content:center">
                    <div class="hero row">

                    </div>
                </div>
            </div>
        </div>
        <!-- Header end -->

        <!-- Administrators List -->
        <div class="team">
    <div class="container-xl">
        <div class="section-header">
            <p>Council Member</p>
        </div>
        <div class="row">
            <?php 
                $Admins=$Pers->S_All();
                $i=1;
                foreach($Admins as $Admin){
                    
                    
            ?>
            <a href="<?php echo $Admin->Path?>">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo $Admin->Img;?>" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2><?php echo $Admin->Name;?></h2>
                        <h3><?php echo $Admin->Position;?></h3>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <?php }?>
        </div>
    </div>
</div>
        <!-- Administrators List end -->



<?php include("includes/footer.php")?>