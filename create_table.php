<?php
/**
 * Plugin Name: Used Car Lot
 * Plugin URI: http://plugins.svn.wordpress.org/used-car-lot/
 * Description: Simple, no-frills plugin that uses a Child Theme with TwentyTen to make a used car dealship.
 * Version: 0.0.3
 * Author: James Haney
 * Author URI: http://jehtech.com
 * License: GPL2
 **/

$date = ('Y-m-d');
register_activation_hook(__FILE__, 'activate_used_car');
function activate_used_car(){
    if (!isset($wpdb)) $wpdb = $GLOBALS['wpdb'];
    global $wpdb;
    
    $table_name1 = $wpdb->prefix . "cars";
    $sql1 = "CREATE TABLE $table_name1 (
  id int(11) NOT NULL AUTO_INCREMENT,
  year int(4) NOT NULL,
  make VARCHAR(30) NOT NULL,
  body_style VARCHAR(30) NOT NULL,
  engine VARCHAR(30) NOT NULL,
  trans VARCHAR(30) NOT NULL,
  drivetrain VARCHAR(30) NOT NULL,
  ext_color VARCHAR(30) NOT NULL,
  int_color VARCHAR(30) NOT NULL,
  mileage int(7) NOT NULL,
  vin int(50) NOT NULL,
  description TEXT NOT NULL,
  detail_folder_name VARCHAR(40) NOT NULL,
  image_name VARCHAR(40) NOT NULL,
  purchase_price DECIMAL(11) NOT NULL,
  sale_price DECIMAL(11) NOT NULL,
  sold VARCHAR(3) NOT NULL,
  date date NOT NULL,
  PRIMARY KEY id  (id)
);";

    $table_name2 = $wpdb->prefix . "cars_detail_image";
    $sql2 = "CREATE TABLE $table_name2 (
  id int(11) NOT NULL AUTO_INCREMENT,
  detail_folder_name VARCHAR(40) NOT NULL,
  image_name VARCHAR(40) NOT NULL,
  date date NOT NULL,
  PRIMARY KEY id  (id)
);";

    @$rows = $wpdb->query("SELECT * FROM $table_name1");
    
    if($rows === false){
    
    require_once (ABSPATH . 'wp-admin/includes/upgrade.php');
    $wpdb->query($sql1);
    $wpdb->query($sql2);

    //create page
    $inventory = array(
        'post_title' => 'Inventory',
        'post_type' => 'page',
        'post_status' => 'publish',
        );
    $post1 = wp_insert_post($inventory);
 
     //set page template
    update_post_meta($post1, "_wp_page_template", "Display Cars Template.php");

    //create page
    $edit_inventory = array(
        'post_title' => 'Edit Inventory',
        'post_type' => 'page',
        'post_status' => 'Publish',
        );
    $post2 = wp_insert_post($edit_inventory);

    //set page template
    update_post_meta($post2, "_wp_page_template", "Display Edit Template.php");

    //create page
    $upload = array(
        'post_title' => 'Upload',
        'post_type' => 'page',
        'post_status' => 'publish',
        );
    $post3 = wp_insert_post($upload);

    update_post_meta($post3, "_wp_page_template", "Upload Car Template.php");
    
    //create page
    $add_detail_image = array(
        'post_title' => 'Add Detail Image',
        'post_type' => 'page',
        'post_status' => 'publish',
        );
    $post4 = wp_insert_post($add_detail_image);
    
    update_post_meta($post4, "_wp_page_template", "Add Detail Image Template.php");
    
    //create page
    $detail_display = array(
        'post_title' => 'Detail Display',
        'post_type' => 'page',
        'post_status' => 'Draft',
        );
    $post5 = wp_insert_post($detail_display);
    
    update_post_meta($post5, "_wp_page_template", "Detail Display Template.php");
    
    //create page
    $detail_image_upload = array(
        'post_title' => 'Detail Image Upload',
        'post_type' => 'page',
        'post_status' => 'Draft',
        );
    $post6 = wp_insert_post($detail_image_upload);
    
    update_post_meta($post6, "_wp_page_template", "Detail Img Upload Template.php");
    
    //create page
    $add_detail_image = array(
        'post_title' => 'Detail Uploader',
        'post_type' => 'page',
        'post_status' => 'Draft',
        );
    $post7 = wp_insert_post($add_detail_image);
    
    update_post_meta($post7, "_wp_page_template", "Add_Detail_Image_Template.php");

    //create page
    $edit = array(
        'post_title' => 'Edit',
        'post_type' => 'page',
        'post_status' => 'Draft',
        );
    $post8 = wp_insert_post($edit);
    
    update_post_meta($post8, "_wp_page_template", "Edit Car Template.php");
    
    //create page
    $email = array(
        'post_title' => 'Email',
        'post_type' => 'page',
        'post_status' => 'Draft',
        );
    $post9 = wp_insert_post($email);
    
    update_post_meta($post9, "_wp_page_template", "Email_Template.php");
    
    //create page
    $contact = array(
        'post_title' => 'Contact',
        'post_type' => 'page',
        'post_status' => 'Draft',
        );
    $post10 = wp_insert_post($contact);
    
    update_post_meta($post10, "_wp_page_template", "Contact_Template.php"); 
	
	//create page
    $upload_car_processor = array(
        'post_title' => 'Upload Car Processor',
        'post_type' => 'page',
        'post_status' => 'Draft',
        );
    $post11 = wp_insert_post($upload_car_processor);
    
    update_post_meta($post11, "_wp_page_template", "Upload_car_Processor_Template.php"); 
    
    }
}


 

