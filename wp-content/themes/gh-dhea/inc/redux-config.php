<?php

/**
 *  ReduxFramework Config File
 *  For full documentation, please visit: https://docs.reduxframework.com
 **/

if (!class_exists('Redux_Framework_config')) {

  class Redux_Framework_config
  {

    public $args = array();
    public $sections = array();
    public $theme;
    public $ReduxFramework;

    private $thank_you_posts_options;

    public function __construct( array $thank_you_posts_options )
    {

      if (!class_exists('ReduxFramework')) {
        return;
      }

      // This is needed. Bah WordPress bugs.  ;)
      if (true == Redux_Helpers::isTheme(__FILE__)) {
        $this->setThankYouPostsOptions($thank_you_posts_options);
        $this->initSettings();
      } else {
        add_action('plugins_loaded', array($this, 'initSettings'), 10);
      }

    }

    public function initSettings()
    {

      // Set the default arguments
      $this->setArguments();

      // Create the sections and fields
      $this->setSections();

      if (!isset($this->args['opt_name'])) { // No errors please
        return;
      }

      $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
    }

    public function setSections()
    {

      //Business Information Section
      $this->sections[] = array(
        'title' => __('Addresses', 'redux-framework-demo'),
        'icon' => 'el-icon-compass',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields' => array(

          array(
            'id' => 'address1',
            'type' => 'text',
            'title' => __('Address 1'),
            'desc' => 'Address listed on the contact page',
            'default' => ''
          ),
          array(
            'id' => 'address2',
            'type' => 'text',
            'title' => __('Address 2'),
            'desc' => 'Address listed on the contact page',
            'default' => ''
          ),
          array(
            'id' => 'city',
            'type' => 'text',
            'title' => __('City'),
            'desc' => 'City listed on the contact page',
            'default' => ''
          ),
          array(
            'id' => 'state',
            'type' => 'text',
            'title' => __('State'),
            'desc' => 'State listed on the contact page',
            'default' => ''
          ),
          array(
            'id' => 'zip',
            'type' => 'text',
            'title' => __('Zip Code'),
            'desc' => 'Zip Code listed on the contact page',
            'default' => ''
          ),
          array(
            'id' => 'phone',
            'type' => 'text',
            'title' => __('Phone'),
            'desc' => 'Phone number listed on the contact page',
            'default' => ''
          ),
          array(
            'id' => 'fax',
            'type' => 'text',
            'title' => __('Fax'),
            'desc' => 'Fax number listed on the contact page',
            'default' => ''
          ),
          array(
            'id' => 'general_email',
            'type' => 'text',
            'title' => __('General E-Mail'),
            'desc' => 'General email listed on the contact page',
            'default' => ''
          ),
          array(
            'id' => 'registration_email',
            'type' => 'text',
            'title' => __('Registration E-Mail'),
            'desc' => 'Email referenced on Simmons registration process for help adding a store',
            'default' => ''
          ),
        ),
      );

      // Website Settings Section
      $this->sections[] = array(
        'title' => __('Home Page', 'redux-framework-demo'),
        'icon' => 'el-icon-home',
        'fields' => array(
          array(
            'id' => 'featured-right-logged-out-widget',
            'type' => 'editor',
            'title' => __('Featured Content - Right Box - Logged Out', 'redux-framework-demo'),
            'subtitle' => 'Valid shortcodes - [ss-registration-link], [ss-login-link], [ss-login-button], [ss-first-name], [ss-last-name], 
[ss-link slug="about" name="About"]'
          ),
          array(
            'id' => 'featured-right-logged-in-widget',
            'type' => 'editor',
            'title' => __('Featured Content - Right Box - Logged In', 'redux-framework-demo'),
            'subtitle' => 'Valid shortcodes - [ss-registration-link], [ss-login-link], [ss-login-button], [ss-first-name], [ss-last-name], 
[ss-link slug="about" name="About"]'
          )
        )
      );

      // Thank You Modal Settings Section
      $this->sections[] = array(
        'title' => __('Thank You Modal', 'redux-framework-demo'),
        'icon' => 'el-icon-thumbs-up',
        'fields' => array(
          array(
            'id' => 'thank-you-modal-introduction',
            'type' => 'editor',
            'title' => __('Thank You Modal Introduction Content', 'redux-framework-demo'),
            'subtitle' => 'This is the content featured above the 3 posts on the thank you modal for newly registered users'
          ),
          array(
            'id'       => 'thank-you-modal-post-1',
            'type'     => 'select',
            'multi'    => false,
            'title'    => __('Thank You Modal - Post #1', 'redux-framework-demo'),
            'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
            //Must provide key => value pairs for radio options
            'options'  => $this->getThankYouPostsOptions(),
          ),
          array(
            'id'       => 'thank-you-modal-post-2',
            'type'     => 'select',
            'multi'    => false,
            'title'    => __('Thank You Modal - Post #2', 'redux-framework-demo'),
            'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
            //Must provide key => value pairs for radio options
            'options'  => $this->getThankYouPostsOptions(),
          ),
          array(
            'id'       => 'thank-you-modal-post-3',
            'type'     => 'select',
            'multi'    => false,
            'title'    => __('Thank You Modal - Post #3', 'redux-framework-demo'),
            'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
            //Must provide key => value pairs for radio options
            'options'  => $this->getThankYouPostsOptions(),
          )
        )
      );

      // Website Settings Section
      $this->sections[] = array(
        'title' => __('Footer / Social Settings', 'redux-framework-demo'),
        'icon' => 'el-icon-cogs',
        'fields' => array(
          array(
            'id' => 'social_facebook',
            'type' => 'text',
            'title' => __('Facebook Page URL', 'redux-framework-demo'),
          ),
          array(
            'id' => 'social_linkedin',
            'type' => 'text',
            'title' => __('LinkedIn Page URL', 'redux-framework-demo'),
          ),
          array(
            'id' => 'social_twitter',
            'type' => 'text',
            'title' => __('Twitter Page URL', 'redux-framework-demo'),
          ),
          array(
            'id' => 'social_youtube',
            'type' => 'text',
            'title' => __('Youtube Channel URL', 'redux-framework-demo'),
          ),
          array(
            'id' => 'settings_footer_text',
            'type' => 'text',
            'title' => __('Footer Copyright Info', 'redux-framework-demo'),
            'desc' => 'This text is a text override for the copyright statement in the footer of the website.'
          )
        ),
      );

      // Admin Settings Section
      $this->sections[] = array(
        'title' => __('Admin Settings', 'redux-framework-demo'),
        'icon' => 'el-icon-lock',
        'fields' => array(

          array(
            'id' => 'after_body_scripts',
            'type' => 'ace_editor',
            'title' => __('Misc. Post Header Scripts', 'redux-framework-demo'),
            'subtitle' => 'This is the scripts you want loaded after the body tag.',
            'mode' => 'html',
            'theme' => 'monokai',
          ),
          array(
            'id' => 'footer_scripts',
            'type' => 'ace_editor',
            'title' => __('Misc. Footer Scripts', 'redux-framework-demo'),
            'subtitle' => 'These scripts are added to the footer of the website',
            'mode' => 'html',
            'theme' => 'monokai',
          ),
        ),
      );
    }

    /**
     *  All the possible arguments for Redux.
     *  For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     **/
    public function setArguments()
    {

      $theme = wp_get_theme(); // For use with some settings. Not necessary.

      $this->args = array(
        'opt_name' => 'geek_theme_options',
        'display_name' => $theme->get('Name'),
        'display_version' => $theme->get('Version'),
        'page_title' => 'Website Options',
        'admin_bar' => true,
        'menu_type' => 'menu',
        'menu_title' => 'Website Options',
        'allow_sub_menu' => true,
        'page_parent_post_type' => 'your_post_type',
        'page_priority' => '3',
        'default_mark' => '',
        'dev_mode' => false,
        'hints' =>
          array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' =>
              array(
                'color' => 'light',
                'style' => 'bootstrap',
              ),
            'tip_position' =>
              array(
                'my' => 'top left',
                'at' => 'bottom right',
              ),
            'tip_effect' =>
              array(
                'show' =>
                  array(
                    'duration' => '500',
                    'event' => 'mouseover',
                  ),
                'hide' =>
                  array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                  ),
              ),
          ),
        'output' => true,
        'output_tag' => true,
        'compiler' => true,
        'page_icon' => 'icon-themes',
        'page_permissions' => 'manage_options',
        'save_defaults' => true,
        'transient_time' => '3600',
        'network_sites' => true,
        'show_import_export' => false,
        'footer_credit' => ' ',
        'system_info' => false,
        'use_cdn' => false
      );

    }

    /**
     * @return mixed
     */
    public function getThankYouPostsOptions()
    {
      return $this->thank_you_posts_options;
    }

    /**
     * @param mixed $thank_you_posts_options
     */
    public function setThankYouPostsOptions($thank_you_posts_options)
    {
      $this->thank_you_posts_options = $thank_you_posts_options;
    }

  }

  global $reduxConfig;
}
