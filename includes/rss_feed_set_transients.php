<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	function set_all_transients(){
		set_dictionary_transient();
	}


	function set_meta_transients( $metas ){
		set_transient( 'rss_metas', $metas );
	}