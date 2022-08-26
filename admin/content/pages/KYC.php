<?php include("includes/header.php");include("includes/sidebar.php")?>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include("includes/navbar.php")?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">KYC table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User Details</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Identification Info</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image 1</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Image 2</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Image 3</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">...</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $Veryfies=$kyc->S_All();
                        if($Veryfies){
                            foreach($Veryfies as $KYC){
                    ?>
                    <tr>
                      <td class="align-middle">
                        <div class="d-flex px-2 flex-column">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm"><?php echo $KYC->P_Name?></h6>
                            <p class="text-xs text-secondary mb-0">   <?php echo "  " . $KYC->Tell?></p>
                            <p class="text-xs text-secondary mb-0">   <?php echo "  " . $KYC->Email?></p>
                          </div>
                        </div>
                        <!-- <div class="d-flex flex-column justify-content-center">
                            
                          </div> -->
                      </td>
                      <td class="align-middle">
                        <p class="text-sm font-weight-bold mb-0"><?php echo $KYC->Name?></p>
                        <p class="text-sm font-weight-bold mb-0"><?php echo $KYC->Number?></p>
                      </td>
                      <td class="align-middle">
                        <img src="../../img/KYC/<?php echo $KYC->File?>" width="70%" height="50%">
                      </td>
                      <td class="align-middle">
                        <img src="../../img/KYC/<?php echo $KYC->File2?>" width="70%" height="50%">
                      </td>
                      <td class="align-middle">
                        <img src="../../img/KYC/<?php echo $KYC->File3?>" width="70%" height="50%">
                      </td>
                      <td class="align-middle text-center justify-content-center">
                        <a href="KYC.php?Ad=<?php echo $KYC->ID?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Admin">
                            Full_Details
                        </a>                        
                      </td>
                    </tr>
                    <?php }}?>
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>

        <?php if(isset($_GET["Ad"])){?>        
            <div class="row">
                <?php $KYC=$kyc->S_Par($_GET["Ad"]);?>
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">                            
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="padding-left:60px;">
                                <h6 class="text-white text-capitalize ps-3"><span style="margin-right:80%">Full Details: <?php echo $KYC->P_Name?></span> <a href="KYC.php"><i class="material-icons opacity-10">cancel</i></a></h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="container">
                            <div>
                                <h4>Personal Info:</h4>
                            </div>
                            <hr class="horizontal mt-0 mb-2">
                                <div class="row">
                                    <div class="justify-content-center"style="padding-left:40%;">
                                        <div>
                                            Name on Identification Document: &ensp;<?php echo $KYC->Name?><br>
                                            Name on Profile: &ensp;<?php echo $KYC->P_Name?><br>
                                            Identification Document Number: &ensp;<?php echo $KYC->Number?>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                        <h4>Pictures:</h4>
                                </div>
                                <hr class="horizontal mt-0 mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div style="padding:2%;">
                                            <img src="../../img/KYC/<?php echo $KYC->File?>" width="100%" height="100%">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div style="padding:2%;">
                                            <img src="../../img/KYC/<?php echo $KYC->File2?>" width="100%" height="100%">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div style="padding:2%;">
                                            <img src="../../img/KYC/<?php echo $KYC->File3?>" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr class="horizontal mt-0 mb-2">
                                <div style="padding-left:40%;">
                                  <?php if(($Us->S_Par($KYC->P_ID))->KYC==1){?> <h4 class="text-success">Approved</h4><?php }else{?>
                                    <a href="includes/functions.php?KYC=Acc&ID=<?php echo $KYC->P_ID?>" class="btn btn-success" style="margin-right:10px;">Approve</a>
                                    <a href="includes/functions.php?KYC=Den&ID=<?php echo $KYC->P_ID?>" class="btn btn-danger">Decline</a><?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>

    </div>
    
      <!-- Footer -->
      <?php include("includes/footer.php")?>
    </div>
    <!-- Setting -->
    <?php include("includes/setting.php")?>
    <!-- End Setting -->
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    $('#myModal').modal(options);
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>