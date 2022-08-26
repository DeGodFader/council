<?php include("../includes/navbar.php")?>
<?php if(isset($_GET['M'])){?>
    <?php if($_GET['M']==1){?>
        <!-- Search bar -->
        <div class="row">
            <div class="col-md-9"></div>
        <?php include("../../includes/search.php")?>
        </div>
        <!-- Search bar ends -->

        <?php if(isset($_POST['search'])){?>
            <div style="text-decoration:underline"><a href="?M=1&&Service=Training and Work Force Development&&Page=Videos">all</a>&ensp;/&ensp;Searched</div>
            <?php $Genres=$LV->Search($_POST['search'], "Tags");
            if($Genres){?>
                    <div class="contain-fluid">
                        <h3>Results for: &ensp; <small><strong><?php echo $_POST["search"]?></strong></small></h3>
                        <br>
                        <div class="row">
                            <?php foreach($Genres as $Vid){ $Vid->Link=str_replace('width="560"',"",$Vid->Link);$Vid->Link=str_replace('height="315"',"",$Vid->Link);?>
                                <div class="col-md-3">
                                    <?php echo $Vid->Link?>
                                    <div style="align-content:center">
                                        <h4 style="font-weight:bold"><?php echo $Vid->Title?></h4>
                                        <h4 style="font-weight:bold"><?php echo $Vid->Source?></h4>
                                    </div>
                                </div>    
                            <?php }?>
                        </div>
                    </div>           
            <?php }}else{?>

        <?php 
            if($_GET["M"]==1){
            $Genres=$LV->All_Head()[0];
            foreach($Genres as $Genre){
        ?>
        <h2 style="font-weight:bold; color:#FFD662"><?php echo $Genre?></h2><hr class="my-4">
        <div class="container-fluid">
            <?php 
                $Topics=$LV->All_Head()[1];
                foreach($Topics as $Topic){
            ?>
            <h3 style="font-weight:bold; color:royalblue"><?php if($Topic[1]==$Genre)echo $Topic[0];?></h3>
            <div class="row">
                <?php 
                    $Vids=$LV->All_Head()[2];
                    foreach($Vids as $Vid){
                        if($Genre==$Vid->Genre && $Topic==[$Vid->Topic,$Vid->G_T]){
                ?>
                <div class="col-md-3 justify-content-center">
                    <?php echo $Vid->Link?>
                    <div style="align-content:center">
                        <h4 style="font-weight:bold"><?php echo $Vid->Title?></h4>
                        <h4 style="font-weight:bold"><?php echo $Vid->Source?></h4>
                    </div>                        
                </div>
                <?php }}?>
            </div>
            <?php }?><br><br>
        </div>
        <?php }}}?>
    <?php }?>

    <?php if($_GET['M']==2){?>
        <div class="contain-fluid">
            <h3>Websites We Recomend</h3>
            <br>
            <?php $Genres=$ONC->S_All()?>
            <div class="row">
                <?php foreach($Genres as $Vid){?>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" >
                        <a href="https://<?php echo $Vid->Link?>" target="blank">
                            <div class="card" >   
                                <div class="card-header p-3 pt-2">
                                    <div class="text-center pt-1">
                                        <h4 class="mb-0 text-capitalize"><?php echo $Vid->Name?></h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>
        </div>  
    <?php }?>

<?php }?>


<!-- Footer Start -->
<?php include("../includes/footer.php")?>
