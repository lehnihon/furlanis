<?php
/**
 * The Default Template for displaying all Easy Property Listings archive/loop posts with WordPress Themes
 *
 * @package EPL
 * @subpackage Templates/Themes/Default
 * @since 1.0
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header(); ?>
<div id="page-details" class="container site-content content epl-archive-default <?php echo esc_attr( epl_get_active_theme_name() ); ?>">
	<div class="row">
		<div class="row">
			<div class="col-sm-3">
				sidebar
			</div>
			<div class="col-sm-9">
				<?php
				if ( have_posts() ) :
				?>
					<div class="loop pad">
						<header class="archive-header entry-header loop-header">
							<h4 class="archive-title loop-title">
								<?php do_action( 'epl_the_archive_title' ); ?>
							</h4>
						</header>

						<div class="entry-content loop-content <?php echo esc_attr( epl_template_class( 'default', 'archive' ) ); ?>">
							<?php do_action( 'epl_property_loop_start' ); ?>
							<?php
							while ( have_posts() ) : // The Loop.
									the_post();
									do_action( 'epl_property_blog' );
								endwhile; // end of one post.
							?>
							<?php do_action( 'epl_property_loop_end' ); ?>
						</div>

						<div class="loop-footer">
							<!-- Previous/Next page navigation -->
							<div class="loop-utility clearfix">
								<?php do_action( 'epl_pagination' ); ?>
							</div>
						</div>
					</div>
					<?php
					else :
						?>
					<div class="hentry">
						<?php do_action( 'epl_property_search_not_found' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();