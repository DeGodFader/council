<?php include("../includes/header2.php")?>


                    <?php include("../includes/navbar.php")?>
                </div>
            </div>
            <!-- Header End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Certificate</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
            <div class="col-md-9">
                <div class="service" style="background-color:#00539C;">
                    <div class="service-item ">
                        <div class="container" style="background-color:#ced4da;">
                            <h3 class="row">
                                <div style="background-color: #FFD662; width:30px; border-radius:5px;"><i class="fa fa-plus"></i> </div>
                                <div>&ensp; Review Form</div>
                            </h3>
                            <div class="container justify-content-left">
                                <div class="justify-content-left" style="text-align:left">
                                    <div>
                                        <div class="row" style="padding-left:20px;">
                                            <?php 
                                                
                                                $_SESSION["values"]=array();
                                                foreach($_POST as $K=>$V){
                                                    $_SESSION["values"][]=$V;
                                            ?>
                                              <div class="col-md-3"><?php echo $K . ": &ensp;"?></div>
                                              <div class="col-md-3"><?php echo $V?></div>
                                              <div class="col-md-6">.</div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="service">
                            <a href="Forms.php" class="btn" value="Cancel Request" style="background-color:royalblue;">Back</a>
                            <a href="functions.php" class="btn" style="background-color:royalblue;">Place Request</a>
                    </div>
                                  
            </div>

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>



           <!-- Footer Start -->
           <?php include("../../includes/footer.php")?>