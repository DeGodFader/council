<?php 
    if(isset($_POST["Pay"])){
        $Phone=$_POST["Tell"];
        $_SESSION["Sent"]=1;
    }else{
        $_SESSION["Sent"]=0;
    }

?>


<?php include("../includes/navbar.php")?>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Payments
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
    <?php $Pay_Complete="false"?>
            <!-- Page Header End -->
    
    <div class="col-md-9" style="background-color:#ced4da; border-radius:0.3em; padding:10px;">
        <div class="container-fluid">
            <div class="col-md-12" style="align-content:center;">
                <div class="form-group row col-12" style="padding-left:30% ; ">
                    <form action="" method="get" class="form row">
                        <select name="select" style="height:40px">
                            <option value="">~Please select a Payment Method~</option>
                                <option value="1">MTN Momo</option>
                            
                                <option value="2">Orange Money</option>
                            
                                <option value="3">Paypal/Credit Card</option>
                        </select>
                        <input type="submit" value="Go" style="margin-left:20px; width:100px;" class="form-control bg-primary ">
                    </form>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="container" style="margin-top:50px ;">
            <?php if(isset($_GET["select"])){?>
                <?php if($_GET["select"]==1){?>
                    <?php if(!isset($_POST["Pay"])){?>
                        <h3 style="font-weight:bold ;">MTN Momo</h3>
                        <form action="" method="post" class="form">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Name" value="<?php echo $_SESSION["Name"]?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Tell" value="<?php echo $_SESSION["Tell"]?>">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="submit" name="Pay" value="Pay" class="form-control bg-secondary">
                            </div>
                        </form>
                    <?php }else{?>
                        <div class="container">
                            <h3 style="font-weight:bold ;">MTN Momo</h3>
                            Please Make Sure you FOLLOW the steps below <br>
                            <ul>
                                <li>Dail *126#</li>
                                <li>Enter Your Pin</li>
                                <li>Copy the Transaction ID and Fill below</li>
                                <li>Click Submit</li>
                            </ul>
                        </div>
                        <form action="functions.php" class="form" method="post">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Transaction Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Transaction">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="submit" name="Done" value="Done" class="form-control bg-secondary">
                            </div>
                        </form>        
                    <?php }?>
                <?php }?>
                <?php if($_GET["select"]==2){?>
                    <?php if(!isset($_POST["Pay"])){?>
                        <h3 style="font-weight:bold ;">Orange Money</h3>
                        <form action="" method="post" class="form">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Name" value="<?php echo $_SESSION["Name"]?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Tell" value="<?php echo $_SESSION["Tell"]?>">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="submit" name="Pay" value="Pay" class="form-control bg-secondary">
                            </div>
                        </form>
                    <?php }else{?>
                        <div class="container">
                            <h3 style="font-weight:bold ;">Orange Money</h3>
                            Please Make Sure you FOLLOW the steps below <br>
                            <ul>
                                <li>Dail </li>
                                <li>Enter Your Pin</li>
                                <li>Copy the Transaction ID and Fill below</li>
                                <li>Click Submit</li>
                            </ul>
                        </div>
                        <form action="functions.php" class="form" method="post">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Transaction Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Transaction">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="submit" name="Done" value="Done" class="form-control bg-secondary">
                            </div>
                        </form>        
                    <?php }?>
                <?php }?>
                <?php if($_GET["select"]==3){include("../includes/Paypal.php");}?>
            <?php } ?>
            </div>
        </div>
    </div>





<?php if($Pay_Complete=="Yes"){include("functions.php");}?>
<!-- Footer Start -->
<?php include("../../includes/footer.php")?>