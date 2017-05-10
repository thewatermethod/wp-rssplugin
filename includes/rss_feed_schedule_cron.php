<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function rss_feed_parse_feed_schedule(){

	$timestamp = wp_next_scheduled( 'rss_feed_parse_feed' );

	if( $timestamp == false ){    
		wp_schedule_event( time(), 'daily', 'rss_feed_parse_feed' );
	}

}

add_action( 'rss_feed_parse_feed', 'rss_parse' );

function rss_parse(){

	date_default_timezone_set('America/New_York');
	$date_int = 1;
	$date = date('Y-m-d H:i:s', strtotime('+'.$date_int.' hours'));

	$all_posts = get_posts( array('post_status' => array( 'publish', 'draft', 'future' ) ) );
	
	// grabs the "rss_metas"
	if( false === get_transient('rss_metas') ){

		$metas = array();

		foreach( $all_posts as $post){
			$metas[] .= get_post_meta( $post->ID, 'rss_id', true) ;
		}

	} else {

		$metas = get_transient('rss_metas');

	}

	$feeds = get_posts( array('post_type' => 'tg_rss') );

	foreach( $feeds as $feed ){

		$rss_feed_url = get_post_meta( $feed->ID, 'rss_feed_url', true);
		$rss = fetch_feed( $rss_feed_url );
		
		//checks to make sure the xml is valid
		if( !is_wp_error($rss) ){ 

			//grabs the id to see if we need to 
			$rss_content = $rss->get_items(0, 0);
			$draft_post_id = $rss_content[0]->get_id();

			if( !in_array( $draft_post_id, $metas) ){  

				$draft_post_title = $rss_content[0]->get_title() . ' - ' . $feed->post_title;			

				$draft_post_content = '<P>New Post from ' . $feed->post_title . '</p>'; 

				$img = '<p><img src="'. rss_feed_catch_that_image( $rss_content[0]->get_description() ) . '"></p>';

				$tags = tag_list( strip_tags( $rss_content[0]->get_content() ));
				
				$draft_blockquote = strip_tags( $rss_content[0]->get_description() );
				$draft_blockquote = substr( $draft_blockquote, 0, 500);
				$draft_blockquote .= '...';	

				$draft_post_content .= $img . '<blockquote>' . $draft_blockquote . '</blockquote>';

				$draft_post_content .= '<a class="readMore tgrss" href="' . $rss_content[0]->get_permalink() .'">Read more here</a>';

				$new_post = wp_insert_post( 
					array( 	
							'post_title' => $draft_post_title, 
							'post_content' => $draft_post_content, 
							'meta_input' => array( 'rss_id' => $draft_post_id ), 
							'post_status' => 'future',
							'post_date'	=> $date,										
						)
				);

				$cat = create_cat_term( $feed->post_title );

				wp_set_post_terms( $new_post, $cat, 'category' );
				wp_set_post_terms( $new_post, $tags );			

				$metas[] .= $draft_post_id;

				$date_int++;

			}
		}


	}

	set_meta_transients( $metas );

}