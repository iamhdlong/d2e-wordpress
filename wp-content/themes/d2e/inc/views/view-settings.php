<script type="text/javascript">
	var THEME_URI = '<?php echo THEME_URI ?>';
	var option_name = '<?php echo $optionName ?>';
</script>

<div class="wr-settings-page">
<div class="top-page same-section">
	<img src="<?php echo THEME_URI ?>/inc/images/d2e-bg.png" style="width: 87%;">	
</div>
	

<form name="post" action="options.php" method="post" autocomplete="off">
	<?php settings_fields($optionGroup); ?>
	<div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-cog"></h4><br/>General
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-picture"></h4><br/>Slider
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-picture"></h4><br/>Gallery
                </a>
               
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
               		<?php require THEME_PATH."/inc/views/partials/tab-general.php" ?>
                	<?php require THEME_PATH."/inc/views/partials/tab-slider.php" ?>
                	<?php require THEME_PATH."/inc/views/partials/tab-gallery.php" ?>               
            </div>
        </div>

  </div>

<div class="wr-btn-submit"><button type="submit" class="button button-primary">Submit</button></div>

</form>
  
	
</div>