<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Baydo_Website
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="spacer">
		<div class="container">
			<div class="row">
				<div class="col-lg-11  col-lg-offset-1">
					
					<?php
					the_content();

					
					?>
				</div>
				
			</div>
		</div>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->
