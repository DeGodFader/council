<?php include("includes/header.php")?>

<body>
        <div class="container-fluid">
            <!-- Header Start -->
            <div class="header home">
            <div class="container-fluid">
                    <?php include("includes/navbar.php")?>
                    
                    <div class="hero row align-items-center">
                        <div class="col-md-7">
                            <h2><span>#</span> Council</h2>
                            <p>Lorem ipsum dolor sit amet elit pretium facilisis ornare</p>
                            <a class="btn" href="about.php">Explore Now</a>
                        </div>
                        <div class="col-md-5">
                            <div class="form">
                                <?php include("admin/TESTIMONY.php")?>
                                <h3>Leave a Comment</h3>
                                <form method="post" action="admin/TESTIMONY.php" enctype="multipart/form-data">
                                    <input class="form-control" type="text" name="Writter" value="<?php if(isset($_SESSION["ID"])){echo $_SESSION["Name"];}?>" placeholder="<?php if(isset($_SESSION["ID"])){}else{ echo "Your Name";}?>">
                                    <input class="form-control" type="text" name="W_Tell" value="<?php if(isset($_SESSION["Tell"])){echo $_SESSION["Tell"];}?>" placeholder="<?php if(isset($_SESSION["Tell"])){}else{ echo "Mobile Number";}?>">
                                    <textarea class="form-control" name="Comment" placeholder="Comment"></textarea>
                                    <input type="file" name="filee" class="form-control">
                                    <input type="submit" value="SUBMIT" name="Pass" class="form-control btn btn-block">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
            
            
            <!-- Add search bar -->
            <div class="input-group container-fluid justify-content-center" style="background-color:#3e87ad; height:100px; padding:25px">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="" id="form1" placeholder="Search">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary" id="search-button">
                     <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <!-- End of search bar -->


            <!-- Service Start -->
           <?php include("includes/services_F.php")?>
            <!-- Service End -->
            
            
            <!-- Feature Start -->
            <?php include("includes/features.php")?>
            <!-- Feature End -->
            
            
            <!-- Team Start -->
            <?php include("includes/team.php")?>
            <!-- Team End -->


            <!-- FAQs Start -->
            <div class="faqs" id="faqs">
                <div class="container-xl" style="max-width:1500px">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>You Might Ask</p>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <img src="img/faqs.jpg" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php $i=0?>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>5</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <a class="btn" href="">Ask more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->

    
            <!-- Testimonial Start -->
            <?php include("includes/testimonial.php")?>
            <!-- Testimonial End -->


            <!-- Blog Start -->
            <!-- <div class="blog">
                <div class="container-xl" style="max-width:1500px">
                    <div class="section-header">
                        <p>Latest From Blog</p>
                        <h2>Stay Updated From Our Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-1.jpg" alt="Blog">
                                <h3>Lorem ipsum dolor</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Flour Cleaning</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>11-Jun-20</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-2.jpg" alt="Blog">
                                <h3>Lorem ipsum dolor</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Glass Cleaning</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>11-Jun-20</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-3.jpg" alt="Blog">
                                <h3>Lorem ipsum dolor</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Carpet Cleaning</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>11-Jun-20</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Blog End -->


            <?php include("includes/footer.php")?>
            
           