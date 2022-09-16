
<?php if($_SESSION["Level"]==3){?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <span class="ms-1 font-weight-bold text-white">Administrator</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="users.php"){echo "active bg-gradient-primary";}?>" href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="dashboard.php"){echo "active bg-gradient-primary";}?>" href="users.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">group</i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="table.php"){echo "active bg-gradient-primary";}?>" href="tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="comment.php"){echo "active bg-gradient-primary";}?>" href="forms.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Forrms</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="comment.php"){echo "active bg-gradient-primary";}?>" href="comments.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">comment</i>
            </div>
            <span class="nav-link-text ms-1">Comments</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="comment.php"){echo "active bg-gradient-primary";}?>" href="KYC.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">privacy_tip</i>
            </div>
            <span class="nav-link-text ms-1">KYC Verification</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="comment.php"){echo "active bg-gradient-primary";}?>" href="online_courses.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">school</i>
            </div>
            <span class="nav-link-text ms-1">Online Courses</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="video.php"){echo "active bg-gradient-primary";}?>" href="videos.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">movie</i>
            </div>
            <span class="nav-link-text ms-1">Videos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="admin.php"){echo "active bg-gradient-primary";}?>" href="admins.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">diversity_3</i>
            </div>
            <span class="nav-link-text ms-1">Administrators</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($_SERVER["PHP_SELF"]=="Forms_Settings.php.php"){echo "active bg-gradient-primary";}?>" href="Forms_Settings.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">sell</i>
            </div>
            <span class="nav-link-text ms-1">Pricing</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      
    </div>
  </aside>
<?php }?>