<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package topcat-lite
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<br/>
		<?php the_post_thumbnail( 'large-thumbnail' ); ?>
	</header>
	<!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'topcat-lite' ),
			'after'  => '</div>',
		) );
		?>
	</div>
	<!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'topcat-lite' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-## -->
