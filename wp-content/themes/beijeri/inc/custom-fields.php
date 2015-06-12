<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_about-page-fields',
		'title' => 'About Page Fields',
		'fields' => array (
			array (
				'key' => 'field_554734e7d300f',
				'label' => 'First Section',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5547350dd3010',
				'label' => 'First Section Text',
				'name' => 'first_section_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_55473526d3011',
				'label' => 'First Section Anchor',
				'name' => 'first_section_anchor',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55473531d3012',
				'label' => 'First Section Image',
				'name' => 'first_section_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55473562d3014',
				'label' => 'Second Section',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5547356fd3015',
				'label' => 'Second Section Text',
				'name' => 'second_section_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_55473591d3016',
				'label' => 'Second Section Anchor',
				'name' => 'second_section_anchor',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554735d8d3019',
				'label' => 'Second Section Image',
				'name' => 'second_section_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_554735c9d3018',
				'label' => 'Third Section',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_554735f7d301a',
				'label' => 'Third Section Text',
				'name' => 'third_section_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_55473611d301b',
				'label' => 'Third Section Anchor',
				'name' => 'third_section_anchor',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554735a9d3017',
				'label' => 'Third Section Image',
				'name' => 'third_section_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-about.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'custom_fields',
				2 => 'discussion',
				3 => 'comments',
				4 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_companies-page-fields',
		'title' => 'Companies Page Fields',
		'fields' => array (
			array (
				'key' => 'field_5547612863d06',
				'label' => 'Page Info',
				'name' => 'page_info',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-companies.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'featured_image',
				5 => 'categories',
				6 => 'tags',
				7 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_company-fields',
		'title' => 'Company Fields',
		'fields' => array (
			array (
				'key' => 'field_554747b8215a4',
				'label' => 'Tagline',
				'name' => 'tagline',
				'type' => 'text',
				'instructions' => 'A short sentence about the company. Shown at: home page gallery, at companies (våra bolag) page, under the title at the company profile page.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554747c6215a5',
				'label' => 'Short Description',
				'name' => 'short_description',
				'type' => 'wysiwyg',
				'instructions' => 'A short, ideally one paragraph description to show at companies page',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_554747dd215a6',
				'label' => 'Hero Image',
				'name' => 'hero_image',
				'type' => 'image',
				'instructions' => 'A background image having the size 1920x1080. Shown at slider at the home page and at the company profile page.',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_554755b46e73a',
				'label' => 'Hero Image Text',
				'name' => 'hero_image_text',
				'type' => 'wysiwyg',
				'instructions' => 'Test to show at home page slider.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5547480d215a7',
				'label' => 'Thumbnail Image',
				'name' => 'square_image',
				'type' => 'image',
				'instructions' => 'An image having the aspect ratio 7x5. Shown at the home page companies gallary.',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55474825215a8',
				'label' => 'Company Logo',
				'name' => 'company_logo',
				'type' => 'image',
				'instructions' => 'Company logo to be displayed on companies page. ideally having width of 210 pixels.',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55758a3f271af',
				'label' => 'Sort Order',
				'name' => 'sort_order',
				'type' => 'number',
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'bolag',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_footer-options',
		'title' => 'Footer Options',
		'fields' => array (
			array (
				'key' => 'field_556dbea5b97c0',
				'label' => 'Footer Text',
				'name' => 'footer_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_home-page-fields',
		'title' => 'Home Page Fields',
		'fields' => array (
			array (
				'key' => 'field_55471035fef39',
				'label' => 'Description Title',
				'name' => 'home_description_title',
				'type' => 'text',
				'default_value' => 'Detta är Beijerinvest',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_553a4b8119dad',
				'label' => 'Description',
				'name' => 'home_description_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'formatting' => 'br',
				'rows' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-home.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'author',
				6 => 'featured_image',
				7 => 'categories',
				8 => 'tags',
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_team-page',
		'title' => 'Team Page',
		'fields' => array (
			array (
				'key' => 'field_5547638acfdb3',
				'label' => 'Ledning',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_55472c9a57c0e',
				'label' => 'Ledning Title',
				'name' => 'ledning_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55472c3d57c0c',
				'label' => 'Ledning Details',
				'name' => 'ledning_details',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_55472729ddff1',
				'label' => 'Ledning Members',
				'name' => 'ledning_members',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_554727b3ddff2',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_55472b014d719',
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_55472805ddff3',
						'label' => 'Picture',
						'name' => 'picture',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_55472aed4d718',
						'label' => 'Bio',
						'name' => 'bio',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_55474fc8a58b4',
				'label' => 'Ledning Anchor',
				'name' => 'ledning_anchor',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_554763a7cfdb4',
				'label' => 'Styrelse',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_55472ca657c0f',
				'label' => 'Styrelse Title',
				'name' => 'styrelse_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55472c7157c0d',
				'label' => 'Styrelse Details',
				'name' => 'styrelse_details',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_55472b7457c07',
				'label' => 'Styrelse Members',
				'name' => 'styrelse_members',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_55472b9657c08',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_55472bd557c0b',
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_55472bae57c09',
						'label' => 'Picture',
						'name' => 'picture',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_55472bc457c0a',
						'label' => 'Bio',
						'name' => 'bio',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_55474fe6a58b5',
				'label' => 'Styrelse Anchor',
				'name' => 'styrelse_anchor',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-team.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'discussion',
				1 => 'comments',
				2 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}


add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Companies",
		"singular_name" => "Company",
		"menu_name" => "Companies",
		"all_items" => "All Companies",
		"add_new" => "Add New",
		"add_new_item" => "Add New Company",
		"edit" => "Edit",
		"edit_item" => "Edit Company",
		"new_item" => "New Company",
		"view" => "View",
		"view_item" => "View Company",
		"search_items" => "Serch Company",
		"not_found" => "No Companies Found",
		"not_found_in_trash" => "No Companies found in Trash",
		"parent" => "Parent Company",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "bolag", "with_front" => true ),
		"query_var" => true,
									);
	register_post_type( "bolag", $args );

// End of cptui_register_my_cpts()
}