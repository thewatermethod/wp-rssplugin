<?php

	//$terms = get_terms();

	$prohibited_terms = array();

	function tag_list( $string ){
		
		 $arr = array_count_values(str_word_count($string, 1));
		 
		 foreach ($arr as $key => $value) {
		 	if( $value < 1 || strlen($value) < 4 ){
		 		unset( $arr[$key] );
		 	}
		 }

		 return $arr;
	}