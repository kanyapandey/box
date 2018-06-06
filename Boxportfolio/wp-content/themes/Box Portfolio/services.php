<?php
	/*
		Template Name: Services
	*/
	get_header();
	$index_url = home_url( '/index/' );
	$home_url = home_url( '/about/' );
	$services_url = home_url( '/services/' );
	$portfolio_url = home_url( '/portfolio/' );
	$contact_url = home_url( '/contact/' );
	$template_uri = get_template_directory_uri();
?>
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
            
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">About me</li>

                <li><a href="<?php echo $index_url; ?>">Intro</a></li>
                <li><a href="<?php echo $home_url; ?>">About me</a></li>
                <li><a href="<?php echo $services_url; ?>">services</a> <i class="ion-ios-circle-filled color"></i></li>
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
    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>services</h1>
        <p><a href="#">Home</a> / Services</p>
    </div>
    <!-- end top bar -->

    <div class="container main-container">
        <div class="clearfix">

            <!-- service-box -->
            <div class="col-md-4 service-box">
                <i class="ion-android-favorite-outline size-50"></i>
                <h3>Responsive Design</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4 service-box">
                <i class="ion-android-options size-50"></i>
                <h3>Easy Customization</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-android-checkmark-circle size-50"></i>
                <h3>Creative Design</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-ios-pulse-strong size-50"></i>
                <h3>user friendly</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-earth size-50"></i>
                <h3>fully customizible</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

            <!-- service-box -->
            <div class="col-md-4  service-box">
                <i class="ion-speedometer size-50"></i>
                <h3>retina ready</h3>
                <div class="h-10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae </p>
            </div>
            <!-- end service-box -->

        </div>
    </div>
<?php
	get_footer();
?>