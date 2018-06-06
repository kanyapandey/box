<?php
	/*
		Template Name: Index
	*/
	get_header();
	$index_url = home_url( '/index/' );
	$home_url = home_url( '/about/' );
	$services_url = home_url( '/services/' );
	$portfolio_url = home_url( '/portfolio/' );
	$contact_url = home_url( '/contact/' );
	$template_uri = get_template_directory_uri();
?>
<?php
	$args = array (
		'post_type' => 'bk_fashion',
		'orderby' => 'rand',
		'post_per_page' => -1,
		);
	$query = new WP_Query( $args );
?>
<header>
    
    <!-- Preloader -->
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
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.html"><img src="<?php echo $template_uri; ?>/img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">About me</li>

                <li><a href="<?php echo $index_url; ?>">Intro</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="<?php echo $home_url; ?>">About me</a></li>
                <li><a href="<?php echo $services_url; ?>">services</a></li>
                <li><a href="<?php echo $portfolio_url; ?>">portfolio</a></li>
                <li><a href="<?php echo $contact_url; ?>">contact me</a></li>



                <li class="box-label">Follow me</li>

                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->

        <!-- box-intro -->
        <section class="box-intro">
            <div class="table-cell">
                <h1 class="box-headline letters rotate-2">
                    <span class="box-words-wrapper">
                        <b class="is-visible">design.</b>
                        <b>&nbsp;coding.</b>
                        <b>graphic.</b>
                    </span>
                </h1>
                <h5>everything you need to build your personal portfolio</h5>
            </div>

            <div class="mouse">
                <div class="scroll"></div>
            </div>
        </section>
        <!-- end box-intro -->
    </div>

    <!-- portfolio div -->
    <div class="portfolio-div">
        <div class="portfolio">
            <div class="no-padding portfolio_container">
                <!-- single work -->
              <?php $pic1 = new WP_Query(array('post_type' => 'bk_fashion'));
              		while( $pic1 ->have_posts() ) : $pic1->the_post();
              			$style1 = get_field('style1');
              ?>
              	
                <div class="<?= $style1; ?>  fashion logo">
                    <a href="single-project.html" class="portfolio_item">
                    	<?php the_post_thumbnail('small-thumbnail'); ?>
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span><?php the_title(); ?></span>
                                    <em>Fashion / Logo</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                	endwhile;
                ?>
                <!-- end single work -->

               
            </div>
            <!-- end portfolio_container -->
        </div>
        <!-- portfolio -->
    </div>
    <!-- end portfolio div -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->
</header>
<?php
	get_footer();
?>