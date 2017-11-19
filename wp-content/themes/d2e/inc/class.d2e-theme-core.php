<?php 
namespace D2e\Inc;
class D2e_theme_core{

	public function get_key_value_cates(){
		$cates = get_categories(['hide_empty'=>false]);
		$options = [];
		if($cates){
			foreach($cates as $key => $cate){
				array_push($options, [
					'key' => $cate->term_id,
					'name' => $cate->name
				]);
			}
		}
		return $options;
		
	}
}