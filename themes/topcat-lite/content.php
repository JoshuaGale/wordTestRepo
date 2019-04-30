<?php
/**
 * @package topcat-lite
 */
?>
<?php
$post_class = '';
if ( is_sticky() ) {
	$post_class = 'sticky-post';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php topcat_lite_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php the_post_thumbnail( 'small-thumbnail' ); ?>
		<?php endif; ?>
	</header>
	<!-- .entry-header -->
	<div class="entry-content">
		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'topcat-lite' ),
			'after'  => '</div>',
		) );
		?>
	</div>
	<!-- .entry-content -->
	<footer class="entry-footer">
		<?php echo '<a href="' . get_permalink() . '" title="' . __( 'Read More ', 'topcat-lite' ) . get_the_title() . '" >Read More&nbsp;&nbsp;<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-## -->
