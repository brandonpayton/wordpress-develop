<?php
/**
 * Customize API: WP_Customize_Nav_Menu_Name_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.9.0
 */

/**
 * Customize control to represent the name field for a given menu.
 *
 * @since 4.9.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_New_Menu_Submit_Control extends WP_Customize_Control {

	/**
	 * Type of control, used by JS.
	 *
	 * @since 4.9.0
	 * @var string
	 */
	public $type = 'new_menu_submit';

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
		<p id="customize-new-menu-submit-description"><?php _e( 'Click "next" to start adding links to your new menu.' ); ?></p>
		<button id="customize-new-menu-submit" type="button" class="button" aria-describedby="customize-new-menu-submit-description"><?php _e( 'Next' ); ?></button>
		<?php
	}
}
