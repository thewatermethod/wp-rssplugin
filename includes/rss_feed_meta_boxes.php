<?php

function rss_feed_add_meta_box(){

	add_meta_box( 'rss_feed_meta_box', 'Feed Settings:', 'rss_feed_render_meta_box', array( 'post_type' => 'tg_rss'), 'advanced', 'high' );
}

function rss_feed_render_meta_box( $post ){
	
	$rss_feed_url = get_post_meta( $post->ID, 'rss_feed_url', true);
	$blog_type = get_post_meta( $post->ID, 'blog_type', true)

	?>
		<fieldset>
			<label for="rss_feed_url">RSS Feed</label>
			<input type="text" id="rss_feed_url" name="rss_feed_url" value="<?php echo $rss_feed_url; ?>"/>
		</fieldset>

	<?php

	if($rss_feed_url != '') {

		echo '<h2>Recent Content</h2>';
		$rss = fetch_feed( $rss_feed_url ); 	
		$rss_content = $rss->get_items(0, 2);
		var_dump( $rss_content[1]->get_description() );
	}
}


add_action( 'add_meta_boxes', 'rss_feed_add_meta_box' );

function rss_feed_save_rss_feed( $ID, $post){

	if( isset($_POST['rss_feed_url'] ) ){
		update_post_meta( $ID, 'rss_feed_url', $_POST['rss_feed_url'] );
	}
}

add_action('save_post', 'rss_feed_save_rss_feed', 10, 2);
