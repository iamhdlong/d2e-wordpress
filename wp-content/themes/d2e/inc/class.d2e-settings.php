<?php
namespace D2e\Inc;

use D2e\Inc\D2e_theme_core;
/*
Create settings in cms
*/
class D2e_settings extends D2e_theme_core{
	
	protected $options;
	protected $optionGroup = 'd2e_theme_group';
	protected $optionName = 'd2e_theme_data';


	public function __construct( $location, $name, $type ){
		$optionName = $this->optionName;
		$this->options = get_option($this->optionName);
		add_action( 'admin_menu', function(){
					add_submenu_page( 
						'options-general.php',
						 __('Manage theme page'),
						 __('D2E Manage theme'), 
						 'manage_options', 
						 'd2e-manage-theme', 
						 [$this,  'create_page' ]
					);
				});
		add_action( 'admin_init', [$this, 'register_setting']);
		add_action('admin_enqueue_scripts', [$this, 'add_theme_script_adm']);


		add_action('init', function($optionName) {
			//add_filter('pre_update_option'.$optionName , [$this,'before_save_setting']);	
		});

	}

	public function create_page(){
		wp_enqueue_media(); // import thư viện popup upload image
		$optionGroup = $this->optionGroup;
		$options = $this->options; 
		$optionName = $this->optionName;
		$key_value_categories = $this->get_key_value_cates();

		require THEME_PATH."/inc/views/view-settings.php";
	}

	public function register_setting(){
		register_setting( 
			$this->optionGroup,
		 	$this->optionName
		 );
	}

	public function before_save_setting($input){
		if($_POST){
			
				
		}
	}

	public function add_theme_script_adm(){
		wp_enqueue_style( 'bootstrap-css', '//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css');
		wp_enqueue_style( 'style-css', THEME_URI.'/inc/css/style.css' , false, filemtime(THEME_PATH . '/inc/css/style.css'));
		wp_enqueue_script( 'jquery-lib', THEME_URI.'/inc/js/jquery-1.8.3.min.js');
		wp_enqueue_script( 'jquery-ui', THEME_URI.'/inc/js/jquery-ui.js');
		wp_enqueue_script( 'main-js', THEME_URI.'/inc/js/main.js' , false, filemtime(THEME_PATH . '/inc/js/main.js'));
		wp_enqueue_script( 'tab-js', THEME_URI.'/inc/js/tab.js' , false, filemtime(THEME_PATH . '/inc/js/tab.js'));
		wp_enqueue_script( 'slide-js', THEME_URI.'/inc/js/slide.js' , false, filemtime(THEME_PATH . '/inc/js/slide.js'));

	}



}