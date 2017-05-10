<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	function tag_list( $string ){

		if( false === ( $prohibited_terms = get_site_transient(  'rss_tags_dictionary' ) ) ){ 
			$prohibited_terms = set_dictionary_transient();; 
		} else {
			$prohibited_terms = get_site_transient( 'rss_tags_dictionary' );
		}

		$arr = array_count_values( str_word_count($string, 1) );

		foreach ($arr as $key => $value) {		
			
		 	if( $value < 3 || strlen( $key ) < 4 || preg_match('/[A-Z]/', $key) == 0|| in_array( $key, $prohibited_terms)){
		 		unset( $arr[$key] );		 		
			} else {
				 
				$arr[$key] = $key;

				if( !term_exists( $key, 'post_tag' ) ) {
					wp_insert_term( $key, 'post_tag');			 			
				}				
			}
		}

		 return $arr;		 
	}

	function create_cat_term( $term ){

		if( !term_exists( $term, 'category' ) ){
			$id = wp_insert_term( $term, 'category' );

		} else {
			$term = get_term_by( 'name', $term, 'category');
			$id = $term->term_id;
		}

		return $id;
	}