<?php
/*
Plugin Name: Product List Plugin
Description: A plugin to display and delete products.
Version: 1.0
*/

// Enqueue scripts and styles
function enqueue_product_list_scripts_styles() {
   wp_enqueue_style('product-list-style', plugin_dir_url(__FILE__) . 'style.css');
   wp_enqueue_script('product-list-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), '1.0', true);

   // Localize script with the `ajaxurl` and nonce variables
   wp_localize_script('product-list-script', 'product_list_script_vars', array(
       'ajaxurl' => admin_url('admin-ajax.php'),
       'nonce'   => wp_create_nonce('product_list_nonce')
   ));
}
add_action('wp_enqueue_scripts', 'enqueue_product_list_scripts_styles');

// Include the functions file
include_once(plugin_dir_path(__FILE__) . 'functions.php');

// Shortcode to display product list
function product_list_shortcode() {
   ob_start();
   include(plugin_dir_path(__FILE__) . 'product-list.php');
   return ob_get_clean();
}
add_shortcode('product_list', 'product_list_shortcode');

// AJAX handler for deleting products
function delete_product() {
   check_ajax_referer('product_list_nonce', 'nonce');

   if (isset($_POST['product_name'])) {
       $product_name = sanitize_text_field($_POST['product_name']);
       $result = delete_product_from_file($product_name);

       if ($result) {
           wp_send_json_success(array('message' => 'Product deleted successfully'));
       } else {
           wp_send_json_error(array('message' => 'Error deleting product: Product not found'));
       }
   } else {
       wp_send_json_error(array('message' => 'Error deleting product: Invalid request'));
   }
}
add_action('wp_ajax_delete_product', 'delete_product');
?>
