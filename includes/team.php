<div class="team">
    <div class="container-xl" style="max-width:1500px">
        <div class="section-header">
            <p>Team Member</p>
            <h2>Meet Our Council Administrators</h2>
        </div>
        <div class="row">
            <?php 
                $img="img/team-1.jpg";
                $Admins=$Pers->S_All();
                $i=1;
                foreach($Admins as $Admin){
                    if($i<=4){
            ?>
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
            <?php $i++;}else{break;}}?>
            <div class="justify-content-center input-group container-fluid">
                <a href="Administrators.php" class="btn " style="background-color:#467c99">Show more</a>
            </div>
        </div>
    </div>
</div>