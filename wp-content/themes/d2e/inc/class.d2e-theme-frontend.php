<?php 
namespace D2e\Inc;

class D2e_theme_frontend extends D2e_theme_core{

	public function __construct(){

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
		if(get_option( 'd2e_theme_data')){
			$options = get_option('d2e_theme_data');
		  return $options[$option];
		}
	}
	

	public function get_slider(){
		if($this->get_options('images_slide')){
			$images_slide = $this->get_options('images_slide');
			$first = '
				<div id="carousel">
            		<div id="owl-demo" class="owl-carousel owl-theme">
			';

			$last = '
					</div>
				</div>
			';
			$content = '';
			foreach ($images_slide as $key => $item) {
				$content .= sprintf('
						<div class="item">
		                  <img src="%s" alt="">      
		                  <div class="carousel-text">
		                     <div class="line">
		                        <div class="s-12 l-9">
		                           <h2>%s</h2>
		                        </div>
		                        <div class="s-12 l-9">
		                           <p>%s</p>
		                        </div>
		                     </div>
		                  </div>
		               </div>
					', $item['src'], $item['title'], $item['description']);
			}
			echo $res = $first . $content . $last ;
			//return $res;
		}else{
			return '';
		}
	}

	public function get_special_services(){
			$cat_id = $this->get_options('special_serivce');
			
			$args_services = array(
				'cat'              => $cat_id,
				'post_type' => array(
					'post'
				),
				'post_status' => array(
					'publish',
				),
				'order'               => 'DESC',
				'orderby'             => 'date',
				'posts_per_page'         => 4,
				
		
			);
		
		$query = new \WP_Query( $args_services );
		$first = "<div class='margin'>";
		$last = "</div>";
		$html_serive = '';
		if($query->have_posts()){
			while ($query->have_posts()) {
			$query->the_post();
			$thum_url=wp_get_attachment_url( get_post_thumbnail_id(get_the_ID() ) );

			$html_serive .= sprintf('
				<div class="s-12 m-6 l-3 margin-bottom">
                     <img src="%s" style="width:139px;margin: 0 auto;" />
                     <h3>%s</h3>
                     <p> %s </p>
                  </div>
				',$thum_url,get_the_title(),get_the_content());
			}	
			echo $first . $html_serive . $last;
		}else{
			return '';
		}
	}

	public function get_gallery(){
		if($this->get_options('images_gallery')){
			$images_gallery = $this->get_options('images_gallery');
			$first = '
				<div class="margin">
			';

			$last = '
				</div>
			';
			$content = '';
			foreach ($images_gallery as $key => $item) {
				$content .= sprintf('
		                  <div class="s-12 m-6 l-3">
		                     <img src="%s" alt="%s">
		                     <p class="subtitile">%s
                    		 </p>
		                  </div>
					', $item['src'], $item['title'], $item['description']);
			}
			echo $res = $first . $content . $last ;
			//return $res;
		}else{
			return '';
		}
	}



}
