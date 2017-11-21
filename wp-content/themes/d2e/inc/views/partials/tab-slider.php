<?php 
$images_slide = $options['images_slide'] ;
$total_images_slide = count($images_slide);
?>
<div class="bhoechie-tab-content">
        <center> <h1 class="glyphicon glyphicon-picture" style="font-size:2em;color:#55518a"></h1></center>
		<div class="body-page">

			<div class="wr-all-slide">
				<?php if(!empty($images_slide)): 
					foreach($images_slide as $index => $item):
				?>
					<div class="item-slide">
						<img src="<?php echo $item['src']; ?>" width="150" height="100">

						<input type="text"   name="<?php echo $optionName ?>[images_slide][<?php echo $index ?>][title]" value="<?php echo $item['title']; ?>" placeholder="title">
						<input type="text"   name="<?php echo $optionName ?>[images_slide][<?php echo $index ?>][description]" value="<?php echo $item['description']; ?>" placeholder="description">
						<input type="hidden" name="<?php echo $optionName ?>[images_slide][<?php echo $index ?>][src]" class="images_slide_value" value="<?php echo $item['src']; ?>">
						<a class="button btn-item-slide edit-btn-slide" onclick="d2eApp.edit_image_item_slide(this)">Edit</a>
						<a class="button btn-item-slide remove-btn-slide" onclick="d2eApp.remove_item_slide(this)">Remove</a>
					</div>
				<?php 
					endforeach;
				endif; ?>
			</div>

			<div style="text-align: center;margin:5px 0px;"><a href="javascript:;" onclick="d2eApp.add_item_slide(this, 'images_slide')" total_images_slide="<?php echo $total_images_slide; ?>" class="button" id="add-slide-btn">Add</a></div>

    	</div>
</div>