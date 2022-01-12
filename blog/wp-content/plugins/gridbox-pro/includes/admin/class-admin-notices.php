<?php
/**
 * Gridbox Pro Admin Notices
 *
 * Adds admin notices to the WordPress Dashboard
 *
 * @package Gridbox Pro
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }


/**
 * Admin Notices Class
 */
class Gridbox_Pro_Admin_Notices {

	/**
	 * Setup the Settings Page class
	 *
	 * @return void
	 */
	static function setup() {

		// Add Missing Theme Notice.
		add_action( 'admin_notices', array( __CLASS__, 'activate_license' ) );

		// Add Missing Theme Notice.
		add_action( 'admin_notices', array( __CLASS__, 'expired_license' ) );

		// Dismiss Notices.
		add_action( 'init', array( __CLASS__, 'dismiss_notices' ) );

	}

	/**
	 * Display activate license notice
	 *
	 * @return void
	 */
	static function activate_license() {
		global $pagenow;

		// Get Settings.
		$options = Gridbox_Pro_Settings::instance();

		if ( 'valid' !== $options->get( 'license_status' ) && 'expired' !== $options->get( 'license_status' ) && in_array( $pagenow, array( 'index.php', 'update-core.php', 'plugins.php', 'themes.php' ) ) && ! isset( $_GET['page'] ) && current_theme_supports( 'gridbox-pro' ) && ! get_transient( 'gridbox_pro_activate_license_dismissed' ) && current_user_can( 'edit_theme_options' ) ) : ?>

			<div class="notice notice-info">
				<p>
					<?php printf( __( 'Please enter your license key for the %1$s add-on in order to receive updates and support. <a href="%2$s">Enter License Key</a>', 'gridbox-pro' ),
						GRIDBOX_PRO_NAME,
						admin_url( 'themes.php?page=gridbox-pro' )
					);
					?>
					<a style="float: right" href="<?php echo wp_nonce_url( add_query_arg( array( 'gridbox_pro_action' => 'dismiss_notices', 'gridbox_pro_notice' => 'activate_license' ) ), 'gridbox_pro_dismiss_notice', 'gridbox_pro_dismiss_notice_nonce' ); ?>"><?php _e( 'Dismiss Notice', 'gridbox-pro' ); ?></a>
				</p>
			</div>

		<?php
		endif;

	}

	/**
	 * Display expired license notice
	 *
	 * @return void
	 */
	static function expired_license() {
		global $pagenow;

		// Get Settings.
		$options = Gridbox_Pro_Settings::instance();

		if ( 'expired' === $options->get( 'license_status' ) && in_array( $pagenow, array( 'index.php', 'update-core.php', 'plugins.php', 'themes.php' ) ) && ! isset( $_GET['page'] ) && current_theme_supports( 'gridbox-pro' ) && ! get_transient( 'gridbox_pro_expired_license_dismissed' ) && current_user_can( 'edit_theme_options' ) ) : ?>

			<div class="notice notice-warning">
				<p>
					<?php printf( __( 'Your license for %1$s has expired. Please <a href="%2$s">renew</a> to continue getting updates and support!', 'gridbox-pro' ),
						GRIDBOX_PRO_NAME,
						admin_url( 'themes.php?page=gridbox-pro' )
					);
					?>
					<a style="float: right" href="<?php echo wp_nonce_url( add_query_arg( array( 'gridbox_pro_action' => 'dismiss_notices', 'gridbox_pro_notice' => 'expired_license' ) ), 'gridbox_pro_dismiss_notice', 'gridbox_pro_dismiss_notice_nonce' ); ?>"><?php _e( 'Dismiss Notice', 'gridbox-pro' ); ?></a>
				</p>
			</div>

		<?php
		endif;

	}

	/**
	 * Dismiss admin notices when Dismiss links are clicked
	 *
	 * @return void
	 */
	static function dismiss_notices() {

		// Return early if gridbox_pro_action was not fired.
		if ( ! isset( $_REQUEST['gridbox_pro_action'] ) ) {
			return;
		}

		if ( ! isset( $_GET['gridbox_pro_dismiss_notice_nonce'] ) || ! wp_verify_nonce( $_GET['gridbox_pro_dismiss_notice_nonce'], 'gridbox_pro_dismiss_notice' ) ) {
			wp_die( __( 'Security check failed', 'gridbox-pro' ), __( 'Error', 'gridbox-pro' ), array( 'response' => 403 ) );
		}

		if ( isset( $_GET['gridbox_pro_notice'] ) ) {
			set_transient( 'gridbox_pro_' . $_GET['gridbox_pro_notice'] . '_dismissed', 1, DAY_IN_SECONDS * 60 );
			wp_redirect( remove_query_arg( array( 'gridbox_pro_action', 'gridbox_pro_notice', 'gridbox_pro_dismiss_notice_nonce' ) ) );
			exit;
		}

	}
}

// Run Gridbox Pro Admin Notices Class.
Gridbox_Pro_Admin_Notices::setup();
