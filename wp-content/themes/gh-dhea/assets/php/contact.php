<?php
  if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
      'key' => 'group_58f4cd0192a11',
      'title' => 'Contact Page Content',
      'fields' => array (
        array (
          'key' => 'field_58f4d77ed4b86',
          'label' => 'Address Box Image',
          'name' => 'address_box_image',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'thumbnail',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array (
          'key' => 'field_58f4da587edbb',
          'label' => 'Address Box Image Link',
          'name' => 'address_box_image_link',
          'type' => 'url',
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
        ),
        array (
          'key' => 'field_58f4d15bde326',
          'label' => 'Address Box Text',
          'name' => 'address_box_text',
          'type' => 'wysiwyg',
          'instructions' => '',
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
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'contact.php',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ));
  endif;
?>
