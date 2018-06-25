<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evelyn
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('l-container'); ?>>
	
	<?php get_template_part( 'template-parts/partials/content', 'header-cover' ); ?>

	<?php // evelyn_post_thumbnail(); ?>

	<div class="entry-content l-container">
		<?php the_content(); ?>
		<section class="row l-container--wide l-grid l-grid__3 l-grid-gutter">
			<?php 

			$file = get_field('document');

			if( $file ): ?>
				<div class="order-md-last col-sm-6 col-lg-4 l-grid--item">
					<h4>Latest E-Bulletin</h4>
					<a class="btn btn__resource btn__raised" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
				</div>
			<?php endif; ?>

			<?php get_sidebar('social'); ?><!-- Footer widgets -->
		</section> <!-- .site-info__resources -->
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer l-container--wide">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'evelyn' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->