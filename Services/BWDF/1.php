<?php include("../includes/navbar.php")?>
       


    <?php if($_GET["M"]==1){?>   
        <div class="col-12 col-md-8">
            <p>Every birth in <i># Council</i>  must be registered within 42 days (6 weeks) of the child being born.</p>
            <div class="well">
            <p><strong>To book an appointment please contact <i># Council</i>  Contact Centre on <i>Contact</i>. </strong></p>
            <p>Our phone lines are open:</p>
            <ul>
            <li>Monday 9am to 6pm</li>
            <li>Tuesday 9am to 6pm</li>
            <li>Wednesday 10am to 6pm</li>
            <li>Thursday 9am to 6pm</li>
            <li>Friday 9am to 6pm</li>
            </ul>
            </div>
            <p>For details and opening hours of our offices
            <h2 style="font-weight:bold">Where to register the birth</h2>
            <p>If your baby was born in <i># Council</i> you may attend any of our registration offices.</p>
            <p>If your baby was born outside of <i># Council</i> you should register the birth in the district where the birth took place. Or you may attend any other registration office in England and Wales to make a declaration of the details required for the registration. In this case, any birth certificates you need will be sent to you by post.</p>
            <h2 style="font-weight:bold">Who can register the birth?</h2>
            <p>Please refer to the Government's information on <i>LINK</i></p>
            <h2 style="font-weight:bold">What you need to bring?</h2>
            <p>Please refer to the Government's website for <i>LINK</i></p>
            <h2 style="font-weight:bold">Errors and corrections</h2>
            <p>It is important that the information recorded in the register is correct. If you notice a mistake, however small, after the registration is complete, there will be a correction fee.</p>
            <p>The fee to apply for a correction will be £75 or £90 depending on the nature of the correction. Please note that payment of the fee does not guarantee the correction can be made.</p>
            <h2 style="font-weight:bold">Certificates</h2>
            <p>Standard (or full) birth certificates are available at £11.00 each. We accept cash, cheques, credit or debit card. The standard birth certificate is suitable for all Government departments, for example, a passport application.</p>
            <?php 
                if(isset($_SESSION["Name"])){?>
                <a href="form.php?M=1" class="btn-block btn" style="border-radius:0.3em; color:white; background-color:#FFD662;">
                    <div class="service-item">
                        <h4></h4>
                    </div>
                </a>
            <?php }?>
        </div>
    <?php }?>
    <?php if($_GET["M"]==2){?>
        <div class="col-12">
            <h2>What is re-registration?</h2>
            <p>Re-registration is the completion of a new record of birth which supersedes an original registration.</p>
            <h2>Why do I need to re-register my child's birth?</h2>
            <p>There are two circumstances in which a child may be re-registered:</p>
            <ul>
            <li>If the child’s natural parents have married or formed a civil partnership with each other since the child was born</li>
            <li>Adding the father’s details if they weren’t recorded at the time of registration.&nbsp; If the child's parents are unmarried and not in a civil partnership with each other and would like to add the natural father’s details to the birth record</li>
            </ul>
            <p>Further information on re-registering a child can be found on the gov.uk website</p>
            <p class="crw-bg__grey rounded-0 p-4 my-3 crw-text-color__dark"><strong>To book an appointment please contact us on <i>CONTACT</i> (Monday to Friday 9:00am to 6:00pm).</strong></p>
            <p>&nbsp;For contact details and opening hours, please see our&nbsp;Registration Offices&nbsp;page.</p>
        </div>
    <?php }?>
    <?php if($_GET["M"]==3){?>
        <h2 style="font-weight:bold">Need To Know</h2>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime laudantium cum quam molestiae ipsum. Animi culpa alias iusto expedita? Illo minima molestiae reiciendis delectus commodi nihil, autem quis voluptas quibusdam! <br>
        <?php if(isset($_SESSION["ID"])){?><a href="Forms.php?Purp=Birth&&M=3&&Service=Birth,Weddings,DeathandFunerals&&Page=Request a Certificate" class="bth">Click to go to form</a><?php }else{?><a href="../../Login.php" class="bth">Please LogIn</a><?php }?>
    <?php }?>
<!-- Footer Start -->
<?php include("../includes/footer.php")?>