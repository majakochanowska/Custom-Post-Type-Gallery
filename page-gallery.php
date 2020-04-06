<?php /* Template Name: Galeria */ ?>

<?php get_header(); ?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

<?php query_posts(array(
   'post_type' => 'galeria'
)); ?>
<?php
    while (have_posts()) : the_post(); ?>
<?php the_post_thumbnail(); ?>
<?php endwhile; ?>

</main><!-- #site-content -->

<?php get_footer(); ?>