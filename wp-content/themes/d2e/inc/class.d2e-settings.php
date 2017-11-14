<?php
/*
Create settings in cms
*/
class D2E_settings{
	
	protected $options;
	protected $optionGroup = 'd2e_theme_group';
	protected $optionName = 'd2e_theme_data';

	public function __construct( $location, $name, $type ){

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
	}

	public function create_page(){
		$optionGroup = $this->optionGroup;
		$options = $this->options; 
		$optionName = $this->optionName;
		require THEME_PATH."/inc/views/view-settings.php";
	}

	public function register_setting(){
		register_setting( 
			$this->optionGroup,
		 	$this->optionName
		 	//$args = array 
		 );
	}

	public function add_theme_script_adm(){
		wp_enqueue_style( 'mystyle', THEME_URI.'/inc/css/style.css' );
	}

}