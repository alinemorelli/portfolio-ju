<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 */

get_header(); 
global $thumb_url;
$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
$thumb_url = wp_get_attachment_url( $thumbnail_id );
?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="top-container">


	<img src="<?php echo $thumb_url; ?>">
	</div>
	<div class="middle-container">
		<?php echo the_content(); ?>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>