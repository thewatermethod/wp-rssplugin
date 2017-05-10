<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
	
	function rss_feed_deactivate(){

		//clear schedule
		wp_clear_scheduled_hook('rss_feed_parse_feed');			

		//delete the transient
		delete_transient( 'rss_tags_dictionary' );
		delete_transient( 'rss_metas' );
		
	}