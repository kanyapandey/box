<?php
	/*
		Template Name: Portfolio
	*/
	get_header();
	$index_url = home_url( '/index/' );
	$home_url = home_url( '/about/' );
	$services_url = home_url( '/services/' );
	$portfolio_url = home_url( '/portfolio/' );
	$contact_url = home_url( '/contact/' );
	$template_uri = get_template_directory_uri();
?>
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box-header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.html"><img src="<?php echo $template_uri; ?>/img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
        </header>
        <!-- end box-header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">About me</li>

                <li><a href="<?php echo $index_url; ?>">Intro</a></li>
                <li><a href="<?php echo $home_url; ?>">About me</a></li>
                <li><a href="<?php echo $services_url; ?>">services</a></li>
                <li><a href="<?php echo $portfolio_url; ?>">portfolio</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="<?php echo $contact_url; ?>">contact me</a></li>

                <li class="box-label">Follow me</li>

                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->
    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>portfolio</h1>
        <p><a href="#">Home</a> / Portfolio</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">All</a></li>
                            <li><a href="" data-filter=".photography">Photography</a></li>
                            <li><a href="" data-filter=".logo">Logo</a></li>
                            <li><a href="" data-filter=".graphics">Graphics</a></li>
                            <li><a href="" data-filter=".ads">Advertising</a></li>
                            <li><a href="" data-filter=".fashion">Fashion</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->

                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">
                    <!-- single work -->
                    <div class="col-md-4 col-sm-6  fashion logo">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mockups in seconds</span>
                                        <em>Fashion / Logo</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 ads graphics">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Floating mockups</span>
                                        <em>Ads / Graphics</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 photography">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Photorealistic smartwatch</span>
                                        <em>Photography</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 fashion ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Held by hands</span>
                                        <em>Fashion / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 photography">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Photorealistic smartwatch</span>
                                        <em>Photography</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                </div>
                <!-- end portfolio_container -->
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
<?php
	get_footer();
?>