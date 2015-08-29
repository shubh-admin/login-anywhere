<?php
  /*
  Plugin Name: Login Anywhere
  Plugin URI: http://shubhcomputing.com/
  Description: Provides a mobile button, which demonstrate different steps of Repairing Process.
  Version: 0.0.1
  Author: Shubh Computing LLP
  Author URI: http://shubhcomputing.com/
  */

   defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

   define("ME_URL", rtrim(WP_PLUGIN_URL,'/') . '/'.basename(dirname(__FILE__)) );
   define("ME_DIR", rtrim(dirname(__FILE__), '/'));

    add_shortcode('login-form','login_form_callback');
   function login_form_callback()
   {
       include_once(ME_DIR."/shortcodes/login_form_callback.php");
       return $data;
   }
