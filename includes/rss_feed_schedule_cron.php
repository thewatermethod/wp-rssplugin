<?php
	
function rss_feed_parse_feed_schedule(){

	$timestamp = wp_next_scheduled( 'rss_feed_parse_feed' );

	if( $timestamp == false ){    
		wp_schedule_event( time(), 'daily', 'rss_feed_parse_feed' );
	}

}

add_action( 'rss_feed_parse_feed', 'rss_parse' );

function rss_parse(){

	$all_posts = get_posts( array('post_status' => array( 'publish', 'draft' ) ) );
	$metas = array();

	foreach( $all_posts as $post){
		$metas[] .= get_post_meta( $post->ID, 'rss_id', true) ;
	}

	$feeds = get_posts( array('post_type' => 'tg_rss') );

	foreach( $feeds as $feed ){
		
		$rss_feed_url = get_post_meta( $feed->ID, 'rss_feed_url', true);

		$rss = fetch_feed( $rss_feed_url );
		$rss_content = $rss->get_items(0, 0);

		$draft_post_id = $rss_content[0]->get_id();

		if( !in_array( $draft_post_id, $metas) ){  

			$draft_post_title = $rss_content[0]->get_title() . ' - ' . $feed->post_title;
			

			$draft_post_content = 'New Post from ' . $feed->post_title; 

			$img = '<img src="'. rss_feed_catch_that_image( $rss_content[0]->get_description() ) . '">';

			$tags = tag_list(preg_split("/[\s,]+/", strip_tags($rss_content[0]->get_content()) ));
			write_log($tags);

			$draft_blockquote = strip_tags( $rss_content[0]->get_description() );
			$draft_blockquote = substr( $draft_blockquote, 0, 500);
			$draft_blockquote .= '...';	



			$draft_post_content .= $img . '<blockquote>' . $draft_blockquote . '</blockquote>';

			$draft_post_content .= '<a class="readMore tgrss" href="' . $rss_content[0]->get_permalink() .'">Read more here</a>';

			$new_post = wp_insert_post( 
				array( 	'post_title' => $draft_post_title, 
						'post_content' => $draft_post_content, 
						'meta_input' => array( 'rss_id' => $draft_post_id ), 
						'post_status' => 'draft',									
					)
			);
		}
	}

}

