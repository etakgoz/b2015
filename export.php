<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_contacts',
        'title' => 'Contacts',
        'fields' => array (
            array (
                'key' => 'field_554754ac1ee1d',
                'label' => 'Kontakt',
                'name' => 'kontakt',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_5547551b1ee1e',
                        'label' => 'Type',
                        'name' => 'type',
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
                        'key' => 'field_554755351ee1f',
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
                        'key' => 'field_554755471ee20',
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array (
                        'key' => 'field_5547555d1ee21',
                        'label' => 'Landline',
                        'name' => 'landline',
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
                        'key' => 'field_5547556d1ee22',
                        'label' => 'Mobile',
                        'name' => 'mobile',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
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
                'key' => 'field_553a4b8119dad',
                'label' => 'Description',
                'name' => 'home_description',
                'type' => 'text',
                'instructions' => 'Enter ideally    a two line long description to show at the home page',
                'default_value' => 'Beijerinvest, grundades 1964, är ett svenskt investmentbolag med innehav i industriell tillverkning och handel.',
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
    register_field_group(array (
        'id' => 'acf_team-page',
        'title' => 'Team Page',
        'fields' => array (
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
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'formatting' => 'br',
                'rows' => '',
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
                        'formatting' => 'br',
                        'rows' => '',
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
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'formatting' => 'br',
                'rows' => '',
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
                        'formatting' => 'br',
                        'rows' => '',
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
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
?>