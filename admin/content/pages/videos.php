<?php include("includes/header.php");include("includes/sidebar.php")?>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include("includes/navbar.php")?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">video_library</i>
                    </div>

                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="padding-left:60px;">
                        <h6 class="text-white text-capitalize ps-3">Video Catergories</h6>
                    </div>
                    </div>
            
                    <div class="card-body bg-gray-200">
                        <div class="row">
                            <?php $Categories=$VC->S_All();
                                foreach($Categories as $Category){
                                    $size=sizeof($LV->Search($Category->Secondary_C, "Topic"));
                            ?>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" >
                            <a href="videos.php?M=<?php echo str_replace("++", "", $Category->Secondary_C)?>" style="margin:1px">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="text-center pt-1">
                                        <h4 class="mb-0 text-capitalize"><?php echo $Category->Secondary_C?></h4>
                                        <p class="text-md mb-0 text-capitalize"><?php echo $Category->Primary_C?></p>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer p-1 text-center">
                                        <p class="text-md mb-0 text-capitalize">Videos: <?php echo $size?></p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <?php }
                                $size=sizeof($LV->S_All())
                            ?>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" style="margin-top:21px;">
                            <a href="videos.php?M=all">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="text-center pt-1">
                                        <h4 class="mb-0 text-capitalize">All</h4>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer p-1 text-center">
                                        <p class="text-md mb-0 text-capitalize">Videos: <?php echo $size?></p>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                    
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">movie</i>
                    </div>

                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="padding-left:60px;">
                        <h6 class="text-white text-capitalize ps-3">Videos</h6>
                    </div>
                    </div>
            
                    <div class="card-body bg-gray-200">
                        <div class="col-12">
                            <div class="row">
                                <?php 
                                    if(isset($_GET["M"])){
                                        if($_GET["M"]=="all"){$Vids=$LV->resizer();}
                                        else{$Vids=$LV->selected($_GET["M"]);}
                                        foreach($Vids as $Vid){
                                    ?>
                                    <div class="col-md-6 col-sm-12 justify-content-center">
                                        <?php echo $Vid->Link?>
                                        <div style="align-content:center"><h4 style="font-weight:bold"><?php echo $Vid->Title?></h4><h4 style="font-weight:bold"><?php echo $Vid->Source?></h4></div>
                                        <div>
                                            <span class="badge badge-primary" style="width:50px; height: 23px; border-radius:20px; padding-top:5px; margin:5px;"> <i class="far fa-thumbs-up"></i></span>
                                            <span class="badge badge-primary" style="width:50px; height: 23px; border-radius:20px; padding-top:5px; margin:5px;"> <i class="far fa-thumbs-down"></i></span>
                                        </div>
                                    </div>
                                    <?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include("includes/videos_edit.php")?>

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