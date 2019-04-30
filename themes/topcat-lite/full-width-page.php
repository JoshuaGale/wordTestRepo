<?php
/**
 * Created by PhpStorm.
 * User: Dejan Markovic
 * Date: 2015-09-15
 * Time: 9:30 AM
 *  Template Name: Full Width
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		</main>
		<!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>