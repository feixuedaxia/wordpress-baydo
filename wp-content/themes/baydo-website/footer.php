<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baydo_Website
 */

?>

	

<?php wp_footer(); ?>
<div class="footer" style="color:#FBF7F7">

	<div class="container">
		<div class="contact col-md-6 col-sm-3">
				<h4>Contact us</h4>
				<p><b>Baydo Development Corporation Ltd.</b></p>
				<p><span class="glyphicon glyphicon-map-marker"></span> 36-102 Cope Crescent, Saskatoon, SK S7T 0X2</p>
				<p><span class="glyphicon glyphicon-envelope"></span> baydo@baydo.ca</p>
				<p><span class="glyphicon glyphicon-earphone"></span> 306-974-1727</p>
		</div>
		<div class="row">        
			<div class="col-md-6 col-sm-3">
				<h4>Follow us</h4>
				<div class="social-media">
					<a href="https://www.facebook.com/BaydoDevelopmentCorporation" target="_blank"><i class="fa fa-facebook-square"></i></a>
					<a href="https://twitter.com/baydocorp" target="_blank"><i class="fa fa-twitter-square"></i></a>
					<a href="https://instagram.com/baydocorp/" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="https://www.linkedin.com/company/baydo-development-corporation" target="_blank"><i class="fa fa-linkedin-square"></i></a>
				</div>
			</div>
			
		</div>

	</div>
	<style type="text/css">
	.footer {
		background:url(<?php bloginfo('template_directory'); ?>/images/public/bg.jpg) #145EA8;
  	  /*position: fixed;*/
	  /*left: 0;*/
	 /* bottom: 0;*/
	  /*width: 100%;*/
	}

	.footer .contact p{
		margin-bottom:5px;
		font-size:14px;
		}

	</style>

	<p class="copyright text-center">Copyright 2018 Baydo Development Corporation Ltd.</p>

</div>


      

<script src="<?php bloginfo('template_directory'); ?>/assets/boiler_js/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/boiler_js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='https://www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-34668824-1','auto');ga('send','pageview');
</script>
</body>
</html>

</body>
</html>
