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
    
    

    <?php include("../includes/Paypal.php")?>








<?php if($Pay_Complete=="Yes"){include("functions.php");}?>
<!-- Footer Start -->
<?php include("../../includes/footer.php")?>