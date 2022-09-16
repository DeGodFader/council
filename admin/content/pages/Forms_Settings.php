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
                <h6 class="text-white text-capitalize ps-3">Pricings</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="card col-md-12">
                            <div class="card-header p-3 pt-2">
                                <a href="<?php if(isset($_GET["M"])){?>Forms_Settings.php<?php }else{?>?M=forms<?php }?>">
                                    <div class="text-center pt-1">
                                    <h4 class="mb-0 text-capitalize">Forms Pricing</h4>
                                    </div>
                                </a>
                            </div>
                            <?php if(isset($_GET["M"]) && $_GET["M"]=="forms"){?>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-1 text-center">
                                <form action="includes/functions.php" method="post">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Forms</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pricing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Birth</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $B=$Pr->S_Par(1);?>
                                            <input type="text" name="Birth" class="form-control bg-gradient-light" value="<?php echo $B->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Weddings</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $W=$Pr->S_Par(3);?>
                                            <input type="text" name="Wed" class="form-control bg-gradient-light" value="<?php echo $W->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Death</h6>
                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $D=$Pr->S_Par(2);?>
                                            <input type="text" name="Death" class="form-control bg-gradient-light" value="<?php echo $D->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <input type="submit" value="Cancel" class="bg-gradient-light form-control col-md-6" name="Cancel">
                                            </td>
                                            <td>
                                                <input type="submit" value="Go" class="bg-gradient-success form-control col-md-6" name="Go">
                                            </td>
                                        </tr>      
                                    </tbody>
                                    </table>
                                    </form>
                                </div>
                            <?php }?>
                        </div>
                        <br>
                        <div class="card col-md-12">
                            <div class="card-header p-3 pt-2">
                                <a href="<?php if(isset($_GET["M"])){?>Forms_Settings.php<?php }else{?>?M=Level<?php }?>">
                                    <div class="text-center pt-1">
                                    <h4 class="mb-0 text-capitalize">Delivery Package Level</h4>
                                    </div>
                                </a>
                            </div>
                            <?php if(isset($_GET["M"]) && $_GET["M"]=="Level"){?>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-1 text-center">
                                <form action="includes/functions.php" method="post">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Level</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pricing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Top Level</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $B=$Pr->S_Par(7);?>
                                            <input type="text" name="TL" class="form-control bg-gradient-light" value="<?php echo $B->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Medium Leve</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $W=$Pr->S_Par(8);?>
                                            <input type="text" name="ML" class="form-control bg-gradient-light" value="<?php echo $W->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Low Level</h6>
                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $D=$Pr->S_Par(9);?>
                                            <input type="text" name="LL" class="form-control bg-gradient-light" value="<?php echo $D->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <input type="submit" value="Cancel" class="bg-gradient-light form-control col-md-6" name="Cancel">
                                            </td>
                                            <td>
                                                <input type="submit" value="Go" class="bg-gradient-success form-control col-md-6" name="GoL">
                                            </td>
                                        </tr>      
                                    </tbody>
                                    </table>
                                    </form>
                                </div>
                            <?php }?>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="card col-md-12">
                            <div class="card-header p-3 pt-2">
                                <a href="<?php if(isset($_GET["M"])){?>Forms_Settings.php<?php }else{?>?M=trans<?php }?>">
                                    <div class="text-center pt-1">
                                    <h4 class="mb-0 text-capitalize">Transportation</h4>
                                    </div>
                                </a>
                            </div>
                            <?php if(isset($_GET["M"]) && $_GET["M"]=="trans"){?>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-1 text-center">
                                <form action="includes/functions.php" method="post">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Distance</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pricing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">National</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $B=$Pr->S_Par(4);?>
                                            <input type="text" name="N" class="form-control bg-gradient-light" value="<?php echo $B->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Continental</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $W=$Pr->S_Par(5);?>
                                            <input type="text" name="C" class="form-control bg-gradient-light" value="<?php echo $W->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Intercontinental</h6>
                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php $D=$Pr->S_Par(6);?>
                                            <input type="text" name="IC" class="form-control bg-gradient-light" value="<?php echo $D->Amount?>">
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <input type="submit" value="Cancel" class="bg-gradient-light form-control col-md-6" name="Cancel">
                                            </td>
                                            <td>
                                                <input type="submit" value="Go" class="bg-gradient-success form-control col-md-6" name="GoT">
                                            </td>
                                        </tr>      
                                    </tbody>
                                    </table>
                                    </form>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <br>
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