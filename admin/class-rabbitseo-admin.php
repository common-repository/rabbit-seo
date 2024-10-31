<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.rabbitseo.com
 * @since      1.0.1
 *
 * @package    Rabbitseo
 * @subpackage Rabbitseo/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Rabbitseo
 * @subpackage Rabbitseo/admin
 * @author     rabbitseo <support@rabbitseo.com>
 */
class Rabbitseo_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.1
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.1
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action('admin_menu', array($this, 'add_plugin_admin_menu'));

	}
	// add new menu
	 public function add_plugin_admin_menu() {
	 	$icon_url = $this->get_svg_icon();
        add_menu_page(
            __('Rabbit SEO Traffic Booster | Make your website discoverable | Marketing & SEO for SMBs', 'rabbitseo'),
            __('Rabbit SEO', 'rabbitseo'),
            'manage_options',
            $this->plugin_name,
            array($this, 'display_plugin_admin_page'),
            $icon_url,
            6
        );
    }
    private function get_svg_icon() {
        return 'data:image/svg+xml;base64,' . base64_encode('<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="69.333" height="93.333" viewBox="0 0 52 70"><path d="M6.5 3.1C5.1 5.2 6 18.8 8 26.5c2.4 9.4 2 12-2.1 16-2.8 2.6-3.1 3.3-2.7 7.7.9 8.6 9.4 14.8 21.6 15.6C31 66.2 40 64 40 62c0-.4.8-1 1.8-1.2 1.1-.3 3.1-2.1 4.5-4 4.3-5.5 3.6-11.8-1.7-16.7-3.2-3-3.2-4-.5-13.9 2.5-8.7 3.1-21.4 1.2-23.3-2.6-2.6-10.7 8.5-12.9 17.6-.4 1.6-1.3 4.3-2.1 5.8-1.2 2.3-2 2.8-4.6 2.5-3-.3-3.4-.8-5.3-6.6C15.7 8.3 9-1 6.5 3.1zm24.2 44.5c.9 2.5-2.3 8.4-4.7 8.4-2.1 0-6.6-7.3-5.5-9 1.1-1.7 9.5-1.2 10.2.6z" fill="#4880af"/></svg>');
    }

    public function display_plugin_admin_page() {
        include_once 'partials/rabbitseo-admin-display.php';
    }
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.1
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rabbitseo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rabbitseo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rabbitseo-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.1
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rabbitseo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rabbitseo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rabbitseo-admin.js', array( 'jquery' ), $this->version, false );

	}

}
