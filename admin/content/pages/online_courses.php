<?php include("includes/header.php");include("includes/sidebar.php")?>
  
    <?php 
        if(isset($_POST["A_Ws"])){
            $ONC->New($_POST["Name"], $_POST["Link"]);
            $sess->redir("../online_courses.php");
        }
    
        if(isset($_POST["E_Ws"])){
            $ONC->Update($_POST["Name"], $_POST["Link"]);
            $sess->redir("../online_courses.php");
        }
    ?>



  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include("includes/navbar.php")?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="<?php if(isset($_GET["Edit"])){ echo "col-md-9";}else{ echo "col-md-12"; }?> col-sm-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">library_books</i>
                    </div>

                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="padding-left:60px;">
                        <h6 class="text-white text-capitalize ps-3">Online Sites</h6>
                    </div>
                    </div>
            
                    <div class="card-body bg-gray-200">
                        <div class="row">
                            <?php $Categories=$ONC->S_All();
                                foreach($Categories as $Category){
                            ?>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" >
                                    <div class="card"  style="margin:1px">                                        
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="card-header p-3 pt-2">
                                                    <div class="text-center pt-1">
                                                        <h4 class="mb-0 text-capitalize"><?php echo $Category->Name?></h4>
                                                    </div>
                                                </div>
                                                <hr class="dark horizontal my-0">
                                                <div class="card-footer p-1 text-center">
                                                    <p class="text-md mb-0 text-capitalize">Link: <?php echo $Category->Link ?></p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-3">
                                                <a href="?Edit=change&&M=<?php echo $Category->ID?>">
                                                    <div class="card-header p-3 pt-2 bg-secondary">
                                                        <i class="material-icons opacity-10">edit</i> 
                                                    </div>
                                                </a>
                                                <hr class="dark horizontal my-0">
                                                <a href="?Edit=delete&&M=<?php echo $Category->ID?>">
                                                    <div class="card-footer p-1 text-center bg-danger">
                                                    <i class="material-icons opacity-10">delete</i> 
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <?php }?>
                            <?php if(!isset($_GET["Edit"])){?>
                            <div class=" d-flex justify-content-center">
                               <a href="?Edit=Add">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl ">
                                        <i class="material-icons opacity-10">add</i>
                                    </div>
                               </a>
                            </div>
                            <?php }?>  
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($_GET["Edit"])){?>
            <div class="col-md-3 col-sm-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">app_registration</i>
                    </div>

                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="padding-left:60px;">
                        <h6 class="text-white text-capitalize ps-3"><span style="margin-right:70%">Editor</span> <a href="online_courses.php"><i class="material-icons opacity-10">cancel</i></a></h6>
                    </div>
                    </div>
            
                    <div class="card-body bg-gray-200">
                        <div class="col-12">
                            <div class="row">
                            <div class="col-12">
                                <?php if($_GET["Edit"]=="Add"){?>
                                    <h4>Add New Wedsite<i class="material-icons opacity-10">add</i></h4>
                                    <form role="form"  method="post">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="Name" required>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Web Link</label>
                                            <input type="text" class="form-control" name="Link" required>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="ADD" name="A_Ws">
                                        </div>
                                    </form>
                                <?php }elseif($_GET["Edit"]=="change" && isset($_GET["M"])){ $Web=$ONC->S_Par($_GET["M"])?>
                                    <h4>Edit Wedsite<i class="material-icons opacity-10">edit</i></h4>
                                    <form role="form"  method="post">
                                        <?php if(isset($_GET["error_C"])){?>
                                        <div class="g-danger">Category Already Exists</div>
                                        <?php }?>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="Name" required>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Web Link</label>
                                            <input type="text" class="form-control" name="Link" required>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" value="ADD" name="E_Ws">
                                        </div>
                                    </form>
                                <?php }elseif($_GET["Edit"]=="delete" && isset($_GET["M"])){$Web=$ONC->S_Par($_GET["M"])?>
                                    <h4>Delet Wedsite &VeryThinSpace;<i class="material-icons opacity-10 bg-danger">warning</i></h4>
                                    <h5>Delete <?php echo $Web->Name?></h5>
                                    <div class="row">
                                        <a href="includes/functions.php?Del_W=Yes&&ID=<?php echo $Web->ID?>" class="btn col-md-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                                        <a href="includes/functions.php?Del_W=No&&ID=<?php echo $Web->ID?>" class="btn col-md-6 col-xs-12 bg-success" style="color:#212529">No</a>
                                    </div>
                                <?php }?>
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