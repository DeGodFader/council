<?php include("includes/header2.php")?>

    <body>
        <div class="container-fluid">
           <!-- Header Start -->
           <div class="header">
                <div class="container-fluid">
                    <?php include("includes/navbar.php")?>
                </div>
            </div>
            <!-- Header End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Our Projects</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Our Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container-xl" style="max-width:1500px">
                    <div class="section-header">
                        <p>Our Project</p>
                        <h2>Visit Our Running Project</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".completed">Completed</li>
                                <li data-filter=".ongoing">Ongoing</li>
                                <li data-filter=".upcoming">Upcoming</li>
                            </ul>
                        </div>
                    </div>

                   <?php if(!isset($_GET['Com'])){?>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item completed">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-1.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-1.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item upcoming">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-3.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-3.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item completed">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-1.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-1.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item upcoming">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-3.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-3.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item completed">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-1.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-1.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item upcoming">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-3.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-3.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item completed">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-1.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-1.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item upcoming">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-3.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-3.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <?php }else{?>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item ongoing">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/portfolio-2.jpg" alt="Portfolio Image">
                                    <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="#">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Start -->


            <!-- Footer Start -->
           <?php include("includes/footer.php")?>