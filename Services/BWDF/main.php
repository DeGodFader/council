<div>
    <div class="container">
        <div class="section-header">
            <h2></h2>
        </div>
    </div>
    <div class="accordion" id="accordionExample">

        <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#birth" aria-expanded="false" aria-controls="birth">
                    <h4 style="font-weight:bold">Births</h4>
                    </button>
                </h2>
                </div>
            <div id="birth" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="service">
                        <h2 style=" font-weight:bold; text-align:center;" >Births</h2>
                        <div class="container">
                            <div class="row">
                                 <!-- List of links -->
                                    <?php 
                                            $List=["Register a Birth", "Re-register Birth", "Request a Certificate"];
                                            $line=round((12/sizeof($List))+0.4);//sizeof($List);
                                            if($line>=6){$Space="col-lg-6 col-md-6";}
                                            else{$Space="col-lg-4 col-md-4";}
                                            $i=1;
                                            foreach($List as $item){
                                    
                                    ?>
                                        <div class="<?php echo $Space?> btn ">
                                            <a href="Services/BWDF/1.php?M=<?php echo $i?>&&Service=<?php echo $Service->Name?>&&Page=<?php echo $List[$i-1]?>">
                                                <div class="service-item">
                                                    <h3> <?php echo $item?>
                                                    <i class="far fa-arrow-alt-circle-right"></i>
                                                    </h3>
                                                </div>
                                            </a>
                                        </div>
                                        <?php $i++;}?>
                            </div>
                        </div>
                        <div class="container">
                            <h3 style="font-weight:bold;">Child or Baby Naming Ceremony</h3>
                            <p> Celebrate with your family and friends to confirm your baby’s or children’s registered names; celebrate the joining of two families, an adopted child, or children, into your family.</p>
                            <p> These ceremonies are non-religious and carry no legal status. There is no age limit and the ceremony can be for one child or a whole family! Let us help you make this a memorable ceremony where everyone can be involved from grandparents to other family members and friends, joining together with special poems or songs. One of our Celebrant Registrars will work with you to create a ceremony in almost any location of your choice.</p>
                            <p> To find out more email the <a href="mailto:#" style="color:royalblue">#council@gmail.com</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#weddding" aria-expanded="true" aria-controls="weddding">
                <h4 style="font-weight:bold">Weddings</h4>
                </button>
            </h2>
            </div>

            <div id="weddding" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                        <div class="service">
                            <h2 style=" font-weight:bold; text-align:center;">Wedding</h2>
                            <div class="container">
                                <div class="row">
                                     <!-- List of links -->
                                        <?php 
                                                $List=["Marriage / Civil Ceremonies in #", " Ceremony Packages", "Religious Ceremonies", "Find a Venue", "Request a Copy of Certificate", "Request a Copy of Civil Partnership"];
                                                $line=round((12/sizeof($List))+0.4);//sizeof($List);
                                                if($line>=6){$Space="col-lg-6 col-md-6";}
                                                else{$Space="col-lg-4 col-md-4";}
                                                $i=1;
                                                foreach($List as $item){
                                        
                                        ?>
                                            <div class="<?php echo $Space?> btn ">
                                                <a href="Services/BWDF/2.php?M=<?php echo $i?>&&Service=<?php echo $Service->Name?>&&Page=<?php echo $List[$i-1]?>">
                                                    <div class="service-item">
                                                        <h3> <?php echo $item?>
                                                        <i class="far fa-arrow-alt-circle-right"></i>
                                                        </h3>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php $i++;}?>
                                </div>
                            </div>
                            <div class="container">
                                <h3 style="font-weight:bold;">Renewal of Marriage Vows</h3>
                                <p> A ceremony to perhaps celebrate your first wedding anniversary, 10 Years, Silver or Golden Anniversary… or just because you want to!</p>
                                <p> One of our Celebrant Registrars will perform a Renewal of Vows ceremony in almost any venue of your choice. It does not need to be a Licensed Venue. You can follow the format of a traditional wedding ceremony or enhance your ceremony in any way you wish. This can involve your family and friends, including those who were with you on your wedding day, remembering all those moments in life that will make your day forever special. Our Celebrant Registrar will meet you, discuss options, listen to your ideas and, together with you, will make it happen.</p>
                                <p> To find out more email the <a href="mailto:#" style="color:royalblue">#council@gmail.com</a> </p>
                                <h3 style="font-weight:bold;">Commitment Ceremony</h3>
                                <p>You can commit to each other in a non-legal ceremony style of your choice. Vows can be written to express your thoughts and feelings about your lives together and your hopes and dreams for the future. Rings can be exchanged and you can also sign a Certificate of Commitment. Come and talk to one of our Celebrant Registrars about the various options possible to make your special day a reality.</p>
                                <p> To find out more email the <a href="mailto:#" style="color:royalblue">#council@gmail.com</a> </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#death" aria-expanded="true" aria-controls="death">
                <h4 style="font-weight:bold">Deaths</h4>
                </button>
            </h2>
            </div>

            <div id="death" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <div class="service">
                    <h2 style=" font-weight:bold; text-align:center;">Death</h2>
                    <div class="container">
                        <div class="row">
                            <!-- List of links -->
                            <?php 
                                                $List=["Request a Death Certificate", "Register a Death"];
                                                $line=round((12/sizeof($List))+0.4);//sizeof($List);
                                                if($line>=6){$Space="col-lg-6 col-md-6";}
                                                else{$Space="col-lg-4 col-md-4";}
                                                $i=1;
                                                foreach($List as $item){
                                        
                                        ?>
                                            <div class="<?php echo $Space?> btn ">
                                                <a href="Services/BWDF/3.php?M=<?php echo $i?>&&Service=<?php echo $Service->Name?>&&Page=<?php echo $List[$i-1]?>">
                                                    <div class="service-item">
                                                        <h3> <?php echo $item?>
                                                        <i class="far fa-arrow-alt-circle-right"></i>
                                                        </h3>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php $i++;}?>
                        </div>
                    </div>
                    <div class="container">
                        <h3 style="font-weight:bold;">Registration Offices</h3>
                        <p> We have registration offices across Worcestershire, to find your nearest see our full list of offices and their contact details. Read more about our registration offices.</p>
                        <p> To find out more email the <a href="mailto:#" style="color:royalblue">#council@gmail.com</a> </p>
                    </div>
                </div> 
            </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#funeral" aria-expanded="false" aria-controls="funeral">
                <h4 style="font-weight:bold">Funerals</h4>
                </button>
            </h2>
            </div>
            <div id="funeral" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <div class="service">
                    <h2 style=" font-weight:bold; text-align:center;">Funerals</h2>
                    <div class="container">
                        <div class="row justify-content-center">
                             <!-- List of links -->
                             <?php 
                                                $List=["Cemeteries Around"];
                                                $line=round((12/sizeof($List))+0.4);//sizeof($List);
                                                if($line>=6){$Space="col-lg-6 col-md-6";}
                                                else{$Space="col-lg-4 col-md-4";}
                                                $i=1;
                                                foreach($List as $item){
                                        
                                        ?>
                                            <div class="<?php echo $Space?> btn ">
                                                <a href="Services/BWDF/4.php?M=<?php echo $i?>&&Service=<?php echo $Service->Name?>&&Page=<?php echo $List[$i-1]?>">
                                                    <div class="service-item">
                                                        <h3> <?php echo $item?>
                                                        <i class="far fa-arrow-alt-circle-right"></i>
                                                        </h3>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php $i++;}?>
                        </div>
                    </div>
                    <div class="container">
                        <p> To find out more email the <a href="mailto:#" style="color:royalblue">#council@gmail.com</a> </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>

</div>
