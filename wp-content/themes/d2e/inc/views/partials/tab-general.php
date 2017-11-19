 <div class="bhoechie-tab-content active">
        <center>
          <h1 class="glyphicon glyphicon-cog no-margin" style="font-size:2em;color:#55518a"></h1>
        </center>

        <div class="body-page same-section">
			<label>Text logo</label>
			<input type="text" size="60" name="<?php echo $optionName ?>[text_logo]" value="<?php echo $options['text_logo'] ?>">
		</div>

		 <div class="body-page same-section">
			<label>Footer left</label>
			<input type="text" size="60" name="<?php echo $optionName ?>[footer_left]" value="<?php echo $options['footer_left'] ?>">
		</div>

		<div class="body-page same-section">
			<label>Footer right</label>
			<input type="text" size="60" name="<?php echo $optionName ?>[footer_right]" value="<?php echo $options['footer_right'] ?>">
		</div>

		<div>
			<label>Special serivce</label>
			<select name="<?php echo $optionName ?>[special_serivce]">
				<option>-- Choose special service --</option>
				<?php 
				foreach($key_value_categories as $cate): 
					if($cate['key'] == $options['special_serivce']){
						$select = 'selected';
					}else{
						$select = '';
					}
				?>

					<option value="<?php echo $cate['key']; ?>" <?php echo $select; ?>><?php echo $cate['name'] ?></option>

				<?php endforeach; ?>
			</select>
		</div>



				

</div>