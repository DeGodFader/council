<?php include("header.php");?>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $_SESSION["Name"]?>
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="../" role="tab" aria-selected="true">
                    <i class="material-icons text-lg position-relative">home</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Platform Settings</h6>
                </div>
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                      </div>
                    </li>
                  </ul>
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0 pb-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Profile Information</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <!-- <a href=""> -->
                        <!-- <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile">.</i> -->
                      <!-- </a> -->
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; <?php echo $_SESSION["Name"]?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; <?php echo $_SESSION["Tell"]?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <?php echo $_SESSION["Email"]?></li>
                    <li class="list-group-item border-0 ps-0 pb-0">
                      <strong class="text-dark text-sm">Social:</strong> &nbsp;
                      <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                        <i class="fab fa-facebook fa-lg"></i>
                      </a>
                      <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                        <i class="fab fa-twitter fa-lg"></i>
                      </a>
                      <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                        <i class="fab fa-instagram fa-lg"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">KYC & Required Validations</h6>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                      <div class="d-flex align-items-start flex-column justify-content-center border-radius-lg shadow col-md-12">
                      <?php if($_SESSION["KYC"]==1){?><h6 class="mb-0 col-md-12" style="text-align:center; color:green">KYC VERIFICATION is Complete&ensp; <i class=" opacity-10 fa fa-check-circle" style="color:green"></i></h6> <?php }?>
                      <?php if($_SESSION["KYC"]==2){?><h6 class="mb-0 col-md-12" style="text-align:center; color:ash">KYC VERIFICATION is Pending Awaiting Approval&ensp; ...</h6>  <?php }?>
                      <?php if($_SESSION["KYC"]==0){?><h6 class="mb-0 col-md-12" style="text-align:center; color:red">KYC VERIFICATION Form <strong>NOT</strong> Filled. PLEASE FILL BELOW&ensp; <i class=" opacity-10 fa fa-exclamation-circle" style="color:red"></i></h6><?php }?> 
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                    <div class="d-flex align-items-start flex-column justify-content-center border-radius-lg shadow col-md-12">
                      <h6 class="mb-0 text-sm">Other Verifications</h6>
                      </div>
                    </li>
                  </ul>
                  <hr class="horizontal gray-light my-4">
                  <?php if($_SESSION["KYC"]!=1){?>
                  <div class="shadow border" style="padding-top:15px; padding-left:10px;">
                    <h6 class="mb-0">KYC VERIFICATION</h6>
                    <?php if($_SESSION["KYC"]==0){?>
                      <form action="functions.php" method="post" class="form" enctype="multipart/form-data">
                        <div class="col-md-12" style="margin-bottom:5px;"> 
                          <input type="text" name="Name"  placeholder="Full Name as on Identification Document" class=" col-md-12" required>
                        </div>
                        <div class="col-md-12" style="margin-bottom:5px;">
                          <input type="text" name="ID_Num"  placeholder="Registration Number of your Document" class=" col-md-12" required>
                        </div>
                        <div class="col-md-12" style="margin-bottom:5px;">
                          <label for="front">Picture of the Front of your Identification Document</label>
                          <input type="file" name="front"  class=" col-md-12" required>
                        </div>
                        <div class="col-md-12" style="margin-bottom:5px;">
                          <label for="front">Picture of the Back of your Identification Document</label>
                          <input type="file" name="back"  class=" col-md-12" required>
                        </div>
                        <div class="col-md-12" style="margin-bottom:5px;">
                          <label for="front">Picture of you holding your Identification Document</label>
                          <input type="file" name="half_card"  class=" col-md-12" required>
                        </div>
                        <div class="col-md-12 align-content-center" style="padding-left:50% ;">
                            <input type="submit" value="Done" class="btn bg-secondary" style="color:aliceblue" name="KYC_V">
                        </div>
                      </form>
                    <?php }?>
                    <?php if($_SESSION["KYC"]==2){?>
                      <div style="padding-top:10%; padding-left:40%;">
                            <h3 style="color:ash;">Pending..</h3>
                      </div>
                    <?php }?>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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