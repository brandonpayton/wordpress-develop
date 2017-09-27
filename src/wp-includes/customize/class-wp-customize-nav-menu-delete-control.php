<?php
/**
 * Customize API: WP_Customize_Nav_Menu_Delete_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.9.0
 */

/**
 * Customize control to delete a menu.
 *
 * @since 4.9.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Nav_Menu_Delete_Control extends WP_Customize_Control {

	/**
	 * Type of control, used by JS.
	 *
	 * @since 4.9.0
	 * @var string
	 */
	public $type = 'nav_menu_delete';

	/**
	 * No-op since we're using JS template.
	 *
	 * @since 4.9.0
	 */
	protected function render_content() {}

	/**
	 * Render the Underscore template for this control.
	 *
	 * @since 4.9.0
	 */
	protected function content_template() {
		?>
		<div class="menu-delete-item">
			<button type="button" class="button-link button-link-delete">
				<?php _e( 'Delete Menu' ); ?>
			</button>
		</div>
		<?php
	}
}
