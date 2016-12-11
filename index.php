<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 */

get_header(); ?>
<div class="top-container">
	<?php $pageid = get_page_by_title('home'); ?>
	<?php $the_query = new WP_Query('page_id=' . $pageid->ID); ?>

	<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="top-container--image">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<img src="<?php echo $image[0]; ?>"> 
		</div>
		<div class="top-container--text">
			<h2 class="title"> <?php echo the_field("titulo_imagem"); ?> </h2>
			<p> <?php echo the_field("desc_image"); ?>  </p>
		</div>
		<div class="top-container--case">
			<h2 class="title"> <?php echo the_field("sobre_cases"); ?> </h2>
			<div class="cases-column">
				<p> <?php the_content(); ?></p>
			</div>
		</div>
	<?php endwhile;?> <!-- End home page query-->
</div>
<div class="middle-container">
	<div class="middle-container--posts">

		<?php $args = array('posts_per_page' => 3, 'cat' => 'projetos');
		$posts_query = new WP_Query( $args); ?>
			<?php if ($posts_query->have_posts()): ?>

    			<?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
    				<div id="post-<?php echo get_the_ID(); ?>" class="middle-container--posts_image">
	    				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
						<a href="<?php echo the_permalink(); ?>">
							<img src="<?php echo $image[0]; ?>"> 						
						</a>
					</div>
    			<?php endwhile; ?>

			<?php endif; ?>
	   	<?php wp_reset_postdata(); ?>

	</div>

</div>

<?php get_footer(); ?>