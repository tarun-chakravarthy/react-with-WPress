<?php
/*
 * @wordpress-plugin
 * Plugin Name:       IWS Custom code
 * Author:            Add custom code
 * Author URI:        Tarun C D
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      5.6
 */

 remove_filter('the_excerpt', 'wpautop');
 remove_filter('the_content', 'wpautop');

 function iwsGetFeaturedImgSrc($obj, $filedName, $request) {
    if ($obj['featured_media']) {
        $img = wp_get_attachment_img_src($obj['featured_media'], 'full');
        return $img;
    }

    return false;
 };
// This is to get the img url (TODO: fix when learning WP)
 add_action('rest_api_init', function(){
    register_rest_field('post', 'featured_src', [
        'get_callback' => 'iwsGetFeaturedImgSrc',
    ]);
 });