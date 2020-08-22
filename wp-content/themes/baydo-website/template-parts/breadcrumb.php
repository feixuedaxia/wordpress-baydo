<?php
/**
 * Template part for displaying the breadcrum in most pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Baydo_Website
 */

?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <h2 class="pull-left"><?php single_post_title(); ?></h2>
</div>
</div>
<!-- /banner -->

<?php if ( is_page(  ) ) { ?>

<!-- breadcrumb-->
<div class="path-way">
    <div class="container"> 
        <div class="breadcrumbs">
            <a href="#" class="pathway"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i> 
            <span><?php echo get_the_title() ?></span>
        </div>
     </div>
</div>
<!-- /breadcrumb-->

<?php } 
else {
	     // none of the page about us, contact or management is in view
	}
 ?>

