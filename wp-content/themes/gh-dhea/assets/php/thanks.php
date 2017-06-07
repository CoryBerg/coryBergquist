<?php
  if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
      'key' => 'group_58f9f7c183f58',
      'title' => 'Thank You Content',
      'fields' => array (
        array (
          'key' => 'field_58f9f8289ed23',
          'label' => 'Downloadable Article',
          'name' => 'downloadable_article',
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
            0 => 'articles',
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
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'thanks.php',
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
  endif;
?>
