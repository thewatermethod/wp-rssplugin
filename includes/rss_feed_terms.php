<?php

	function tag_list( $string ){

		$prohibited_terms = array( 
			'around',
			'Around',
			'Under',
			'under', 
			'leave',
			'Leave',
			'I\'ve',
			'they',
			'They',
			'This', 
			'this',
			'When', 
			'when',
			'Some',
			'some',
			'Such', 
			'such',
			'Their',
			'their',
			'When',
			'when',
			'Normal',
			'normal');
		
		$arr = array_count_values( str_word_count($string, 1) );

		foreach ($arr as $key => $value) {		

		 	if( $value < 3 || strlen( $key ) < 4 || preg_match('/[A-Z]/', $key) == 0|| in_array( $key, $prohibited_terms)){
		 		unset( $arr[$key] );		 		
			}

		}

		 write_log($arr);
		 return $arr;		 
	}