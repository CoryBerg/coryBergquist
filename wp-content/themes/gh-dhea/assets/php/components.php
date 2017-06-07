<?php
  if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
      'key' => 'group_58f771ba24276',
      'title' => 'Page Title',
      'fields' => array (
        array (
          'key' => 'field_58f771d784c39',
          'label' => 'Page Title',
          'name' => 'page_title',
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
            'value' => 'histology.php',
          ),
        ),
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'dyspareunia.php',
          ),
        ),
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'dhea.php',
          ),
        ),
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'sex-health.php',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'seamless',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ));

    acf_add_local_field_group(array (
      'key' => 'group_58f779bb153fd',
      'title' => 'References',
      'fields' => array (
        array (
          'key' => 'field_58f77a208982e',
          'label' => 'References Header',
          'name' => 'references_header',
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
          'key' => 'field_58f779c6229e8',
          'label' => 'References',
          'name' => 'references',
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
            'value' => 'histology.php',
          ),
        ),
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'dyspareunia.php',
          ),
        ),
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'dhea.php',
          ),
        ),
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'sex-health.php',
          ),
        ),
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'articles',
          ),
        ),
      ),
      'menu_order' => 10,
      'position' => 'normal',
      'style' => 'seamless',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ));
  endif;
?>
