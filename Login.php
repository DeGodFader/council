<?php include("includes/header2.php")?>
<body>
        <div class="container-fluid">
            <!-- Header Start -->
            <div class="header home">
            <div class="container-fluid">
            <?php include("includes/navbar.php")?>
            <?php if(isset($_SESSION["Name"])){header("location:index.php");}?>
            <div style="align-content:center">
                <div class="hero row">
                    <div class="col-md-5">
                        <div class="form">
                            <h4 class="bg-danger col-md-6" style="color:black; font-weight:bold;"><?php if(isset($_SESSION["LOG_E"])){ if($_SESSION["LOG_E"]=="No User"){ echo "User Doesn't exist";}else{ echo "Wrong Password";}} unset($_SESSION["LOG_E"])?></h4>
                            <h3>Log In</h3>
                            <form method="post" action="admin/LOG.php">
                                <input class="form-control" type="text" placeholder="Your Name" name="Name" required>
                                <input class="form-control" type="password" placeholder="Password" name="Passw" required>
                                <input type="submit" value="Submit" class="btn form-control" name="login">
                            </form>
                        <div style="color:white">Don't have an account? <a href="Register.php" style="color:blue">SignUp</a></div>
                        </div>
                    </div>
                </div>
            </div>


<?php include("includes/footer.php")?>