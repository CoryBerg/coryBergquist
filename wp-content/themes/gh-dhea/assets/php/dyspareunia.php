<?php
  if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
      'key' => 'group_58f7a3ff6999f',
      'title' => 'VVA Survey',
      'fields' => array (
        array (
          'key' => 'field_58f7a418b2645',
          'label' => 'Survey Header',
          'name' => 'survey_header',
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
        array (
          'key' => 'field_58f7a42db2646',
          'label' => 'Survey Title',
          'name' => 'survey_title',
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
        array (
          'key' => 'field_58f7a669b264a',
          'label' => 'Survey Column 1 Header',
          'name' => 'survey_column_1_header',
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
          'key' => 'field_58f7a686b264b',
          'label' => 'Survey Column 2 Header',
          'name' => 'survey_column_2_header',
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
          'key' => 'field_58f7a455b2647',
          'label' => 'Survey Results',
          'name' => 'survey_results',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'collapsed' => 'field_58f7a522b2648',
          'min' => 0,
          'max' => 0,
          'layout' => 'table',
          'button_label' => '',
          'sub_fields' => array (
            array (
              'key' => 'field_58f7a522b2648',
              'label' => 'Symptom',
              'name' => 'symptom',
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
              'key' => 'field_58f7a541b2649',
              'label' => 'Percentage Reporting',
              'name' => 'percentage_reporting',
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
          'key' => 'field_58f7a6dcb264c',
          'label' => 'Survey Footnote',
          'name' => 'survey_footnote',
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
        array (
          'key' => 'field_58f7a79ab264d',
          'label' => 'Survey Additional Content',
          'name' => 'survey_additional_content',
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
            'value' => 'dyspareunia.php',
          ),
        ),
      ),
      'menu_order' => 1,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ));

    acf_add_local_field_group(array (
      'key' => 'group_58f7a8fc406b4',
      'title' => 'Dyspareunia Content',
      'fields' => array (
        array (
          'key' => 'field_58f7a93d6ad5c',
          'label' => 'Dyspareunia Image',
          'name' => 'dyspareunia_image',
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
          'key' => 'field_58f7b7d36ad63',
          'label' => 'Steroid Header',
          'name' => 'steroid_header',
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
        array (
          'key' => 'field_58f7b7f96ad64',
          'label' => 'Intracrinology Header',
          'name' => 'intracrinology_header',
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
        array (
          'key' => 'field_58f7b82c6ad65',
          'label' => 'Steroid List',
          'name' => 'steroid_list',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'collapsed' => 'field_58f7b84d6ad66',
          'min' => 0,
          'max' => 0,
          'layout' => 'table',
          'button_label' => 'Add Bullet Point',
          'sub_fields' => array (
            array (
              'key' => 'field_58f7b84d6ad66',
              'label' => 'Steroid Bullet Point',
              'name' => 'steroid_bullet_point',
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
        ),
        array (
          'key' => 'field_58f7a9966ad5e',
          'label' => 'Atrophy Header',
          'name' => 'atrophy_header',
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
        array (
          'key' => 'field_58f7a9b16ad5f',
          'label' => 'Atrophy Image',
          'name' => 'atrophy_image',
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
          'key' => 'field_58f7a9d06ad60',
          'label' => 'Atrophy Image Caption',
          'name' => 'atrophy_image_caption',
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
          'key' => 'field_58f7a9f06ad61',
          'label' => 'Atrophy List',
          'name' => 'atrophy_list',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'collapsed' => 'field_58f7aa016ad62',
          'min' => 0,
          'max' => 0,
          'layout' => 'table',
          'button_label' => 'Add Bullet Point',
          'sub_fields' => array (
            array (
              'key' => 'field_58f7aa016ad62',
              'label' => 'Atrophy Bullet Point',
              'name' => 'atrophy_bullet_point',
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
        ),
        array (
          'key' => 'field_58f7a9526ad5d',
          'label' => 'Quote',
          'name' => 'quote',
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
        array (
          'key' => 'field_58f7b8e96ad67',
          'label' => 'Hormones Header',
          'name' => 'hormones_header',
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
          'key' => 'field_58f7b9126ad68',
          'label' => 'Discover Link Text',
          'name' => 'discover_link_text',
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
        array (
          'key' => 'field_58f7b9276ad69',
          'label' => 'Discover Link',
          'name' => 'discover_link',
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
      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'dyspareunia.php',
          ),
        ),
      ),
      'menu_order' => 2,
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