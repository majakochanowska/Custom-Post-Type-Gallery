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

<div class="custom-gallery-content">

<div id="lightbox">
	<img src="" id="light-img">
</div>
<?php
    while (have_posts()) : the_post(); ?>

    <div class="custom-gallery-item">
        <?php the_post_thumbnail( 'custom-gallery-size', array( 'class' => 'custom-image')); ?>
    </div>
<?php endwhile; ?>

</div><!-- .gallery-content -->

</main><!-- #site-content -->

<?php get_footer(); ?>