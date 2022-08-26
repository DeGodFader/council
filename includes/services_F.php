<div class="service">
    <div class="container-xl" style="max-width:1500px">
        <div class="section-header">
            <p>Our Services</p>
            <h2>Provide Services Worldwide</h2>
        </div>
        <div class="row">

            <?php 
                $Offers=$Serv->S_ALL();
                foreach($Offers as $Offer){
            ?>

            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <h3><?php echo $Offer->Name;?></h3>
                    <a class="btn" href="<?php echo $Offer->Path?>">Learn More</a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>