<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function rss_feed_catch_that_image( $source ) {

  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $source , $matches);
  if( is_array( $matches[1] ) && !empty( $matches[1] ) ){
	  $first_img = $matches[1][0];
  }

  return $first_img;
}	