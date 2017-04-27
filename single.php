<?php
/**
 * The single template file
 *
 * This is the post template file in a WordPress theme
 *
 */
get_header(); ?>

<article class="container single">

    <?php if (have_posts()):
        while ( have_posts() ) : the_post(); ?>
            <div class="featured-image">
                <img src="<?php echo the_field("imagem_topo"); ?>" alt="" />
                <!--<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">-->
                <h1 class="project-title"><?php the_title(); ?></h1>
            </div>
            <div class="content">
                <h2 class="project-about">Sobre o <span>Projeto</span></h2>
                <div class="project-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile;
    endif; ?>

<?php get_footer(); ?>