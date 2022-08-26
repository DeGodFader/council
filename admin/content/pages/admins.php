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
                        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">diversity_3</i>
                            </div>
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="padding-left:60px;">
                        <h6 class="text-white text-capitalize ps-3">Council Administrators table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center " >
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Records</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $Admins=$Pers->S_All();
                                if($Admins){
                                foreach($Admins as $Admin){
                                    {
                            
                            ?>
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="../../../<?php echo $Admin->Img?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"><?php echo $Admin->Name?></h6>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0"><?php echo $Admin->Position?></p>
                                <!-- <p class="text-xs text-secondary mb-0">Organization</p> -->
                            </td>
                            <td class="" style="word-wrap:break-word; word-break:break-all;">
                                <?php echo substr($Admin->Description,0,25)?>...
                            </td>
                            <td class="align-middle text-center text-sm">
                                <?php echo substr($Admin->Record,0,25)?>...
                            </td>
                            <td class="align-middle text-center justify-content-center">
                                <a href="Admins.php?Ad=<?php echo $Admin->ID?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Admin">
                                    Full_Details
                                </a>                        
                            </td>
                            </tr>
                            <?php }}}?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
        <?php if(isset($_GET["Ad"])){?>        
            <div class="row">
                <?php $Admin=$Pers->S_Par($_GET["Ad"]);?>
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person_2</i>
                            </div>
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="padding-left:60px;">
                                <h6 class="text-white text-capitalize ps-3">Personality: <?php echo $Admin->Position?></h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="container">
                                <div class="row">
                                    <div class="justify-content-center"style="padding-left:40%;">
                                        <img src="../../../<?php echo $Admin->Img?>" alt="">
                                        <textarea ><?php echo $Admin->Name?></textarea>
                                    </div>
                                </div>
                                <hr class="horizontal mt-0 mb-2">
                                <div class="container">
                                    <div>
                                        <h4>Description:</h4>
                                    </div>
                                    <textarea class="col-md-6 col-sm-6" style="min-height: 200px;">
                                        <?php echo $Admin->Description?> 
                                    </textarea>
                                    
                                </div>
                                <hr class="horizontal mt-0 mb-2">
                                <div class="container">
                                    <div>
                                        <h4>Record:</h4>
                                    </div>
                                    <textarea class="col-md-6 col-sm-12" style="min-height: 200px;">
                                        <?php echo $Admin->Record?> 
                                    </textarea>
                                </div>
                                <div>
                                    <a href="" class="btn"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>


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

 
                            <a href="Admins.php?d_user=<?php echo $Admin->ID?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Admin">
                            Delete                        
                            </a>
                            <?php if(isset($_GET["d_user"])){if($Admin->ID==$_GET["d_user"]){?><i class="material-icons opacity-10">arrow_drop_down</i><?php } }?>
                            <?php if(isset($_GET["d_user"])){if($Admin->ID==$_GET["d_user"]){?>
                            <div class="justify-content-center text-center" style="width:60%; height:10%; padding-left:10px" >
                                <div class="row justify-content-center" style="padding-left:10px">
                                <a href="includes/functions.php?Del_user=Yes&&d_user=<?php echo $_GET["d_user"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                                <a href="includes/functions.php?Del_user=No&&d_user=<?php echo $_GET["d_user"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-success" style="color:#212529">No</a>
                            </div>
                            </div>
                            <?php }}?>