
<div class="wr-settings-page">

	<div class="top-page same-section">
		<img src="<?php echo THEME_URI ?>/inc/images/d2e-bg.png" style="width: 90%;">	
	</div>
	
	<div class="body-page same-section">
		<form name="post" action="options.php" method="post" autocomplete="off">
	    <?php settings_fields($optionGroup); ?>

		<label>Text logo</label>
		<input type="text" name="<?php echo $optionName ?>[text_logo]" value="<?php echo $options['text_logo'] ?>">
		<button type="submit">Submit</button>
	</div>
	
</div>