    <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start justify-content-center">
          <h5 class="mt-3 mb-0">Administrator: <small><?php print_r($_SESSION["Name"])?></small></h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="dark horizontal my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Profile stuff -->
        <div>
          <a href="../pages/profile.php" class="nav-link text-body font-weight-bold px-0">
            <span class="d-sm-inline d-none "><i class="material-icons opacity-10">person</i> Profile</span>
          </a>
        </div>
        <hr class="dark horizontal my-1">
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl bg-secondary d-block mt-2" style="color:White;">You can change the sidenav type just on desktop view.</p>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div>
          <a href="../../Logout.php" class="nav-link text-body font-weight-bold px-0">
              <span class="d-sm-inline d-none "><i class="material-icons opacity-10">logout</i> Logout</span>
          </a>
        </div>
      </div>
    </div>
  </div>