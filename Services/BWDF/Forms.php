<?php include("../includes/navbar.php")?>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Certificate</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container-xl" style="max-width:1500px">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="contact-form">
                                <form action="Reviews.php" method="post">
                                    <div class="service" >
                                        <div class="service-item " >
                                            <div class="container" style="background-color:#ced4da;">
                                                <h3 class="row">
                                                    <div style="background-color: #FFD662; width:30px; border-radius:5px;"><i class="fa fa-asterisk"></i> </div>
                                                    <div>&ensp; Requirements</div>
                                                </h3>
                                                <div class="container justify-content-left">
                                                    <div class="justify-content-left" style="text-align:left">
                                                        <div>
                                                            <div style="padding-left:20px;">
                                                                Before requesting your copy certificate please check:
                                                            </div>
                                                            <ul class="List">
                                                                <li >
                                                                    The civil partnership took place within&nbsp;
                                                                    <span class="Bold">#<br></span>
                                                                    Worcestershire Registration Services can only issue copy certificates for civil partnerships that have taken place within the county of Worcestershire
                                                                </li>
                                                                <li>
                                                                    Please make sure you are KYC verified or you stand a chance of not being able to plance an order
                                                                </li>
                                                                <li>
                                                                    Ensure that you have a direct relation to who so ever's document you're requesting if it isn't yours
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    .
                                                </div>
                                            </div>
                                        </div>   
                                    
                                        <div class="service-item">
                                            <div class="container" style="background-color:#ced4da ;">
                                                <h3 class="row">
                                                    <div style="background-color: #FFD662; width:30px; border-radius:5px;">1</div>
                                                    <div>&ensp; Applicant Details</div>
                                                </h3>
                                                <div class="form-group col-md-9">
                                                    <input type="text" class="form-control" name="Name" <?php if(isset($_POST["Name_R"])){ echo "value='" . $_POST["Name"] . "'";}else{?>placeholder="Your Name"<?php }?> required />
                                                </div>
                                                <div class="form-group col-md-9">
                                                    <input type="email" class="form-control" name="Mail" <?php if(isset($_POST["Mail"])){ echo "value='" . $_POST["Mail"] . "'";}else{?>placeholder="Your Email"<?php }?> required />
                                                </div>
                                                <div class="form-group col-md-9">
                                                    <input type="tell" class="form-control" name="Tell" <?php if(isset($_POST["Tell"])){ echo "value='" . $_POST["Tell"] . "'";}else{?>placeholder="Your Phone Number"<?php }?> required />
                                                </div>
                                                <div class="form-group">
                                                    <i>* This is required so we are able to contact you. We may need to check any missing details from your application or contact you if we are unable to locate the certificate to be issued.</i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="service-item">
                                            <div class="container" style="background-color:#ced4da ;">
                                                <h3 class="row">
                                                    <div style="background-color: #FFD662; width:30px; border-radius:5px;">2</div>
                                                    <div>&ensp; Reason For Request</div>
                                                </h3>
                                                <div class="form-group col-md-9">
                                                    <textarea style="height:200px" class="form-control" name="Reason" <?php if(isset($_POST["Reason"])){ echo "value='" . $_POST["Reason"] . "'";}else{?>placeholder="Text"<?php  }?> required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    .
                                                </div>
                                            </div>
                                        </div>
                                    <?php if(isset($_GET["Purp"]) && $_GET["Purp"]!="Death"){?>            
                                        <div class="service-item">
                                            <div class="container" style="background-color:#ced4da ;">
                                                <h3 class="row">
                                                    <div style="background-color: #FFD662; width:30px; border-radius:5px;">3</div>
                                                    <div>&ensp; Is this Your Certificate?</div>
                                                </h3>
                                                <div class="form-group row" style="padding-left:100px ;">
                                                    <select name="Certificate_Owner" id="" class="col-md-6" style="height:40px">
                                                        <option value="" style="background-color:#FFD662">~~Please Select~~</option>
                                                        <hr>
                                                        <option value="Yes" style="background-color:#FFD662">Yes</option>
                                                        <hr>
                                                        <option value="No" style="background-color:#FFD662">No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    .
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php if($_GET["Purp"]=="Birth"){$_SESSION["Purp"]=$_GET["Purp"];?>
                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">4</div>
                                                <div>&ensp; Certificate details</div>
                                            </h3>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Name_on_Certificate" <?php if(isset($_POST["Name_O"])){ echo "value='" . $_POST["Name_O"] . "'";}else{?>placeholder="Name"<?php }?> required />
                                            </div>
                                            <div class="row" style="padding-left:10px;">
                                                <div>&ensp; Date Of Birth</div>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="date" class="form-control" name="Date_of_Birth" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Date"<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Place_of_Birth" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Place of Birth"<?php }?> required />
                                            </div>
                                            <div class="row" style="padding-left:10px;">
                                                <div>&ensp; Issued Date</div>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="Date" class="form-control" name="Issue_Date" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Date Issued"<?php }?> required />
                                            </div>
                                            <div class="form-group">
                                                .                              
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">5</div>
                                                <div>&ensp; Parents Info</div>
                                            </h3>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Father_Name" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Father's Name"<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Mother_Name" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Mother's Name"<?php }?> required/>
                                            </div>
                                            <div class="form-group">
                                                .
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </div>                                    
                                <?php }?>
                                <?php if($_GET["Purp"]=="Death"){$_SESSION["Purp"]=$_GET["Purp"];?>
                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">4</div>
                                                <div>&ensp; Certificate details</div>
                                            </h3>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Name_on_Certificate" <?php if(isset($_POST["Name_O"])){ echo "value='" . $_POST["Name_O"] . "'";}else{?>placeholder="Name"<?php }?> required />
                                            </div>
                                            <div class="row" style="padding-left:10px;">
                                                <div>&ensp; Date Of Death</div>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="date" class="form-control" name="Date_of_Death" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Date "<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Place_of_Death" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Place of Death"<?php }?> required />
                                            </div>                                            
                                            <div class="row" style="padding-left:10px;">
                                                <div>&ensp; Date Of Birth</div>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="date" class="form-control" name="Date_of_Birth" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Date "<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Age_at_Death" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Age at Death"<?php }?> required />
                                            </div>
                                            <div class="row" style="padding-left:10px;">
                                                <div>&ensp; Issued Date</div>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="Date" class="form-control" name="Issue_Date" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Date Issued"<?php }?> required />
                                            </div>
                                            <div class="form-group">
                                                .                              
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">5</div>
                                                <div>&ensp; Personal Info</div>
                                            </h3>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Spaouses_Name" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Spouses Name"<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Occupation" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Occupation"<?php }?> required/>
                                            </div>
                                            <div class="form-group">
                                                .
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </div> 
                                <?php }?>
                                <?php if($_GET["Purp"]=="Marriage"){$_SESSION["Purp"]=$_GET["Purp"];?>
                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">4</div>
                                                <div>&ensp; Certificate details</div>
                                            </h3>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Name_of_the_Woman" <?php if(isset($_POST["Name_O"])){ echo "value='" . $_POST["Name_O"] . "'";}else{?>placeholder="Woman's Name"<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Name_of_the_Man" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Man's Name"<?php }?> required />
                                            </div>
                                            <div class="row" style="padding-left:10px;">
                                                <div>&ensp; Date of Marriage</div>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="Date" class="form-control" name="Date_of_Wedding" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder=""<?php }?> required />
                                            </div>
                                            <div class="form-group">
                                                .                              
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">5</div>
                                                <div>&ensp; Extra Detail</div>
                                            </h3>
                                            <div class="row" style="padding-left:10px;">
                                                <div>&ensp; Date Of Issue</div>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="Date" class="form-control" name="Issue_Date" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Date Issued"<?php }?> required />
                                            </div>
                                            <div class="form-group">
                                                .
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </div>                                    
                                <?php }?>
                                <div class="service" >
                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">6</div>
                                                <div>&ensp; Amount</div>
                                            </h3>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Number_of_Copies" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="How many Copies do you want"<?php }?> required />
                                            </div>                                            
                                            <div class="form-group">
                                                .                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">7</div>
                                                <div>&ensp; Delivery packages</div>
                                            </h3>
                                            <div class="col-md-12 row">
                                                <div class="service-item col-md-4" style="background-color:#FFD662; border-radius:0.3em; margin-right:0px">                                                  
                                                    <div class="">
                                                        <h3>Low level Delivery</h3>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus adipisci nostrum perferendis sapiente. 
                                                        Nobis libero odio tempora ipsum, soluta doloremque possimus? Sunt animi suscipit maxime. Voluptate explicabo 
                                                        enim omnis ea.
                                                        <div class="justify-content-right col-12">
                                                            <span>Price:<?php echo(($Pr->S_Par(9))->Amount)?> FCFA</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-item col-md-4" style="background-color:#FFD662; border-radius:0.3em; margin-right:0px">                                                  
                                                    
                                                    <div class="">
                                                        <h3>Middle level Delivery</h3>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus adipisci nostrum perferendis sapiente. 
                                                        Nobis libero odio tempora ipsum, soluta doloremque possimus? Sunt animi suscipit maxime. Voluptate explicabo 
                                                        enim omnis ea.
                                                        <div class="justify-content-right col-12">
                                                            <span>Price:<?php echo(($Pr->S_Par(8))->Amount)?> FCFA</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-item col-md-4" style="background-color:#FFD662; border-radius:0.3em;">                                                  
                                                    
                                                    <div class="">
                                                        <h3>Top level Delivery</h3>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus adipisci nostrum perferendis sapiente. 
                                                        Nobis libero odio tempora ipsum, soluta doloremque possimus? Sunt animi suscipit maxime. Voluptate explicabo 
                                                        enim omnis ea.
                                                        <div class="justify-content-right col-12">
                                                            <span>Price:<?php echo(($Pr->S_Par(7))->Amount)?> FCFA</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row col-12" style="padding-left:100px ;">
                                                    <select name="Transport_Level" id="" class="col-md-6" style="height:40px">
                                                        <option value="">~~Select Transport Means~~</option>
                                                        <option value="Top Level">Top Level</option>
                                                        <option value="Medium Level">Medium Level</option>
                                                        <option value="Low Level">Low Level</option>
                                                    </select>
                                                </div>
                                            </div>                                            
                                            <div class="form-group">
                                                .                              
                                            </div>
                                        </div>
                                </div>

                                <?php if($_GET["Purp"]!="Death"){?>
                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">8</div>
                                                <div>&ensp; Is this Your Certificate?</div>
                                            </h3>
                                            <div class="form-group row" style="padding-left:100px ;">
                                                <select name="Certificate_Type" id="" class="col-md-6" style="height:40px">
                                                    <option value="" style="background-color:#FFD662">~~Please Select~~</option>
                                                    <hr>
                                                    <option value="Hard Copy" style="background-color:#FFD662">Hard Copy</option>
                                                    <hr>
                                                    <option value="Soft Copy" style="background-color:#FFD662">Soft Copy</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                .
                                            </div>
                                        </div>
                                    </div>    
                                <?php }?>

                                    <div class="service-item">
                                        <div class="container" style="background-color:#ced4da ;">
                                            <h3 class="row">
                                                <div style="background-color: #FFD662; width:30px; border-radius:5px;">9</div>
                                                <div>&ensp; Delivery Details</div>
                                            </h3>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Home_Address" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Home Address"<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Street" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Street"<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Town" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Town"<?php }?> required />
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" name="Country" <?php if(isset($_POST[""])){ echo "value='" . $_POST[""] . "'";}else{?>placeholder="Country"<?php }?> required />
                                            </div>
                                            <div class="form-group">
                                                .                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" class="btn" value="CANCEL">
                                    <input type="submit" class="btn">
                                </div>
                            </form>
                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->

<!-- Footer Start -->
<?php include("../includes/footer.php")?>