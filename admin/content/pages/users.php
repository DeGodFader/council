<?php include("includes/header.php");include("includes/sidebar.php")?>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include("includes/navbar.php")?>
    <!-- End Navbar -->

    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Users table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Level</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $Users=$Us->S_All();
                        foreach($Users as $User){
                            if($User->Level<3){
                    
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $User->Name?></h6>
                            <p class="text-xs text-secondary mb-0"><a href="mailto:<?php echo $User->Email?>"><?php echo $User->Email?></a></p>
                            <p class="text-xs text-secondary mb-0"><a href="tel:+237<?php echo $User->Tell?>"><?php echo $User->Tell?></a></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">User</p>
                        <!-- <p class="text-xs text-secondary mb-0">Organization</p> -->
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center justify-content-center">
                        <a href="users.php<?php if(!isset($_GET["d_user"])){?>?d_user=<?php echo $User->ID;}?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete                        
                        </a>
                        <?php if(isset($_GET["d_user"])){if($User->ID==$_GET["d_user"]){?><i class="material-icons opacity-10">arrow_drop_down</i><?php } }?>
                        <?php if(isset($_GET["d_user"])){if($User->ID==$_GET["d_user"]){?>
                          <div class="justify-content-center text-center" style="width:60%; height:10%; padding-left:10px" >
                            <div class="row justify-content-center" style="padding-left:10px">
                            <a href="includes/functions.php?Del_user=Yes&&d_user=<?php echo $_GET["d_user"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                            <a href="includes/functions.php?Del_user=No&&d_user=<?php echo $_GET["d_user"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-success" style="color:#212529">No</a>
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
  
  <!--   Scripts  -->
  <?php include("includes/scripts.php")?>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>