<?php include("includes/header2.php")?>

<body>
        <div class="container-fluid">
            <!-- Header Start -->
            <div class="header home">
                <div class="container-fluid">
                <?php include("includes/navbar.php")?>
            </div>
                <div class="hero row">
                    <div class="col-md-5">
                    <?php if(isset($_SESSION["Name"])){header("location:index.php");}?>
                        <div class="form">
                            <h3>Sign Up</h3>
                           <?php if(isset($_SESSION["LOG_E"])){ if($_SESSION["LOG_E"]=="User"){ echo "<h3 class='bg-danger'><small>User Exists</small></h3>";}else{ echo "<h3 class='bg-danger'><small>Passwords don't Match</small></h3>";}} unset($_SESSION["LOG_E"])?></h4>
                            <form method="post" action="admin/LOG.php">
                                <input class="form-control" type="text" placeholder="Your Name" name="Name">
                                <input class="form-control" type="email" placeholder="E_mail" name="Email">
                                <input class="form-control" type="tel" placeholder="Phone Number" name="Tel">
                                <input class="form-control" type="password" placeholder="Password" name="Passw">
                                <input class="form-control" type="password" placeholder="Confirm Password" name="Passc">
                                <input type="submit" value="Submit" class="btn form-control" name="signup">
                            </form>
                            <div style="color:white">Already have an account. <a href="Login.php" style="color:blue">SignIn</a></div> 
                        </div>
                    </div>
                </div>



<?php include("includes/footer.php")?>