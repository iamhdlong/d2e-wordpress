<?php 

class D2E_theme {
	

	public function __construct(){
		add_action( 'init', [$this,'init'] );
		$themeSettingsObj = new D2E_settings();
	}	

	public function init(){
		add_action('wp_enqueue_scripts', [$this,'add_theme_script_web']);
		$this->add_menus();
		
	}

	public function add_theme_script_web(){
		wp_enqueue_style('component', THEME_URI.'/assets/css/components.css');
		wp_enqueue_style('responsee', THEME_URI.'/assets/css/responsee.css');
		wp_enqueue_style('template-style', THEME_URI.'/assets/css/template-style.css');
		wp_enqueue_style('carousel-style', THEME_URI.'/assets/owl-carousel/owl.carousel.css');
		wp_enqueue_style('carousel-theme-style', THEME_URI.'/assets/owl-carousel/owl.theme.css');


		wp_enqueue_script('jquery-lib', THEME_URI.'/assets/js/jquery-1.8.3.min.js');
		wp_enqueue_script('jquery-ui', THEME_URI.'/assets/js/jquery-ui.min.js');
		wp_enqueue_script('modernizr', THEME_URI.'/assets/js/modernizr.js');
		wp_enqueue_script('responsee', THEME_URI.'/assets/js/responsee.js');
		wp_enqueue_script('carousel', THEME_URI.'/assets/owl-carousel/owl.carousel.js');
	}

	public function add_menus(){
		add_theme_support( 'menus' );
		register_nav_menus( array(
			'top-left-menu' => __( 'Top Left Menu' ),
			'top-right-menu' => __('Top Right Menu')
		));
	}

	

	public function get_left_menu(){
			wp_nav_menu( array(
			'theme_location'  => 'top-left-menu',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'top-nav s-12 l-5',
			'container_id'    => '',
			'menu_class'      => 'right top-ul chevron'
		));
		
	}

	public function get_right_menu(){
			wp_nav_menu( array(
			'theme_location'  => 'top-right-menu',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'top-nav s-12 l-5',
			'container_id'    => '',
			'menu_class'      => 'top-ul chevron'
		));
		
	}

	public function get_options($option=''){
		if( get_option( 'd2e_theme_data')){
			$options = get_option( 'd2e_theme_data');
		  return $options[$option];
		}
	}

	
}