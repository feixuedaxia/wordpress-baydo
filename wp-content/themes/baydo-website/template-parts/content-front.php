<?php
/**
 * Template part for displaying the front page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Baydo_Website
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
					
<?php the_content(); ?>


</article>

