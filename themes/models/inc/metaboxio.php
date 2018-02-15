<?php

// Meta Box
add_filter( 'rwmb_meta_boxes', 'wxy__metaboxio_fields' );

function wxy__metaboxio_fields( $meta_boxes ) {
	
	// Slide Fields
	$meta_boxes[] = array(
        'title'      => __( 'Slide Settings', 'models' ),
        'post_types' => 'araslider',
        'context' => 'normal',
        'fields'     => array(
            array(
                'id'      => 'slide_secound_title',
                'type'    => 'text',
                'name'	  => 'Secound Title'
            ),
             array(
                'id'      => 'slide_show_title',
                'type'    => 'checkbox',
                'desc'	  => 'Show Title'
            ),
             array(
                'id'      => 'slide_show_subtitle',
                'type'    => 'checkbox',
                'desc'	  => 'Show Sub Title'
            ),
             array(
                'id'      => 'slide_show_text',
                'type'    => 'checkbox',
                'desc'	  => 'Show Text'
            ),
			
			 array(
                'id'      => 'slide_text_color',
                'type'    => 'color',
                'desc'	  => 'Text Color'
            ),
        
        ),
    );
	
	// Product Fields
	$meta_boxes[] = array(
        'title'      => __( 'Product Settings', 'models' ),
        'post_types' => 'product',
        'fields'     => array( 
            array(
                'id'      => 'product_testdrive',
                'type'    => 'checkbox',
                'desc'	  => 'Test Drive'
            ),
        	array(
                'id'      => 'product_unique',
                'type'    => 'checkbox',
                'desc'	  => 'Unique Bike'
            ),
            array(
                'id'      => 'product_unique_small_desc',
                'type'    => 'text',
                'desc'	  => 'Unique Product Small Text'
            ),
        	
		   array(
                'id'      => 'product_available',
                'type'    => 'checkbox',
                'desc'	  => 'Available'
            ),
        
		),
    );
	
	// ============================================================== //
	
	
	// Post Gallery Images
	$meta_boxes[] = array(
        'title'      => __( 'Image Gallery', 'models' ),
        'post_types' => 'post',
        'context' => 'normal',
        'fields'     => array(
            array(
                'id'      => 'post__image_gallery',
                'type'    => 'image_advanced',
                'title'	  => 'dfds'
            ),
        
        ),
    );
	
	
	// Galleries
	$meta_boxes[] = array(
        'title'      => __( 'Image Gallery', 'models' ),
        'post_types' => 'ara_girls',
        'context' => 'normal',
        'fields'     => array(
            array(
                'id'      => 'post__image_gallery',
                'type'    => 'image_advanced',
            ),
            
			array(
                'id'      => 'g_weight',
                'type'    => 'text',
                'name'	  => 'Тегло',
                'placeholder'	  => 'Тегло',
            ),
            
			array(
                'id'      => 'g_age',
                'type'    => 'text',
                'name'	  => 'Години',
            ),
            
			array(
                'id'      => 'g_height',
                'type'    => 'text',
                'name'	  => 'Височина',
            ),
            
			array(
                'id'      => 'g_city',
                'type'    => 'text',
                'name'	  => 'Град',
            ),
        
        ),
    );
	
	// models Albums
	$meta_boxes[] = array(
        'title'      => __( 'Images', 'models' ),
        'post_types' => 'buenoalbums',
        'context' => 'normal',
        'fields'     => array(
            array(
                'id'      => 'models__albums',
                'type'    => 'image_advanced',
            ),
          
        ),
    );
	
	// models Albums
	$meta_boxes[] = array(
        'title'      => __( 'Albums Grid', 'models' ),
        'post_types' => 'ara_girls',
        'context' => 'normalsdfd',
        'fields'     => array(
            array(
				'type'    => 'select', // or checkbox_list
				'id'      => 'models__albums_grid',
				'name'    => 'Template Grid',
				'options' => array(
					6 => 'Template Grid 2',
					4 => 'Template Grid 3',
					"masonry" => 'Template Masonry'
				),
			),
        ),
    );
    return $meta_boxes;
}
