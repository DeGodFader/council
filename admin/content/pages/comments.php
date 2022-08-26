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
                <h6 class="text-white text-capitalize ps-3">Comments table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Comment</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">File</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $Comments=$Comm->S_All();
                        if($Comments){
                            foreach($Comments as $Comment){
                    ?>
                    <tr>
                      <td class="align-middle">
                        <div class="d-flex px-2 flex-column">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm"><?php echo $Comment->Writer?></h6>
                            <p class="text-xs text-secondary mb-0">   <?php echo "  " . $Comment->Tell?></p>
                          </div>
                        </div>
                        <!-- <div class="d-flex flex-column justify-content-center">
                            
                          </div> -->
                      </td>
                      <td class="align-middle">
                        <p class="text-sm font-weight-bold mb-0"><?php echo $Comment->Content?></p>
                      </td>
                      <td class="align-middle">
                        <img src="../../img/testimonies/<?php echo $Comment->File?>">
                      </td>
                      <td class="align-middle">
                        <?php if($Comment->Status==0){?>
                            <a href="includes/functions.php?Com_Stat=<?php echo $Comment->ID;?>&&Val=1">
                            <div class="text-danger mb-0 text-center">
                                Pending
                            </div>
                            </a>
                        <?php } else{?>
                            <a href="includes/functions.php?Com_Stat=<?php echo $Comment->ID;?>&&Val=0">
                            <div class="text-success mb-0 text-center">
                                Approved
                            </div>
                            </a>
                        <?php }?>
                      </td>
                      <td class="align-middle">
                      <a href="comments.php?d_com=<?php echo $Comment->ID?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Comment">
                          Delete                        
                        </a>
                        <?php if(isset($_GET["d_com"])){if($Comment->ID==$_GET["d_com"]){?><i class="material-icons opacity-10">arrow_drop_down</i><?php } }?>
                        <?php if(isset($_GET["d_com"])){if($Comment->ID==$_GET["d_com"]){?>
                          <div class="justify-content-center text-center" style="width:60%; height:10%; padding-left:10px" >
                            <div class="row justify-content-center" style="padding-left:10px">
                            <a href="includes/functions.php?Del_com=Yes&&d_com=<?php echo $_GET["d_com"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                            <a href="includes/functions.php?Del_com=No&&d_com=<?php echo $_GET["d_com"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-success" style="color:#212529">No</a>
                          </div>
                          </div>
                        <?php }}?>
                      </td>
                    </tr>
                    <?php }}?>
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
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