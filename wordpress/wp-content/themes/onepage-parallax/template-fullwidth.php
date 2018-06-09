<?php
/**
 * The template for displaying full width single page.
 * Template Name: Fullwidth Template
 *
 * @package WordPress
 * @subpackage OnePage Parallax
 * @since 0.0.1
 * @version 1.0.0
 */

get_header(); ?>
<div <?php post_class( 'container' ); ?> id="post-<?php the_ID(); ?>">
  <div class="row">
    <div class="col-12">
      <?php
      	/* Start the Loop */
      	while ( have_posts() ) : the_post();

      		get_template_part( 'template-parts/page/content', 'page' );

      	endwhile; // End of the loop.
      	?>
    </div>
  </div>
</div>
