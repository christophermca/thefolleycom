<?php

/*-----------------------------------------------------------------------------------

	Add image upload metaboxes to post/page items

-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/*	Define Metabox Fields
/*-----------------------------------------------------------------------------------*/

$prefix = 'tz_';

/* Post Metabox --------------------------*/

$meta_box_post = array(
	'id' => 'tz-meta-box',
	'title' => __('Custom Background Settings', 'framework'),
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
	    array(
    			'name' =>  __('Custom Background Image', 'framework'),
    			'desc' => __('Upload a custom background image for this post. Once uploaded, click "Insert to Post".', 'framework'),
    			'id' => $prefix . 'background_image',
    			"type" => "text",
    			'std' => ''
    		),
    	array(
    			'name' => '',
    			'desc' => '',
    			'id' => $prefix . 'background_image_button',
    			'type' => 'button',
    			'std' => 'Browse'
    		),
    	array(
    	        'name' => __('Custom Background Repeat', 'framework'),
    	        'desc' => __('Select a custom background repeat for the uploaded image.', 'framework'),
    	        'id' => $prefix . 'background_repeat',
    	        'type' => 'select',
    	        'std' => '',
    	        'options' => array(__('No Repeat', 'framework'), __('Repeat', 'framework'), __('Repeat Horizontally', 'framework'), __('Repeat Vertically', 'framework')),
    	),
    	array(
    	        'name' => __('Custom Background Position', 'framework'),
    	        'desc' => __('Select a custom background position for the uploaded image.', 'framework'),
    	        'id' => $prefix . 'background_position',
    	        'type' => 'select',
    	        'std' => '',
    	        'options' => array(__('Left', 'framework'), __('Right', 'framework'), __('Centered', 'framework'), __('Full Screen', 'framework') )
    	),
        array(
                'name' => __('Custom Background Color', 'framework'),
                'desc' => __('Select a custom background color for the uploaded image.', 'framework'),
                'id' => $prefix . 'background_color',
                'type' => 'color',
                'std' => ''
        )
	)
);

$meta_box_image = array(
	'id' => 'tz-meta-box-image',
	'title' => __('Image Settings', 'framework'),
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array( "name" => '',
				"desc" => '',
				"id" => $prefix . "post_upload_images",
				"type" => 'button',
				'std' => 'Upload Images'
			),
		array( "name" => '',
				"desc" => '',
				"id" => $prefix . "image_ids",
				"type" => 'hidden',
				'std' => ''
		)
    )
);

$meta_box_quote = array(
	'id' => 'tz-meta-box-quote',
	'title' =>  __('Quote Settings', 'framework'),
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array( "name" => __('The Quote','framework'),
				"desc" => __('Write your quote in this field.','framework'),
				"id" => $prefix."quote",
				"type" => "textarea",
				"std" => ''
			),
	),
	
	
);

$meta_box_link = array(
	'id' => 'tz-meta-box-link',
	'title' =>  __('Link Settings', 'framework'),
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array( "name" => __('The URL','framework'),
				"desc" => __('Insert the URL you wish to link to.','framework'),
				"id" => $prefix."link_url",
				"type" => "text",
				"std" => ''
			),
	),
	
);

$meta_box_audio = array(
	'id' => 'tz-meta-box-audio',
	'title' =>  __('Audio Settings', 'framework'),
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array( "name" => __('MP3 File URL','framework'),
				"desc" => __('The URL to the .mp3 audio file','framework'),
				"id" => $prefix."audio_mp3",
				"type" => "text",
				"std" => ''
			),
		array( "name" => __('OGA File URL','framework'),
				"desc" => __('The URL to the .oga, .ogg audio file','framework'),
				"id" => $prefix."audio_ogg",
				"type" => "text",
				"std" => ''
			),
		array( 
	        "name" => __('Audio Poster Image', 'framework'),
	        "desc" => __('If you would like a poster image for the audio', 'framework'),
	        "id" => $prefix . "audio_poster",
	        "type" => "text",
	        "std" => ''
	        ),
	    array( 
	        "name" => __('Poster Image Height', 'framework'),
	        "desc" => __('If you are including a poster image, please indicate the height of the image.', 'framework'),
	        "id" => $prefix . "poster_height",
	        "type" => "text",
	        "std" => ''
	        )
	),
	
	
);

$meta_box_video = array(
	'id' => 'tz-meta-box-video',
	'title' =>  __('Video Settings', 'framework'),
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array( "name" => __('Video Height','framework'),
				"desc" => __('The video height (e.g. 500).','framework'),
				"id" => $prefix."video_height",
				"type" => "text",
				"std" => ''
			),
		array( "name" => __('M4V File URL','framework'),
				"desc" => __('The URL to the .m4v video file','framework'),
				"id" => $prefix."video_m4v",
				"type" => "text",
				"std" => ''
			),
		array( "name" => __('OGV File URL','framework'),
				"desc" => __('The URL to the .ogv video file','framework'),
				"id" => $prefix."video_ogv",
				"type" => "text",
				"std" => ''
			),
		array( "name" => __('Poster Image','framework'),
				"desc" => __('The preivew image.','framework'),
				"id" => $prefix."video_poster",
				"type" => "text",
				"std" => ''
			),
		array( "name" => __('Embeded Code','framework'),
				"desc" => __('If you\'re not using self hosted video then you can include embeded code here. Best viewed at 600px wide.','framework'),
				"id" => $prefix."video_embed",
				"type" => "textarea",
				"std" => ''
			),
	)
	
);


/* Page Metabox --------------------------*/

$meta_box_page = array(
	'id' => 'tz-meta-box-page',
	'title' => 'Page Settings',
	'page' => 'page',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
    	array(
    			'name' =>  __('Custom Background Image', 'framework'),
    			'desc' => __('Upload a custom background image for this page. Once uploaded, click "Insert to Post".', 'framework'),
    			'id' => $prefix . 'background_image',
    			"type" => "text",
    			'std' => ''
    		),
    	array(
    			'name' => '',
    			'desc' => '',
    			'id' => $prefix . 'background_image_button',
    			'type' => 'button',
    			'std' => 'Browse'
    	),
    	array(
    	        'name' => __('Custom Background Repeat', 'framework'),
    	        'desc' => __('Select a custom background repeat for the uploaded image.', 'framework'),
    	        'id' => $prefix . 'background_repeat',
    	        'type' => 'select',
    	        'std' => '',
    	        'options' => array(__('No Repeat', 'framework'), __('Repeat', 'framework'), __('Repeat Horizontally', 'framework'), __('Repeat Vertically', 'framework')),
    	),
    	array(
    	        'name' => __('Custom Background Position', 'framework'),
    	        'desc' => __('Select a custom background position for the uploaded image.', 'framework'),
    	        'id' => $prefix . 'background_position',
    	        'type' => 'select',
    	        'std' => '',
    	        'options' => array(__('Left', 'framework'), __('Right', 'framework'), __('Centered', 'framework'), __('Full Screen', 'framework') )
    	),
        array(
                'name' => __('Custom Background Color', 'framework'),
                'desc' => __('Select a custom background color for the uploaded image.', 'framework'),
                'id' => $prefix . 'background_color',
                'type' => 'color',
                'std' => ''
        )
    	
	)
);

add_action('admin_menu', 'tz_add_box');


/*-----------------------------------------------------------------------------------*/
/*	Add metabox to edit page
/*-----------------------------------------------------------------------------------*/
 
function tz_add_box() {
	global $meta_box_post, $meta_box_image, $meta_box_quote, $meta_box_link, $meta_box_audio, $meta_box_video, $meta_box_page;
 
	add_meta_box($meta_box_post['id'], $meta_box_post['title'], 'tz_show_box', $meta_box_post['page'], $meta_box_post['context'], $meta_box_post['priority']);
	add_meta_box($meta_box_image['id'], $meta_box_image['title'], 'tz_show_box_image', $meta_box_image['page'], $meta_box_image['context'], $meta_box_image['priority']);
	add_meta_box($meta_box_quote['id'], $meta_box_quote['title'], 'tz_show_box_quote', $meta_box_quote['page'], $meta_box_quote['context'], $meta_box_quote['priority']);
	add_meta_box($meta_box_link['id'], $meta_box_link['title'], 'tz_show_box_link', $meta_box_link['page'], $meta_box_link['context'], $meta_box_link['priority']);
	add_meta_box($meta_box_audio['id'], $meta_box_audio['title'], 'tz_show_box_audio', $meta_box_audio['page'], $meta_box_audio['context'], $meta_box_audio['priority']);
	add_meta_box($meta_box_video['id'], $meta_box_video['title'], 'tz_show_box_video', $meta_box_video['page'], $meta_box_video['context'], $meta_box_video['priority']);

	add_meta_box($meta_box_page['id'], $meta_box_page['title'], 'tz_show_box_page', $meta_box_page['page'], $meta_box_page['context'], $meta_box_page['priority']);
}


/*-----------------------------------------------------------------------------------*/
/*	Callback function to show fields in meta box
/*-----------------------------------------------------------------------------------*/

function tz_show_box() {
	global $meta_box_post, $post;

	$wp_version = get_bloginfo('version');
 	
	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_post['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
 
			//If Button	
			case 'button':

				if( version_compare($wp_version, '3.4.2', '>') ) {
			?> 
				<script>
				jQuery(function($) {
					var frame;

					$('#<?php echo $field['id']; ?>').on('click', function(e) {
						e.preventDefault();

						// Set options for 1st frame render
						var options = {
							state: 'insert',
							frame: 'post'
						};

						frame = wp.media(options).open();
						
						// Tweak views
						frame.menu.get('view').unset('gallery');
						frame.menu.get('view').unset('featured-image');
												
						frame.toolbar.get('view').set({
							insert: {
								style: 'primary',
								text: '<?php _e("Insert", "zilla"); ?>',

								click: function() {
									var models = frame.state().get('selection'),
										url = models.first().attributes.url
										field = '<?php echo $field['id']; ?>';
										field = field.replace('_button', '');

									$('#'+field).val( url ); 

									frame.close();
								}
							}
						});
						

					});
					
				});
				</script>
			<?php
				} // if version compare
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;

			//If Select	
			case 'select':
			
				echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			
				echo'<select name="'.$field['id'].'">';
			
				foreach ($field['options'] as $option) {
					
					echo'<option';
					if ($meta == $option ) { 
						echo ' selected="selected"'; 
					}
					echo'>'. $option .'</option>';
				
				} 
				
				echo'</select>';
			
			break;

            case 'color':
            
                echo '<tr>',
    			'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
    			'<td>';
			
                echo '<div id="' . $field['id'] . '_picker" class="colorSelector"><div></div></div>';
    			echo '<input style="width:75px; margin-left: 5px;" class="tz-color" name="'. $field['id'] .'" id="'. $field['id'] .'" type="text" value="'. $meta .'" />';
?>   			
    			<script type="text/javascript" language="javascript">
            		jQuery(document).ready(function(){
            			//Color Picker
    				    jQuery('#<?php echo $field['id']; ?>_picker').children('div').css('backgroundColor', '<?php echo $meta; ?>');    
            			jQuery('#<?php echo $field['id']; ?>_picker').ColorPicker({
            				color: '<?php echo $meta; ?>',
            				onShow: function (colpkr) {
            					jQuery(colpkr).fadeIn(500);
            					return false;
            				},
            				onHide: function (colpkr) {
            					jQuery(colpkr).fadeOut(500);
            					return false;
            				},
            				onChange: function (hsb, hex, rgb) {
            					//jQuery(this).css('border','1px solid red');
            					jQuery('#<?php echo $field['id']; ?>_picker').children('div').css('backgroundColor', '#' + hex);
            					jQuery('#<?php echo $field['id']; ?>_picker').next('input').attr('value','#' + hex);
        					}
    				    });
                    });
        		</script>
<?php       break;             
    			
		}

	}
 
	echo '</table>';
}

function tz_show_box_image() {
	global $meta_box_image, $post;

	$wp_version = get_bloginfo('version');
 	
	echo '<p style="padding:10px 0 0 0;">'.__('Upload images to be used for this post. The featured image will not be included in the single post page.', 'framework').'</p>';
	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_image['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
 
			//If Button	
			case 'button':
				if( version_compare($wp_version, '3.4.2', '>') ) {
					// Using WP3.5+
			?>
				<script>
				jQuery(function($) {
					var frame,
					    images = '<?php echo get_post_meta( $post->ID, 'tz_image_ids', true ); ?>',
					    selection = loadImages(images);

					$('#zilla_images_upload').on('click', function(e) {
						e.preventDefault();

						// Set options for 1st frame render
						var options = {
							title: '<?php _e("Create Featured Gallery", "zilla"); ?>',
							state: 'gallery-edit',
							frame: 'post',
							selection: selection
						};

						// Check if frame or gallery already exist
						if( frame || selection ) {
							options['title'] = '<?php _e("Edit Featured Gallery", "zilla"); ?>';
						}

						frame = wp.media(options).open();
						
						// Tweak views
						frame.menu.get('view').unset('cancel');
						frame.menu.get('view').unset('separateCancel');
						frame.menu.get('view').get('gallery-edit').el.innerHTML = '<?php _e("Edit Featured Gallery", "zilla"); ?>';
						frame.content.get('view').sidebar.unset('gallery'); // Hide Gallery Settings in sidebar

						// When we are editing a gallery
						overrideGalleryInsert();
						frame.on( 'toolbar:render:gallery-edit', function() {
    						overrideGalleryInsert();
						});
						
						frame.on( 'content:render:browse', function( browser ) {
						    if ( !browser ) return;
						    // Hide Gallery Setting in sidebar
						    browser.sidebar.on('ready', function(){
						        browser.sidebar.unset('gallery');
						    });
						    // Hide filter/search as they don't work 
 							browser.toolbar.on('ready', function(){ 
								if(browser.toolbar.controller._state == 'gallery-library'){ 
									browser.toolbar.$el.hide(); 
								} 
 							}); 
						});
						
						// All images removed
						frame.state().get('library').on( 'remove', function() {
						    var models = frame.state().get('library');
							if(models.length == 0){
							    selection = false;
    							$.post(ajaxurl, { ids: '', action: 'zilla_save_images', post_id: zilla_ajax.post_id, nonce: zilla_ajax.nonce });
							}
						});
						
						// Override insert button
						function overrideGalleryInsert() {
    						frame.toolbar.get('view').set({
								insert: {
									style: 'primary',
									text: '<?php _e("Save Featured Gallery", "zilla"); ?>',

									click: function() {
										var models = frame.state().get('library'),
										    ids = '';

										models.each( function( attachment ) {
										    ids += attachment.id + ','
										});

										this.el.innerHTML = '<?php _e("Saving...", "zilla"); ?>';
										
										$.ajax({
											type: 'POST',
											url: ajaxurl,
											data: { 
												ids: ids, 
												action: 'zilla_save_images', 
												post_id: zilla_ajax.post_id, 
												nonce: zilla_ajax.nonce 
											},
											success: function(){
    											selection = loadImages(ids);
    											$('#tz_image_ids').val( ids );
    											frame.close();
											},
											dataType: 'html'
										}).done( function( data ) {
											$('.zilla-gallery-thumbs').html( data );
										}); 
									}
								}
							});
						}
					});
					
					// Load images
					function loadImages(images) {
						if( images ){
						    var shortcode = new wp.shortcode({
            					tag:    'gallery',
            					attrs:   { ids: images },
            					type:   'single'
            				});
				
						    var attachments = wp.media.gallery.attachments( shortcode );

            				var selection = new wp.media.model.Selection( attachments.models, {
            					props:    attachments.props.toJSON(),
            					multiple: true
            				});
            
            				selection.gallery = attachments.gallery;
            
            				// Fetch the query's attachments, and then break ties from the
            				// query to allow for sorting.
            				selection.more().done( function() {
            					// Break ties with the query.
            					selection.props.set({ query: false });
            					selection.unmirror();
            					selection.props.unset('orderby');
            				});
            				
            				return selection;
						}
						
						return false;
					}
					
				});
				</script>
			<?php
				// SPECIAL CASE:
				// std controls button text; unique meta key for image uploads
				$meta = get_post_meta( $post->ID, 'tz_image_ids', true );
				$thumbs_output = '';
				$button_text = ($meta) ? __('Edit Gallery', 'zilla') : $field['std'];
				if( $meta ) {
					$field['std'] = __('Edit Gallery', 'zilla');
					$thumbs = explode(',', $meta);
					$thumbs_output = '';
					foreach( $thumbs as $thumb ) {
						$thumbs_output .= '<li>' . wp_get_attachment_image( $thumb, array(32,32) ) . '</li>';
					}
				}

			    echo 
			    	'<td>
			    		<input type="button" class="button" name="' . $field['id'] . '" id="zilla_images_upload" value="' . $button_text .'" />
			    		
			    		<input type="hidden" name="tz_image_ids" id="tz_image_ids" value="' . ($meta ? $meta : 'false') . '" />

			    		<ul class="zilla-gallery-thumbs">' . $thumbs_output . '</ul>
			    	</td>';
		    } else {
				// Using pre WP3.5
				echo '<tr><td><input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			}
			
			break;
			
			//If Select	
			case 'select':
			
				echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			
				echo'<select name="'.$field['id'].'">';
			
				foreach ($field['options'] as $option) {
					
					echo'<option';
					if ($meta == $option ) { 
						echo ' selected="selected"'; 
					}
					echo'>'. $option .'</option>';
				
				} 
				
				echo'</select>';
			
			break;
		}

	}
 
	echo '</table>';
}

function tz_show_box_quote() {
	global $meta_box_quote, $post;

	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_quote['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If textarea		
			case 'textarea':
			
			echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<textarea name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" rows="8" cols="5" style="width:100%; margin-right: 20px; float:left;">', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '</textarea>';
			
			break;

		}

	}
 
	echo '</table>';
}

function tz_show_box_link() {
	global $meta_box_link, $post;

	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_link['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;

		}

	}
 
	echo '</table>';
}

function tz_show_box_audio() {
	global $meta_box_audio, $post;
	
	echo '<p style="padding:10px 0 0 0;">'.__('Note that for audio, you must supply both MP3 and OGG files to satisfy all browsers.', 'framework').'</p>';

	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_audio['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			//If Text		
			case 'text':
			
			echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
			
			//If textarea		
			case 'textarea':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<textarea name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" rows="8" cols="5" style="width:100%; margin-right: 20px; float:left;">', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '</textarea>';
			
			break;

		}

	}
 
	echo '</table>';
}

function tz_show_box_video() {
	global $meta_box_video, $post;
	
	echo '<p style="padding:10px 0 0 0;">'.__('Note that for video, you must supply an M4V file to satisfy both HTML5 and Flash solutions. The optional OGV format is used to increase x-browser support for HTML5 browsers such as Firefox and Opera.', 'framework').'</p>';

	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_video['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
 
			
			//If textarea		
			case 'textarea':
			
			echo '<tr style="border-top:1px solid #eeeeee;">',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style="line-height:18px; display:block; color:#999; margin:5px 0 0 0;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<textarea name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" rows="8" cols="5" style="width:100%; margin-right: 20px; float:left;">', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '</textarea>';
			
			break;

		}

	}
 
	echo '</table>';
}

function tz_show_box_page() {
	global $meta_box_page, $post;

	$wp_version = get_bloginfo('version');

	// Use nonce for verification
	echo '<input type="hidden" name="tz_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box_page['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		switch ($field['type']) {
 
			
			//If Text		
			case 'text':
			
			echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
			
			break;
 
			//If Button	
			case 'button':

				if( version_compare($wp_version, '3.4.2', '>') ) {
			?> 
				<script>
				jQuery(function($) {
					var frame;

					$('#<?php echo $field['id']; ?>').on('click', function(e) {
						e.preventDefault();

						// Set options for 1st frame render
						var options = {
							state: 'insert',
							frame: 'post'
						};

						frame = wp.media(options).open();
						
						// Tweak views
						frame.menu.get('view').unset('gallery');
						frame.menu.get('view').unset('featured-image');
												
						frame.toolbar.get('view').set({
							insert: {
								style: 'primary',
								text: '<?php _e("Insert", "zilla"); ?>',

								click: function() {
									var models = frame.state().get('selection'),
										url = models.first().attributes.url
										field = '<?php echo $field['id']; ?>';
										field = field.replace('_button', '');

									$('#'+field).val( url ); 

									frame.close();
								}
							}
						});
						

					});
					
				});
				</script>
			<?php
				} // if version compare
				echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				echo 	'</td>',
			'</tr>';
			
			break;

			//If Select	
			case 'select':
			
				echo '<tr>',
				'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
				'<td>';
			
				echo'<select name="'.$field['id'].'">';
			
				foreach ($field['options'] as $option) {
					
					echo'<option';
					if ($meta == $option ) { 
						echo ' selected="selected"'; 
					}
					echo'>'. $option .'</option>';
				
				} 
				
				echo'</select>';
			
			break;

            case 'color':

                echo '<tr>',
    			'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</span></label></th>',
    			'<td>';

                echo '<div id="' . $field['id'] . '_picker" class="colorSelector"><div></div></div>';
    			echo '<input style="width:75px; margin-left: 5px;" class="tz-color" name="'. $field['id'] .'" id="'. $field['id'] .'" type="text" value="'. $meta .'" />';
?>   			
    			<script type="text/javascript" language="javascript">
            		jQuery(document).ready(function(){
            			//Color Picker
    				    jQuery('#<?php echo $field['id']; ?>_picker').children('div').css('backgroundColor', '<?php echo $meta; ?>');    
            			jQuery('#<?php echo $field['id']; ?>_picker').ColorPicker({
            				color: '<?php echo $meta; ?>',
            				onShow: function (colpkr) {
            					jQuery(colpkr).fadeIn(500);
            					return false;
            				},
            				onHide: function (colpkr) {
            					jQuery(colpkr).fadeOut(500);
            					return false;
            				},
            				onChange: function (hsb, hex, rgb) {
            					//jQuery(this).css('border','1px solid red');
            					jQuery('#<?php echo $field['id']; ?>_picker').children('div').css('backgroundColor', '#' + hex);
            					jQuery('#<?php echo $field['id']; ?>_picker').next('input').attr('value','#' + hex);
        					}
    				    });
                    });
        		</script>
<?php       break;             
    		
		}

	}
 
	echo '</table>';
}

 
add_action('save_post', 'tz_save_data');


/*-----------------------------------------------------------------------------------*/
/*	Save data when post is edited
/*-----------------------------------------------------------------------------------*/
 
function tz_save_data($post_id) {
	global $meta_box_post, $meta_box_quote, $meta_box_link, $meta_box_audio, $meta_box_video, $meta_box_page;
 
	// verify nonce
	if (!isset($_POST['tz_meta_box_nonce']) || !wp_verify_nonce($_POST['tz_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
 
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
 
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
 
	foreach ($meta_box_post['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = ( isset($_POST[$field['id']]) ) ? $_POST[$field['id']] : false;
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

	foreach ($meta_box_quote['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
	
	foreach ($meta_box_link['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
	
	foreach ($meta_box_audio['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'],stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
	
	foreach ($meta_box_video['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], stripslashes(htmlspecialchars($new)));
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
	
	foreach ($meta_box_page['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = ( isset($_POST[$field['id']]) ) ? $_POST[$field['id']] : false;
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}

}


/*-----------------------------------------------------------------------------------*/
/*	Queue Scripts
/*-----------------------------------------------------------------------------------*/
 
function tz_admin_scripts_post() {
	global $post;
	$wp_version = get_bloginfo('version');

	// enqueue scripts
	wp_enqueue_script('media-upload');
	wp_enqueue_script('color-picker', TZ_DIRECTORY.'/admin/js/colorpicker.js', array('jquery'));
	if( version_compare( $wp_version, '3.4.2', '<=' ) ) {

		wp_enqueue_script('thickbox');
		wp_register_script('tz-upload', get_template_directory_uri() . '/functions/js/upload-button.js', array('jquery','media-upload','thickbox'));
		wp_enqueue_script('tz-upload');

		wp_enqueue_style('thickbox');
	}

	if( isset($post) ) {
		wp_localize_script( 'jquery', 'zilla_ajax', array(
		    'post_id' => $post->ID,
		    'nonce' => wp_create_nonce( 'zilla-ajax' )
		) );
	}

	// enqueue styles
	wp_enqueue_style('color-picker', TZ_DIRECTORY.'/admin/css/colorpicker.css');
}
add_action('admin_enqueue_scripts', 'tz_admin_scripts_post');