<?php include("includes/header2.php")?>

<!-- Search result include -->
<?php require_once("admin/includes/init.php");
    if(isset($_POST['search'])){
        $result=$Serv->Search($_POST['search'], "Name");
        if($result){$_GET["M"]=$result[0]->ID;}
        else{$_GET["M"]=22;}
    }

?>
<!-- Search result included -->

    <body>
        <div class="container-fluid">
            <!-- Header Start -->
            <div class="header">
                <div class="container-fluid">
                    <?php include("includes/navbar.php")?>
                </div>
            </div>
            <br>
            <!-- Header End -->
            
            
            <div class="row">
                <!-- Page Header Start -->
                    <div class="container col-md-9 ">
                            <div class="row justify-content-center">
                                <?php $Service=$Serv->S_Par($_GET["M"]);?>
                                <h4 style="font-weight:bold">Service>> <i style="text-decoration:underline ;"><?php echo $Service->Name?></i></h4>
                            </div>
                    </div>
                <!-- Page Header End -->

                <!-- Search -->
                <?php include("includes/search.php")?>
                <!-- Search end -->

            <div class="container-fluid row" style="max-width:auto">

                <!-- Services List -->
                <div class="col-md-3">
                    <div class="row">
                        <?php 
                            $Offers=$Serv->S_ALL();
                            if(!isset($result)){
                                $i=1;
                                foreach($Offers as $Offer){
                                    if($Offer->Worked==1 && $Offer->ID!=22){
                        ?>
                        <a  href="<?php echo $Offer->Path?>" class="btn-block btn" style="border-radius:0.3em; color:white; background-color:<?php if($i%2==0){?>royalblue<?php }else{?>#FFD662<?php }?>;">
                            <div class="service-item">
                                <h4><?php echo $Offer->Name;?></h4>
                                
                            </div>
                        </a>
                        <?php $i++;}}}else{
                            
                             $i=1;
                             foreach($result as $Offer){
                         ?>
                         <a  href="<?php echo $Offer->Path?>" class="btn-block btn" style="border-radius:0.3em; color:white; background-color:<?php if($i%2==0){?>royalblue<?php }else{?>#FFD662<?php }?>;">
                             <div class="service-item">
                                 <h4><?php echo $Offer->Name;?></h4>
                                
                             </div>
                         </a>
                         <?php $i++;}}?> 
                    </div>  
                </div>
                <!-- Services List end -->

                <div class="col-md-9 row">
                    <!-- Services Details -->
                    <div class="col-md-9">
                        <div>
                            <div class="row container">
                                <?php echo "<h4 style='font-weight:bold;'>" . $Service->Name . " Content</h4>"?>
                                <br>
                                <?php echo $Service->Content?>                                
                            </div>
                        </div>
                        <br>
                        <!-- Contents drop -->
                        <?php if($_GET["M"]!=22)include($Service->Path2)?>
                        <!-- contents drop end -->
                    </div>
                    <!-- Services Details end -->


                    <!-- Quick Links -->
                    <div class="col-md-3" style="text-decoration:underline">
                        <div class="row"><img src="img/faqs.jpg" alt="" width="300"></div>
                        <br>
                        <div class="row">
                            <div class="col-12"><h4 style="font-weight:bold; text-align:Center" class="container-fluid">Quick Links</h4></div>
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <ul class="list container-fluid justify-content-center">
                                    <li><a href="services.php?M=5" style="text-decoration:underline; font-weight:bold;">Pay Tax</a></li>
                                    <li><a href="services.php?M=10" style="text-decoration:underline; font-weight:bold;">Find a Job</a></li>
                                    <li><a href="" style="text-decoration:underline; font-weight:bold;">Link3</a></li>
                                    <li><a href="" style="text-decoration:underline; font-weight:bold;">Link4</a></li>
                                    <li><a href="" style="text-decoration:underline; font-weight:bold;">Link5</a></li>
                                    <li><a href="" style="text-decoration:underline; font-weight:bold;">Link6</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <?php echo $Service->Path1?>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- Quick Link end -->
                </div>
                
            </div>
            

         <!-- Footer Start -->
         <?php include("includes/footer.php")?>