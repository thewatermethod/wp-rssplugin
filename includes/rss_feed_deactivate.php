<?php
	
	function rss_feed_deactivate(){

		//delete the "From RSS" category
		$term = get_term_by('name', 'From RSS', 'category');
		wp_delete_category( $term->term_id );

		//clear schedule
		wp_clear_scheduled_hook('rss_feed_parse_feed');			

	}


	function has_post_been_published(){
		$t = get_posts( array('category_name' => 'From RSS') );
		if( !is_empty($t) ){
			return true;
		} else {
			return false;
		}
	}