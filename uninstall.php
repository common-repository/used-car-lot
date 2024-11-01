<?php

if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
    exit();

  global $wpdb;
  $thetable1 = $wpdb->prefix."cars";
  //Delete any options that's stored also?
  //delete_option('wp_yourplugin_version');
  $wpdb->query("DROP TABLE IF EXISTS $thetable1");
  $thetable2 = $wpdb->prefix."cars_detail_image";
  //Delete any options that's stored also?
  //delete_option('wp_yourplugin_version');
  $wpdb->query("DROP TABLE IF EXISTS $thetable2");

$table_name = $wpdb->prefix . "posts";
$post1=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Inventory'"));
foreach ($post1 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$post2=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Edit'"));
foreach ($post2 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$post3=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Upload'"));
foreach ($post3 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$post4=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Edit Inventory'"));
foreach ($post4 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$post5=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Detail Uploader'"));
foreach ($post5 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$post6=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Detail Image Upload'"));
foreach ($post6 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$post7=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Add Detail Image'"));
foreach ($post7 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
$post8=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Detail Display'"));
foreach ($post8 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}

$post9=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Contact'"));
foreach ($post9 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}

$post10=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Email'"));
foreach ($post10 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}

$post11=$wpdb->get_col( $wpdb->prepare(" SELECT * FROM $table_name WHERE post_title = 'Upload Car Processor'"));
foreach ($post11 as $post_title){
    //echo "$post_title"."<br />";
    wp_delete_post($post_title,true);
}
?>