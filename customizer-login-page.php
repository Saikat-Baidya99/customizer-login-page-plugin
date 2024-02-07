<?php
/*
plugin name:       Customizer Login Page  
plugin URI:        https://wordpress.org/plugins/customizer-login-page
Author:            Saikat
Author URI:        https://home-it.com
Version:           1.0.0
Requires at least: 6.4.2 
Requires PHP:      7.3.11
Description:       The Customizer Login Page plugin will help you to enable a custom login page to your WordPress website.
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       clp
*/

   // Plugin Option Page Function
   function clp_add_theme_page(){
     add_menu_page ( 'Login Option for Admin', 'Login Option', 'manage_options', 'clpwp-plugin-option', 'clp_create_page', 'dashicons-unlock', 101 );
   }
   add_action( 'admin_menu', 'clp_add_theme_page' );

   // Plugin Option Page Style
   function clp_add_theme_css(){
     wp_enqueue_style( 'clp-admin-style', plugins_url( 'assets/css/clp-admin-style.css', __FILE__ ), false, "1.0.0");
   }
   add_action('admin_enqueue_scripts', 'clp_add_theme_css');

   //Include Plugin Info file
   function clp_php_file_called(){
    require_once( plugin_dir_path( __FILE__ ) . '/includes/clp-index.php');
    require_once( plugin_dir_path( __FILE__ ) . '/includes/clp-admin.php');
   }
   add_action('init','clp_php_file_called');

   // Loading CSS file
   function clp_login_enqueue_register(){
     wp_enqueue_style( 'clp_login_enqueue', plugins_url( 'assets/css/clp-styles.css', __FILE__ ), false, "1.0.0");
   }
   add_action('login_enqueue_scripts', 'clp_login_enqueue_register');

   // Changing Login form logo url
   function clp_login_logo_url_change(){
     return home_url();
   }
   add_filter( 'login_headerurl', 'clp_login_logo_url_change');
  
   //Plugin Redirect Feature
   register_activation_hook( __FILE__, 'clp_plugin_activation' );
   function clp_plugin_activation(){
     add_option('clp_plugin_do_activation_redirect', true);
   }

   add_action( 'admin_init', 'clp_plugin_redirect');
   function clp_plugin_redirect(){
     if(get_option('clp_plugin_do_activation_redirect', false)){
       delete_option('clp_plugin_do_activation_redirect');
       if(!isset($_GET['active-multi'])){
         wp_safe_redirect(admin_url( 'admin.php?page=clpwp-plugin-option' ));
         exit;
       }
     }
   }
?>