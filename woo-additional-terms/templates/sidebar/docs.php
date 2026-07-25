<?php
/**
 * The Template for displaying the docs sidebar.
 *
 * @since 1.0.0
 *
 * @package woo-additional-terms
 */

defined( 'ABSPATH' ) || exit;
defined( 'WC_VERSION' ) || exit;

?>
<div class="woo-additional-terms-docs">
	<h2 class="woo-additional-terms-docs-title">
		<?php echo esc_html_x( 'New to Additional Terms?', 'upsell', 'woo-additional-terms' ); ?>
	</h2>
	<p>
		<?php echo esc_html_x( 'Step-by-step setup, a reference for every setting, and fixes for common issues.', 'upsell', 'woo-additional-terms' ); ?>
	</p>
	<p class="woo-additional-terms-docs-cta">
		<a href="<?php echo esc_url( $args['uri'] ); ?>" target="_blank" rel="noopener noreferrer nofollow">
			<?php echo esc_html_x( 'Read the documentation', 'upsell', 'woo-additional-terms' ); ?>
		</a>
	</p>
</div>

<?php
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
