
 d2eApp.add_item_slide = function(e, type_name){
 		var e = $(e);
 		var total_images_slide = e.attr('total_images_slide');
        var type_name = type_name ? type_name : 'images_slide';
 		var index = total_images_slide == 0 ? 0 : total_images_slide++ ;
 		var item_slide = `
				<div class="item-slide">
					<img src=" ` + THEME_URI + `/inc/images/default-image.png" width="150" height="100">

					<input type="text"   name="`+option_name+`[`+type_name+`][`+index+`][title]" placeholder="title">
					<input type="text"   name="`+option_name+`[`+type_name+`][`+index+`][description]" placeholder="description">
					<input type="hidden" name="`+option_name+`[`+type_name+`][`+index+`][src]" class="images_slide_value">
					<a class="button btn-item-slide edit-btn-slide" onclick="d2eApp.edit_image_item_slide(this)">Edit</a>
					<a class="button btn-item-slide remove-btn-slide" onclick="d2eApp.remove_item_slide(this)">Remove</a>
				</div>
 		`;
 		// $('.wr-all-slide').append(item_slide);
        e.parent('div').prev($('.wr-all-slide')).append(item_slide);


 		var tmp_total_images_slide = index + 1;
 		e.attr('total_images_slide', tmp_total_images_slide);
 }

 d2eApp.remove_item_slide = function(e){
 	var e = $(e);

 	e.parent('.item-slide').remove();
 }

 d2eApp.edit_image_item_slide = function(e){
 			var e = $(e);
 			var img_preview = e.parent('.item-slide').find('img');
 			var images_slide_value = e.parent('.item-slide').find('.images_slide_value');
            var custom_uploader = wp.media({
                title: 'Custom Image',
                button: {
                    text: 'Upload Image'
                },
                multiple: false  // Set this to true to allow multiple files to be selected
            })
            .on('select', function() {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $(img_preview).attr('src', attachment.url);
                $(images_slide_value).val(attachment.url);
                //console.log(attachment);

            })
            .open();
 }


 $(document).ready(function(){
 	$('.wr-all-slide').sortable();
 	$('.wr-all-slide').disableSelection();
 });
 