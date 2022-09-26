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
              <a href="<?php if(!isset($_GET["M"])){?>?M=U<?php }else{?>forms.php<?php }?>">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Unanswered Requests</h6>
                    </div>
              </a>
            </div>
            <?php if(isset($_GET["M"]) && $_GET["M"]=="U"){?>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Info of Requester</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Form Category</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reason</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Certificate Info</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Destination Info</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $FC=$Fr->Search("0","Status");
                          foreach($FC as $F){
                      
                      ?>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?php echo $F->User_Name?></h6>
                              <p class="text-xs text-secondary mb-0"><a href="mailto:<?php ?>"><?php echo $F->User_Mail?></a></p>
                              <p class="text-xs text-secondary mb-0"><a href="tel:+237<?php ?>"><?php echo $F->User_Tell?></a></p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?php echo $F->Form_Cat?></p>
                          <p class="text-xs text-secondary mb-0"><?php echo $F->Type?></p>
                          <span class="text-sm">Transaction ID</span> <h6 class="mb-0 text-xs"><?php echo $F->Transaction_ID?></h6>
                        </td>
                        <td class="align-middle text-left text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?php echo $F->Reason?></p>
                        
                        </td>
                        <td  class="align-middle text-center text-sm">
                        <?php if($F->Form_Cat=="Birth"){?>
                          <div class="d-flex flex-column justify-content-center">
                              Birth Date: <h6 class="mb-0 text-sm"><?php echo $F->Birth_Date?></h6>
                              Place of Birth:<h6 class="mb-0 text-sm"><?php echo $F->Place_of_B?></h6>
                              Mother Name: <h6 class="mb-0 text-sm"><?php echo $F->Mother_Name?></h6>
                              Father Name: <h6 class="mb-0 text-sm"><?php echo $F->Father_Name?></h6>
                              Date Issued: <h6 class="mb-0 text-sm"><?php echo $F->Date_Issued?></h6>
                          </div>
                        <?php }elseif($F->Form_Cat=="Death"){?>
                          <div class="d-flex flex-column justify-content-center">
                              Death Date: <h6 class="mb-0 text-sm"><?php echo $F->Death_Date?></h6>
                              Place: <h6 class="mb-0 text-sm"><?php echo $F->Place_o_Death?></h6>
                              Occupation: <h6 class="mb-0 text-sm"><?php echo $F->Occupation?></h6>
                              Spouse Name: <h6 class="mb-0 text-sm"><?php echo $F->Spouse_Name?></h6>
                              Birth Date: <h6 class="mb-0 text-sm"><?php echo $F->Birth_Date?></h6>
                              Date Issued: <h6 class="mb-0 text-sm"><?php echo $F->Date_Issued?></h6>
                          </div>
                        <?php }else{?>
                          <div class="d-flex flex-column justify-content-center">
                                Marriage Date: <h6 class="mb-0 text-sm"><?php echo $F->Date_of_Marriage?></h6>
                                Man's Name: <h6 class="mb-0 text-sm"><?php echo $F->Husband_Name?></h6>
                                Woman's Name: <h6 class="mb-0 text-sm"><?php echo $F->Wife_Name?></h6>
                                Date Issued: <h6 class="mb-0 text-sm"><?php echo $F->Date_Issued?></h6>
                          </div>
                        <?php }?>
                        </td>
                        <td  class="align-middle text-center text-sm">
                          <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?php echo $F->D_Street?></h6>
                              <p class="text-xs text-secondary mb-0"><?php echo $F->D_Address?></p>
                              <p class="text-xs text-secondary mb-0"><?php echo $F->D_Town?></p>
                              <p class="text-xs text-secondary mb-0"><?php echo $F->D_Country?></p>
                              <br>
                              <h6 class="mb-0 text-sm"><?php echo $F->Means?></h6>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <div class="text-xs font-weight-bold mb-0"><p style="color:red;">Unapproved</p></div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <div class="text-xs font-weight-bold mb-0">
                            <a href="includes/functions.php?Sanc=Acc&&id=<?php echo $F->ID?>" class="text-sm btn" style="color:green;">Accept</a>
                            <a href="includes/functions.php?Sanc=Den&&id=<?php echo $F->ID?>" class="text-sm btn" style="color:red;">Deny</a>
                          </div>
                        </td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <a href="<?php if(!isset($_GET["M"])){?>?M=A<?php }else{?>forms.php<?php }?>">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Answered Requests</h6>
                    </div>
              </a>
            </div>
            <?php if(isset($_GET["M"]) && $_GET["M"]=="A"){?>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                  <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Info of Requester</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Form Category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reason</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Certificate Info</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Destination Info</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       $FC=$Fr->Search("1","Status");
                        foreach($FC as $F){
                    
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $F->User_Name?></h6>
                            <p class="text-xs text-secondary mb-0"><a href="mailto:<?php ?>"><?php echo $F->User_Mail?></a></p>
                            <p class="text-xs text-secondary mb-0"><a href="tel:+237<?php ?>"><?php echo $F->User_Tell?></a></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $F->Form_Cat?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $F->Type?></p>
                        <span class="text-sm">Transaction ID</span> <h6 class="mb-0 text-xs"><?php echo $F->Transaction_ID?></h6>
                      </td>
                      <td class="align-middle text-left text-sm">
                      <p class="text-xs font-weight-bold mb-0"><?php echo $F->Reason?></p>

                    </td>
                      <td  class="align-middle text-center text-sm">
                      <?php if($F->Form_Cat=="Birth"){?>
                        <div class="d-flex flex-column justify-content-center">
                            Birth Date: <h6 class="mb-0 text-sm"><?php echo $F->Birth_Date?></h6>
                            Place of Birth:<h6 class="mb-0 text-sm"><?php echo $F->Place_of_B?></h6>
                            Mother Name: <h6 class="mb-0 text-sm"><?php echo $F->Mother_Name?></h6>
                            Father Name: <h6 class="mb-0 text-sm"><?php echo $F->Father_Name?></h6>
                            Date Issued: <h6 class="mb-0 text-sm"><?php echo $F->Date_Issued?></h6>
                        </div>
                      <?php }elseif($F->Form_Cat=="Death"){?>
                        <div class="d-flex flex-column justify-content-center">
                            Death Date: <h6 class="mb-0 text-sm"><?php echo $F->Death_Date?></h6>
                            Place: <h6 class="mb-0 text-sm"><?php echo $F->Place_o_Death?></h6>
                            Occupation: <h6 class="mb-0 text-sm"><?php echo $F->Occupation?></h6>
                            Spouse Name: <h6 class="mb-0 text-sm"><?php echo $F->Spouse_Name?></h6>
                            Birth Date: <h6 class="mb-0 text-sm"><?php echo $F->Birth_Date?></h6>
                            Date Issued: <h6 class="mb-0 text-sm"><?php echo $F->Date_Issued?></h6>
                        </div>
                      <?php }?>
                      </td>
                      <td  class="align-middle text-center text-sm">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $F->D_Street?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $F->D_Address?></p>
                            <p class="text-xs text-secondary mb-0"><?php echo $F->D_Town?></p>
                            <p class="text-xs text-secondary mb-0"><?php echo $F->D_Country?></p>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <div class="text-xs font-weight-bold mb-0"><p style="color:green">Approved</p></div>
                      </td>
                      <td class="align-middle text-center justify-content-center">
                        <a href="?M=A&d_form=<?php echo $F->ID?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit F">
                          Delete                        
                        </a>
                        <?php if(isset($_GET["d_form"])){if($F->ID==$_GET["d_form"]){?><i class="material-icons opacity-10">arrow_drop_down</i><?php } }?>
                        <?php if(isset($_GET["d_form"])){if($F->ID==$_GET["d_form"]){?>
                          <div class="justify-content-center text-center" style="width:60%; height:10%; padding-left:10px" >
                            <div class="row justify-content-center" style="padding-left:10px">
                            <a href="includes/functions.php?Del_form=Yes&&ID=<?php echo $_GET["d_form"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                            <a href="includes/functions.php?Del_form=No&&ID=<?php echo $_GET["d_form"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-success" style="color:#212529">No</a>
                          </div>
                          </div>
                        <?php }}?>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <a href="<?php if(!isset($_GET["M"])){?>?M=R<?php }else{?>forms.php<?php }?>">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Denied Requests</h6>
                    </div>
              </a>
            </div>
            <?php if(isset($_GET["M"]) && $_GET["M"]=="R"){?>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                  <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Info of Requester</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Form Category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reason</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Certificate Info</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Destination Info</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       $FC=$Fr->Search("2","Status");
                        foreach($FC as $F){
                    
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $F->User_Name?></h6>
                            <p class="text-xs text-secondary mb-0"><a href="mailto:<?php ?>"><?php echo $F->User_Mail?></a></p>
                            <p class="text-xs text-secondary mb-0"><a href="tel:+237<?php ?>"><?php echo $F->User_Tell?></a></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $F->Form_Cat?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $F->Type?></p>
                        <span class="text-sm">Transaction ID</span> <h6 class="mb-0 text-xs"><?php echo $F->Transaction_ID?></h6>
                      </td>
                      <td class="align-middle text-left text-sm">
                      <p class="text-xs font-weight-bold mb-0"><?php echo $F->Reason?></p>
                      
                      </td>
                      <td  class="align-middle text-center text-sm">
                      <?php if($F->Form_Cat=="Birth"){?>
                        <div class="d-flex flex-column justify-content-center">
                            Birth Date: <h6 class="mb-0 text-sm"><?php echo $F->Birth_Date?></h6>
                            Place of Birth:<h6 class="mb-0 text-sm"><?php echo $F->Place_of_B?></h6>
                            Mother Name: <h6 class="mb-0 text-sm"><?php echo $F->Mother_Name?></h6>
                            Father Name: <h6 class="mb-0 text-sm"><?php echo $F->Father_Name?></h6>
                            Date Issued: <h6 class="mb-0 text-sm"><?php echo $F->Date_Issued?></h6>
                        </div>
                      <?php }elseif($F->Form_Cat=="Death"){?>
                        <div class="d-flex flex-column justify-content-center">
                            Death Date: <h6 class="mb-0 text-sm"><?php echo $F->Death_Date?></h6>
                            Place: <h6 class="mb-0 text-sm"><?php echo $F->Place_o_Death?></h6>
                            Occupation: <h6 class="mb-0 text-sm"><?php echo $F->Occupation?></h6>
                            Spouse Name: <h6 class="mb-0 text-sm"><?php echo $F->Spouse_Name?></h6>
                            Birth Date: <h6 class="mb-0 text-sm"><?php echo $F->Birth_Date?></h6>
                            Date Issued: <h6 class="mb-0 text-sm"><?php echo $F->Date_Issued?></h6>
                        </div>
                      <?php }?>
                      </td>
                      <td  class="align-middle text-center text-sm">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $F->D_Street?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $F->D_Address?></p>
                            <p class="text-xs text-secondary mb-0"><?php echo $F->D_Town?></p>
                            <p class="text-xs text-secondary mb-0"><?php echo $F->D_Country?></p>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <div class="text-xs font-weight-bold mb-0"><p style="color:red">Denied</p></div>
                      </td>
                      <td class="align-middle text-center justify-content-center">
                        <a href="?M=R&d_form=<?php echo $F->ID?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit F">
                          Delete                        
                        </a>
                        <?php if(isset($_GET["d_form"])){if($F->ID==$_GET["d_form"]){?><i class="material-icons opacity-10">arrow_drop_down</i><?php } }?>
                        <?php if(isset($_GET["d_form"])){if($F->ID==$_GET["d_form"]){?>
                          <div class="justify-content-center text-center" style="width:60%; height:10%; padding-left:10px" >
                            <div class="row justify-content-center" style="padding-left:10px">
                            <a href="includes/functions.php?Del_form=Yes&&ID=<?php echo $_GET["d_form"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-danger" style="color:#212529;">Yes</a> 
                            <a href="includes/functions.php?Del_form=No&&d_form=<?php echo $_GET["d_form"]?>" class="col-md-6 col-sm-6 col-xs-12 bg-success" style="color:#212529">No</a>
                          </div>
                          </div>
                        <?php }}?>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
            <?php }?>
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