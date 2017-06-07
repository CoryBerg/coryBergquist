<?php
  if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
      'key' => 'group_58f12ce3de326',
      'title' => 'Home Page Content',
      'fields' => array (
        array (
          'key' => 'field_58f12d4650f1b',
          'label' => 'Tagline Text',
          'name' => 'tagline_text',
          'type' => 'wysiwyg',
          'instructions' => 'This is the text that will appear in the green text block.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'basic',
          'media_upload' => 0,
          'delay' => 0,
        ),
        array (
          'key' => 'field_58f12e4150f1c',
          'label' => 'Tagline Help Text',
          'name' => 'tagline_help_text',
          'type' => 'text',
          'instructions' => 'This text will appear underneath the green text box.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
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
        array (
          'key' => 'field_58f1319d079ea',
          'label' => 'Pull Back Text',
          'name' => 'pull_back_text',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
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
        array (
          'key' => 'field_58f131c7079eb',
          'label' => 'Pull Back Link',
          'name' => 'pull_back_link',
          'type' => 'page_link',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'post_type' => array (
            0 => 'page',
          ),
          'taxonomy' => array (
          ),
          'allow_null' => 0,
          'allow_archives' => 1,
          'multiple' => 0,
        ),
        array (
          'key' => 'field_58f1329f079ed',
          'label' => 'Callout Header',
          'name' => 'callout_header',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
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
        array (
          'key' => 'field_58f132ca079ee',
          'label' => 'Callout List',
          'name' => 'callout_list',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'collapsed' => 'field_58f132db079ef',
          'min' => 0,
          'max' => 0,
          'layout' => 'table',
          'button_label' => 'Add Item',
          'sub_fields' => array (
            array (
              'key' => 'field_58f132db079ef',
              'label' => 'Callout Items',
              'name' => 'callout_item',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
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
          ),
        ),
        array (
          'key' => 'field_58f13310079f0',
          'label' => 'Video',
          'name' => 'video',
          'type' => 'post_object',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'post_type' => array (
            0 => 'video_module_video',
          ),
          'taxonomy' => array (
          ),
          'allow_null' => 0,
          'multiple' => 0,
          'return_format' => 'object',
          'ui' => 1,
        ),
        array (
          'key' => 'field_58f13343079f2',
          'label' => 'Download',
          'name' => 'download',
          'type' => 'post_object',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'post_type' => array (
            0 => 'download_modals',
          ),
          'taxonomy' => array (
          ),
          'allow_null' => 0,
          'multiple' => 0,
          'return_format' => 'object',
          'ui' => 1,
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_type',
            'operator' => '==',
            'value' => 'front_page',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'field',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ));
  endif;
?>