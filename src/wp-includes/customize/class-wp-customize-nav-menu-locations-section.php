<?php
/**
 * Customize API: WP_Customize_Nav_Menu_Locations_Section class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.9.0
 */

/**
 * Customize Menu Locations Section Class
 *
 * Custom section for menu locations.
 *
 * @since 4.9.0
 *
 * @see WP_Customize_Section
 */
class WP_Customize_Nav_Menu_Locations_Section extends WP_Customize_Section {
	/**
	 * Type of this section.
	 *
	 * @since 4.9.0
	 * @var string
	 */
	public $type = 'nav_menu_locations';

	/**
	 * Number of menu locations.
	 *
	 * @since 4.9.0
	 * @var int
	 */
	public $num_locations;

	/**
	 * Render a JS template for the nav menu locations section title.
	 *
	 * @return void
	 */
	protected function title_template() {
		?>
		<span class="customize-section-title-heading"><?php _e( 'Menu Locations' ); ?></span>
		<p class="customize-section-title-description">{{ data.titleDescription }}</p>
		<?php
		parent::title_template();
	}

	/**
	 * Get section parameters for JS.
	 *
	 * @since 4.3.0
	 * @return array Exported parameters.
	 */
	public function json() {
		$exported = parent::json();

		$num_locations = $this->num_locations;
		if ( 1 === $num_locations ) {
			$title_description = __( 'Your theme can display menus in %s location.' );
		} else {
			/* translators: %s: number of menu locations */
			$title_description = sprintf( _n( 'Your theme can display menus in %s location.', 'Your theme can display menus in %s locations.', $num_locations ), number_format_i18n( $num_locations ) );
		}

		$exported['titleDescription'] = $title_description;

		return $exported;
	}
}
