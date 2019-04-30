<?php
/**
 * Created by PhpStorm.
 * User: Dejan Markovic
 * Date: 2015-09-15
 * Time: 9:30 AM
 *  Template Name: Left Sidebar
 */

get_header(); ?>
<?php get_sidebar(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
		</main>
		<!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>