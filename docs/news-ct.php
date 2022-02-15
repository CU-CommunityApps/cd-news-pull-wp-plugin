<?php
/**
 * Registers News Custom Content type and adds fields.
 *
 * @since             1.0.0
 * @package           CUNEWS
 */

/**
 * Post Type: News.
 */
function cptui_register_my_cpts_news() {

	$labels = [
		'name' => __( 'News', 'custom-post-type-ui' ),
		'singular_name' => __( 'News', 'custom-post-type-ui' ),
	];

	$args = [
		'label' => __( 'News', 'custom-post-type-ui' ),
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'delete_with_user' => false,
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => true,
		'rewrite' => [
			'slug' => 'news',
			'with_front' => true,
		],
		'query_var' => true,
		'menu_icon' => 'dashicons-analytics',
		'supports' => [ 'title', 'thumbnail', 'revisions', 'page-attributes' ],
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 4,
		'register_meta_box_cb' => 'make_sticky_add_meta_box',
	];

	register_post_type( 'news', $args );
}

add_action( 'init', 'cptui_register_my_cpts_news' );


/* News custom fields */
if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group(
		array(
			'key' => 'group_5e87a850e91e2',
			'title' => 'News Fields',
			'fields' => array(
				array(
					'key' => 'field_5e87a883f13e7',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5e8cbe656bb3a',
					'label' => 'Info',
					'name' => 'info',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array(
					'key' => 'field_5e87a8a8f13e9',
					'label' => 'Publication Date',
					'name' => 'publication_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'F j, Y',
					'return_format' => 'F j, Y',
					'first_day' => 1,
				),
				array(
					'key' => 'field_5e931ce7386d1',
					'label' => 'News image URL',
					'name' => 'image',
					'type' => 'text',
					'instructions' => 'Typically this fields is set by CD news Feed plugin, but this can be used to set the URL for the featured image if it hosted somewhere else.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5e91daf15e3a8',
					'label' => 'CU News ID',
					'name' => 'cu_news_id',
					'type' => 'text',
					'instructions' => 'Do not modify',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'hidden',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5e91db52f48c1',
					'label' => 'CU News Url',
					'name' => 'cu_news_url',
					'type' => 'text',
					'instructions' => 'Set by CD News plugin do not edit.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => 'hidden',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'news',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'acf_after_title',
			'style' => 'seamless',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				//0 => 'excerpt',
				1 => 'discussion',
				2 => 'comments',
				3 => 'slug',
				4 => 'author',
				5 => 'format',
				6 => 'categories',
				//7 => 'tags',
				8 => 'send-trackbacks',
			),
			'active' => true,
			'description' => '',
		)
	);

	endif;
