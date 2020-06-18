<?php

namespace CasaLever\Admin;

use Symfony\Component\Yaml\Yaml;
use CasaLever\Admin\WooCommerce\Fields\Supplier;
use CasaLever\Admin\WooCommerce\Fields\FieldManager;

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://doedejaarsma.nl/
 * @since      1.0.0
 * @version    1.0.0
 *
 * @package    CasaLever
 * @subpackage CasaLever/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    CasaLever
 * @subpackage CasaLever/admin
 * @author     Doede Jaarsma communicatie <support@doedejaarsma.nl>
 */
class CasaLever_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;


		FieldManager::register(Supplier::class);
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in CasaLever_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The CasaLever_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/casa-lever-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in CasaLever_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The CasaLever_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/casa-lever-admin.js', array( 'jquery' ), $this->version, false );
	}

	public function createUploadsDir() {
		$upload_dir = WP_CONTENT_DIR . '/uploads';

		$dir = $upload_dir . '/' . 'casalever-uploads';


		if (!file_exists($dir)) {
			wp_mkdir_p($dir);
		}
	}

	public function handle_new_supplier()
	{
		if (!isset($_POST['name'])) {
			return;
		}

		$name = $_POST['name'];
		$upload_dir = WP_CONTENT_DIR . '/uploads';

		$file = $upload_dir . '/casalever-uploads/supplier.yaml';

		try {
			$data = Yaml::parseFile($file);
		} catch (\Exception $e) {
			return;
		}

		$data['autofill'][sanitize_title($name)] = $name;

		$ymlData = Yaml::dump($data);
		file_put_contents($file, $ymlData);

		wp_send_json_success([
			'options' => $data,
			'new' => [
				'key' => sanitize_title($name),
				'val' => $name,
			],
		]);
	}
}
