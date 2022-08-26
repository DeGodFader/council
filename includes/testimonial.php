

<div class="testimonial">
    <div class="container-xl" style="max-width:1500px">
        <div class="section-header">
            <p>Testimonies</p>
            <h2>Client Says About Service</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
         <?php 
                $Comments=$Comm->S_ALL();
                foreach($Comments as $Comment){ 
                    if($Comment->Status==1){      
            ?>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="admin/img/testimonies/<?php echo $Comment->File?>" alt="">
                </div>
                <div class="testimonial-content">
                    <p>
                    <?php echo $Comment->Content?>
                    </p>
                    <h3><?php echo $Comment->Writer?></h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <?php }}?>
        </div>
    </div>
</div>

