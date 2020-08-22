<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baydo_Website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Place favicon.ico in the root directory -->
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'stylesheet_directory' )  ?>/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/manifest.json">
    <link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="<?php bloginfo( 'stylesheet_directory' ) ?>/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon end -->
	


    <!-- bootstrap  -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/bootstrap/css/buttons.css" rel="stylesheet" type="text/css" />
    <script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/js/jquery-1.9.1.min.js"></script>	
    <script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/bootstrap/js/bootstrap.js"></script>
    <!-- moved from boiler  -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/boiler_css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/boiler_css/main.css">
    <script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/boiler_js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Custom Css  -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/menu.css">
    <!-- Owl stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/owl-carousel/owl.transitions.css">
    <script src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/owl-carousel/owl.carousel.min.js"></script>
    <!-- Owl stylesheet -->
    <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
    <script>var __adobewebfontsappname__="dreamweaver"</script>
    <script src="https://use.edgefonts.net/acme:n4:default;atomic-age:n4:default;aguafina-script:n4:default;andika:n4:default;montserrat:n4:default;actor:n4:default.js" type="text/javascript"></script>
    <!-- For properties and latest -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/css/property.css">

    <?php wp_head(); ?>
    <?php 
    	function hook_css() {
    ?>
        <style>
            .wp_head_example {
                background-color : #f1f1f1;
            }
        </style>
    <?php
}
add_action('wp_head', 'hook_css');
     ?>

    <script>
    	$(document).ready(function(){
    		$("#menu .a").click(function(){
    			$(this).addClass("active");
    			$("#home").removeClass("active");
    		}); 	
    	});
    </script>
    <!-- for dropdown menu -->
    <script type="text/javascript">
    	$(function(){

    		if ($(document).width()< 768) {
    			$('#menu > li').on('mouseover', function(e){
    				$(this).find("ul").show();
    				$(this).find('> a').addClass('active');
    			}).on('mouseout', function(e){
    				$(this).find('> a').removeClass('active');
    			});

    		}
    		else {

    			$('#menu > li').on('mouseover', function(e){
    				$(this).find("ul:first").show();
    				$(this).find('> a').addClass('active');
    			}).on('mouseout', function(e){
    				$(this).find("ul:first").hide();
    				$(this).find('> a').removeClass('active');
    			});
    		}

    	});
    </script>
    <!-- /for dropdown menu -->
    <!-- for nav scroll to top fixed -->
    <script>
    	$(document).ready(function(){
    		$(window).bind('scroll', function() {
    			var navHeight = $( '#header' ).height();
    			if ($(window).scrollTop() > navHeight) {
    				$('#nav').addClass('navbar-fixed-top');
    			}
    			else {
    				$('#nav').removeClass('navbar-fixed-top');
    			}
    		});
    	});
    </script>
    <!-- /for nav scroll to top fixed -->
    <!-- Search Box -->
    <script>
    	(function() {
    		var cx = '009391291253175397918:aqbzgfxnijm';
    		var gcse = document.createElement('script');
    		gcse.type = 'text/javascript';
    		gcse.async = true;
    		gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    		var s = document.getElementsByTagName('script')[0];
    		s.parentNode.insertBefore(gcse, s);
    	})();
    </script>

    <!-- Search Box -->
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'baydo-website' ); ?></a>

		<header id="masthead" class="site-header">

			<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KS6F4NX"
				height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
				<!-- End Google Tag Manager (noscript) -->

				<!-- Header Starts -->
				<div class="container"> 
					<div class="header" id="header">
						<div class="row">
							<div class="col-md-3">
								<a href="index.php" class="logo"><img src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/logos/logo2.png" alt="Realestate"></a>
							</div>
							<div class="col-md-5 center-block">
								<form action="maincontent/search.php" method="GET">
									<div class="input-group input-group-lg" style="margin-top: 15px;">
										<input type="text" class="form-control" name="as_q"  placeholder="Search for...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div><!-- /input-group --> 
								</form>
							</div>
							<div class="col-md-4">
								<ul class="nav nav-pills pull-right" id="top_menu"  style="margin-top: 8px;">
									<li role="presentation" class="dropdown" id="portfolio"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Portfolio<i class="fa fa-caret-down"></i></a>
										<ul class="dropdown-menu" role="menu">	
											<li id="stone_garden"><a href="maincontent/our_projects/stone_garden.php">Stonegarden</a></li>                
										</ul>
									</li>
									<li role="presentation" class="dropdown" id="baydo_group"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Baydo Group<i class="fa fa-caret-down"></i></a>
										<ul class="dropdown-menu" role="menu">	
											<li id="baydo_development"><a href="maincontent/baydo_group/baydo_development.php" target="_blank">Baydo Developments</a></li>
											<li id="baydo_construction"><a href="maincontent/baydo_group/baydo_construction.php" target="_blank">Baydo Construction</a></li>
											<li id="rite_choice_construction"><a href="maincontent/baydo_group/rite_choice_construction.php" target="_blank">Rite Choice Construction</a></li>                 
										</ul>
									</li>
									<!--				  <li><a href="http://www.baydo.ca:2095/" target="_blank">Webmail</a></li>-->
								</ul>
							</div>


						</div>
					</div> 
				</div>


				<!-- nav Starts -->
				<div class="navbar-wrapper">
					<div class="navbar-inverse" role="navigation" id="nav">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> 
									<span class="sr-only">Toggle navigation</span> 
									<span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
								</button>
							</div>
							<div class="navbar-top">
								<div class="navbar-collapse  collapse ">

									<?php
									wp_nav_menu(
										array(
											'theme_location'    => 'Primary',
											'menu_id'           => "menu",
											'menu_class'        => 'nav navbar-nav navbar-right',
											'container'         => "ul", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    										'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                                            'walker'            => "",
                                            'before'            => "",
											
										)
									);
									?>

								</div>
							</div>
							<!-- #Nav Ends --> 

						</div>
					</div>
				</div>
				<!--/nav end --> 
				<!-- Header End -->

			</header><!-- #masthead -->
