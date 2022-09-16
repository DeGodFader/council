<?php include("../includes/header2.php")?>
<?php $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];?>

                    <?php include("../includes/navbar.php")?>
                </div>
            </div>
            <!-- Header End -->
            
            
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
            <div class="col-md-9">
                <div class="service" style="background-color:#00539C;">
                    <div class="service-item ">
                        <div class="container" style="background-color:#ced4da;">
                            <h3 class="row">
                                <div style="background-color: #FFD662; width:30px; border-radius:5px;"><i class="fa fa-plus"></i> </div>
                                <div>&ensp; Review Form</div>
                            </h3>
                            <div class="container justify-content-left">
                                <div class="justify-content-left" style="text-align:left">
                                    <div class="row">
                                        <div class="col-md-6 row" style="padding-left:20px;">
                                        
                                            <?php 
                                                
                                                $_SESSION["values"]=array();
                                                foreach($_POST as $K=>$V){
                                                    $_SESSION["values"][]=$V;
                                            ?>
                                              <div class="col-md-6"><?php echo $K . ": &ensp;"?></div>
                                              <div class="col-md-6"><?php echo $V?></div>
                                            <br>
                                            <?php }?>
                                        </div>
                                        <div class="col-md-6 row" style="padding-left:20px; height:fit-content;">
                                            <?php if($_POST["Certificate_Type"]=="Hard Copy"){
                                                if($_POST["Country"]=="Cameroon" || $_POST["Country"]=="cameroon"){ $Amount=(($Pr->F_Par($_SESSION["Purp"],"Name"))->Amount); $Sub=(($Pr->S_Par(4))->Amount)+(($Pr->Search($_POST["Transport_Level"], "Name"))[0]->Amount);}
                                                elseif(in_array($_POST["Country"],$country_list)){$Amount=(($Pr->F_Par($_SESSION["Purp"],"Name"))->Amount)+(($Pr->S_Par(5))->Amount); $Sub=(($Pr->Search($_POST["Transport_Level"], "Name"))[0]->Amount);}
                                                else{$Amount=(($Pr->F_Par($_SESSION["Purp"],"Name"))->Amount)+(($Pr->S_Par(6))->Amount)+(($Pr->Search($_POST["Transport_Level"], "Name"))[0]->Amount);}
                                            ?>
                                              <div class="col-md-6">Certificate Cost: &ensp;</div>
                                              <div class="col-md-6"><?php echo ($Pr->F_Par($_SESSION["Purp"],"Name"))->Amount?></div>  
                                              <div class="col-md-6">Delivery Package + Transportation Cost: &ensp;</div>
                                              <div class="col-md-6"><?php echo $Sub?></div>                                            
                                              <div class="col-md-6">Total:&ensp;</div>
                                              <div class="col-md-6"><?php echo $Amount+$Sub; $_SESSION["Amount"]=$Amount+$Sub?></div> 
                                            <?php }else{?>
                                              <div class="col-md-6">Certificate Cost: &ensp;</div>
                                              <div class="col-md-6"><?php echo ($Pr->F_Par($_SESSION["Purp"],"Name"))->Amount?></div>
                                              <div class="col-md-6">Total:&ensp;</div>
                                              <div class="col-md-6"><?php echo($Pr->F_Par($_SESSION["Purp"],"Name"))->Amount; $_SESSION["Amount"]=($Pr->F_Par($_SESSION["Purp"],"Name"))->Amount?></div>
                                            <?php }?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="service">
                            <a href="Forms.php?<?php echo $_SESSION['Purp']?>" class="btn" value="Cancel Request" style="background-color:royalblue;">Back</a>
                            <a href="Payment.php" class="btn" style="background-color:royalblue;">Make Payment</a>
                    </div>
                                  
            </div>
           <!-- Footer Start -->
           <?php include("../../includes/footer.php")?>