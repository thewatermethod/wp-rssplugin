<?php
   /*
   Plugin Name: RSS Auto Poster 
   Plugin URI: http://www.twilitgrotto.com
   Description: Creates draft posts from RSS feeds!
   Version: 1.0
   Author: Matt Bevilacqua
   Author URI: http://www.mattbev.com
   License: GPL3   */

  if ( ! function_exists( 'add_filter' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
  }

    /* Get the RSS feed stuff from Wordpress  */ 
    require_once( ABSPATH . WPINC . '/feed.php' );

    /* some code for the terms */
    require_once( plugin_dir_path( __FILE__ ) . '/includes/dictionary.php' );

    /* transients*/
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_set_transients.php');

    /* gets possible terms from content*/
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_terms.php');

    /* the catch that image function */
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_catch_that_image.php'); 

    /* set up the rss feed custom post type*/
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_post_type.php' );
 
    /* set up the plugin options page */
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_custom_options_page.php');

    /* set up the rss meta boxes*/
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_meta_boxes.php');

    /* creates category*/
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_create_category.php');

    /* sets up the cron job */
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_schedule_cron.php');

    /* function to handle all the deactivation hooks */
    require_once( plugin_dir_path( __FILE__ ) . '/includes/rss_feed_deactivate.php');


    /* activation hooks */
    register_activation_hook( __FILE__, 'rss_feed_create_category' );
    register_activation_hook( __FILE__, 'rss_feed_parse_feed_schedule' );
    register_activation_hook( __FILE__, 'set_all_transients');

    /* deactivation hook */
    register_deactivation_hook( __FILE__, 'rss_feed_deactivate' );