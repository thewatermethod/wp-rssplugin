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

   /* Get the RSS feed stuff from Wordpress
   */ 
   require_once( ABSPATH . WPINC . '/feed.php' );

   /* set up the rss feed custom post type*/
   require_once( '/includes/rss_feed_post_type.php' );
 
   /* set up the plugin options page */
   require_once('/includes/rss_feed_custom_options_page.php');

   /* set up the rss meta boxes*/
   require_once('/includes/rss_feed_meta_boxes.php');


if (!function_exists('write_log')) {
    function write_log ( $log )  {
        if ( true === WP_DEBUG ) {
            if ( is_array( $log ) || is_object( $log ) ) {
                error_log( print_r( $log, true ) );
            } else {
                error_log( $log );
            }
        }
    }
}


?>