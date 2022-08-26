<?php include("includes/header2.php")?>

<!-- Search result include -->
<?php require_once("admin/includes/init.php");
    if(isset($_POST['search'])){
        $result=$Pers->Search($_POST['search']);
        if($result){$_GET["M"]=$result[0]->ID;}
        else{$_GET["M"]="";}
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
                                <?php if($_GET["M"]){$Person=$Pers->S_Par($_GET["M"]);?>
                                <h4 style="font-weight:bold">Person>> <i style="text-decoration:underline ;"><?php echo $Person->Name;?></i></h4>
                                <?php }else{?>
                                <h4 style="font-weight:bold">Person>> <i style="text-decoration:underline ;">No Result</i></h4>
                                <?php }?>
                            </div>
                    </div>
                <!-- Page Header End -->

                <!-- Search -->
                <div class="col-md-3">
                <div class="input-group container-fluid justify-content-end ">
                    <div class="">
                        <form action="" method="post">
                            <input class="form-control" type="text" name="search" id="form1" placeholder="Search" required>
                        </form>
                    </div>
                    <div class="input-group-append">
                        <!-- <a href="includes/search.php"> -->
                        <button type="submit" class="btn btn-primary" id="search-button" name="searcher">
                        <a href=""><i class="fa fa-search"></i></a>
                        </button>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
            </div>  
            <br>
            <!-- Search end -->

            <div class="row">

                <!-- Persons List -->
                <div class="col-md-3">
                    <div class="row container-xl">
                        <?php 
                            $Administrators=$Pers->S_ALL();
                            if(!isset($result)){
                            $i=1;
                            foreach($Administrators as $Administrator){
                        ?>
                        <a  href="<?php echo $Administrator->Path?>" class="btn-block btn" style="border-radius:0.3em; color:white; background-color:<?php if($i%2==0){?>royalblue<?php }else{?>#FFD662<?php }?>;">
                            <div class="Person-item">
                                <h4><?php  echo $Administrator->Position . ": " . $Administrator->Name;?></h4>
                                <!-- <a class="btn" href="<?php //echo $Administrator->Path?>">Learn More</a> -->
                            </div>
                        </a>
                        <?php $i++;}}else{
                            
                             $i=1;
                             
                             foreach($result as $Administrator){
                         ?>
                         <a  href="<?php echo $Administrator->Path?>" class="btn-block btn" style="border-radius:0.3em; color:white; background-color:<?php if($i%2==0){?>royalblue<?php }else{?>#FFD662<?php }?>;">
                             <div class="Person-item">
                                 <h4><?php echo $Administrator->Position . ": " . $Administrator->Name;?></h4>
                                 <!-- <a class="btn" href="<?php //echo $Administrator->Path?>">Learn More</a> -->
                             </div>
                         </a>
                         <?php $i++;}}?> 
                    </div>  
                </div>
                <!-- Persons List end -->

                <!-- Persons Details -->
                
                <div class="col-md-9 row">
                    <div class="container col-md-9">
                        <div class="row container">
                        <?php if(isset($result) || $Person){ ?>
                            <?php echo "<h4 style='font-weight:bold;'>" . $Person->Name . " Details</h4>"?>
                        <?php }else{?>
                            <?php echo "<h4 style='font-weight:bold;'>" . "Name not Present" . "</h4>"?>
                        <?php }?>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row"><img src="img/faqs.jpg" alt="" width="300"></div>
                        <br>
                        <div class="row">
                            <h4 style="font-weight:bold">Quick Links</h4>
                            <ul>
                                <li><a href="Persons.php?M=5" style="text-decoration:underline; font-weight:bold;">Pay Tax</a></li>
                                <li><a href="Persons.php?M=10" style="text-decoration:underline; font-weight:bold;">Find a Job</a></li>
                                <li><a href="" style="text-decoration:underline; font-weight:bold;">Link3</a></li>
                                <li><a href="" style="text-decoration:underline; font-weight:bold;">Link4</a></li>
                                <li><a href="" style="text-decoration:underline; font-weight:bold;">Link5</a></li>
                                <li><a href="" style="text-decoration:underline; font-weight:bold;">Link6</a></li>
                            </ul>
                            
                            
                        </div>
                    </div>

                </div>

                <!-- Persons Details end -->
            </div>

         <!-- Footer Start -->
         <?php include("includes/footer.php")?>