<?php
/**
 * The template for displaying case study pages
 *
 * @package WordPress
 * @subpackage Accelerate-theme
 * @since Accelerate-theme 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1>This is a case study</h1>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>