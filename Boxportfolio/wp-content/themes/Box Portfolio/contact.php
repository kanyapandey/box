<?php 
	/*
		Template Name: Contact
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
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box-header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">About me</li>

                <li><a href="<?php echo $index_url; ?>">Intro</a></li>
                <li><a href="<?php echo $home_url; ?>">About me</a></li>
                <li><a href="<?php echo $services_url; ?>">services</a></li>
                <li><a href="<?php echo $portfolio_url; ?>">portfolio</a></li>
                <li><a href="<?php echo $contact_url; ?>">contact me</a> <i class="ion-ios-circle-filled color"></i></li>



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
        <h1>contact Me</h1>
        <p><a href="#">Home</a> / Contact Me</p>
    </div>
    <!-- end top bar -->

    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-6">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="name">
                            <span>your name</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="email">
                            <span>your email</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="object">
                            <span>object</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea name="message"></textarea>
                            <span>message</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="btn btn-box">Send</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h3 class="text-uppercase">contact me</h3>
            <h5>Creative & Lorem ipsum dolor sit amet</h5>
            <div class="h-30"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter enim nosmet ipsos nosse non possumus. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. Tecum optime, deinde etiam cum mediocri amico. Et nemo nimium beatus est; Ac ne plura complectar-sunt enim innumerabilia-, bene laudata virtus voluptatis aditus </p>
            <div class="contact-info">
                <p><i class="ion-android-call"></i> 0100 787 3456</p>
                <p><i class="ion-ios-email"></i> box@info.com</p>
            </div>
        </div>


    </div>
<?php
	get_footer();
?>