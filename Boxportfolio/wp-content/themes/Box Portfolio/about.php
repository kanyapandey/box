<?php
/*
	Template Name: About
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
                <li><a href="<?php echo $home_url; ?>">About me</a> <i class="ion-ios-circle-filled color"></i></li>
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
    </div>
    
    <!-- Top bar -->
    <div class="top-bar">
        <h1>About Me</h1>
        <p><a href="#">Home</a> / About me</p>
    </div>
    <!-- end Top bar -->
    
    <!-- Main container -->
    <div class="container main-container clearfix"> 
        <div class="col-md-6">
            <img src="http://placehold.it/1200x800" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6">
           <h3 class="uppercase">About Me </h3>
           <h5>Creative & Lorem ipsum dolor sit amet</h5>
           <div class="h-30"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. Tecum optime, deinde etiam cum mediocri amico. Et nemo nimium beatus est; Ac ne plura complectar-sunt enim innumerabilia-, bene laudata virtus voluptatis aditus </p>

            <p>Tum ille: Tu autem cum ipse tantum librorum habeas, quos hic tandem requiris? Esse enim quam vellet iniquus iustus poterat inpune. </p>
            <div class="h-10"></div>
            <ul class="social-ul">
                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>


        </div>
    </div>
<?php
	get_footer();
?>