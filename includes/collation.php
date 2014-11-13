<?php
/*
	Collation functions
*/

// Main function
if ( !function_exists( 'alphacollate_do_collation' )){
	function alphacollate_do_collation(){
		// Check if character set is valid before adding filters. 
		if ( true == alphacollate_check_collation_prerequisites() ){
			// add hook
			add_filter( 'get_terms_orderby' , 'alphacollate_terms_filter');
		}
	}
}

// Get the collation language
if ( !function_exists( 'alphacollate_get_collation_language' )){
	function alphacollate_get_collation_language(){
		// Get the collation set from the admin dashboard
		$collation_language = get_option( 'alphacollate_collation_language' );
		
		// If there is no collation set, check the value of DB_COLLATE in wp_config.php file 
		if ( $collation_language == '' ){
			$collation_language = DB_COLLATE;
		}	

		if ( true == alphacollate_check_collation_in_array( $collation_language ) ){
			return $collation_language;
		}else{
			return false;
		}
	}
}	

// Check collation language is in array
if ( !function_exists( ' alphacollate_check_collation_in_array' )){
	function alphacollate_check_collation_in_array( $collation_language ){
		if ( array_key_exists( $collation_language, alphacollate_get_collation_language_array() ) ){
			return true;
		}	
	}
}

// add collation to terms (tags, categories, taxonomies) "order by" in SQL query
if ( !function_exists( 'alphacollate_terms_filter' ) ){
	function alphacollate_terms_filter( $orderby ) {
	
		$collation_language =  alphacollate_get_collation_language();
	
		// Only do this if collation language is not empty
		if ( !$collation_language == '' ){
			// only add collation when ordering the terms by name, not when ordering by popularity, date, etc. 
			if ( strpos( $orderby , 'name' ) > 1 ) {
				// add collation to terms "order by" in the SQL query		
				$orderby = $orderby . " collate " . $collation_language;
			}	
		}
		return $orderby;
	}
}

// This checks if the character set is valid because the character set and collation need to be compatible.
// For example, if the character set is 'utf8' and the collation is 'utf8_swedish_ci', then it's compatible.
// If the character set is 'latin1' and the collation is 'utf8_swedish_ci', this is not compatible and will throw an error.  
if ( !function_exists( 'alphacollate_check_character_set' )){
	function alphacollate_check_character_set(){
	
		// Check if DB_CHARSET is defined in wp-config.php.
		// If there is no DB_CHARSET specified in wp-config, this might be an older version of WordPress and the database might not be utf8.
		if ( defined( 'DB_CHARSET' )){
			// Check if DB_CHARSET is set to 'utf8' in wp.config.
			// We are only doing the collation for character set utf8,
			// other character sets like latin1, gbk, big5, etc. are not supported
			// for compatibility and security reasons.
			if ( ( DB_CHARSET == 'utf8' ) ){
				return true;
			}
		}
		return false;
	}
}

// This checks whether collation is valid.
if ( !function_exists( 'alphacollate_check_collation' )){
	function alphacollate_check_collation(){
		// Check if DB_COLLATE is defined in wp-config.php.
		// If there is no DB_COLLATE specified in wp-config, this might be an older version of WordPress and the database might not be utf8.
		if ( defined( 'DB_COLLATE' )){
			// Check if DB_COLLATE is set to 'utf8' in wp.config.
			// We are only doing the collation for character set utf8,
			// other character sets like latin1, gbk, big5, etc. are not supported
			// for compatibility and security reasons.
			if ( ( DB_COLLATE == '' ) or ( true === strpos ( DB_COLLATE, 'utf8' ) )){		
				return true;
			}
		}
		return false;
	}
}

// Check if current character set and collation are valid
if ( !function_exists( 'alphacollate_check_collation_prerequisites' )){
	function alphacollate_check_collation_prerequisites(){
		if ( false == alphacollate_check_character_set() ) {
			return false;
		}
		if ( false == alphacollate_check_collation() ) {
			return false;
		}
		return true;
	}
}

// Get the collation language array.
// These are the collations of the utf8 character set supported by MySQL.
// Collations of other character sets (such as latin1, big5, etc) are not listed here.
if ( !function_exists( 'alphacollate_get_collation_language_array' )){
	function alphacollate_get_collation_language_array(){
		$collation_languages_array = array( 
			'' 									=> 'Default', 
			'utf8_general_ci.african' 			=> 'African',	
			'utf8_unicode_ci.african' 			=> 'African (Unicode)',
			'utf8_general_ci.american'			=> 'American',	
			'utf8_unicode_ci.american' 			=> 'American (Unicode)',		
			'utf8_general_ci.central_asian' 	=> 'Central Asian',	
			'utf8_unicode_ci.central_asian' 	=> 'Central Asian (Unicode)',
			'utf8_czech_ci' 					=> 'Czech', 	
			'utf8_danish_ci' 					=> 'Danish',	
			'utf8_esperanto_ci' 				=> 'Esperanto', 
			'utf8_estonian_ci' 					=> 'Estonian',		
			'utf8_general_ci.european' 			=> 'European', 
			'utf8_unicode_ci.european' 			=> 'European (Unicode)',	
			'utf8_hungarian_ci' 				=> 'Hungarian',
			'utf8_icelandic_ci' 				=> 'Icelandic',		
			'utf8_general_ci.indic' 			=> 'Indic',	
			'utf8_unicode_ci.indic' 			=> 'Indic (Unicode)',	
			'utf8_general_ci.ipa' 				=> 'Ipa',
			'utf8_unicode_ci.ipa' 				=> 'Ipa (Unicode)',
			'utf8_general_ci.korean' 			=> 'Korean',
			'utf8_unicode_ci.korean' 			=> 'Korean (Unicode)',
			'utf8_latvian_ci' 					=> 'Latvian',
			'utf8_lithuanian_ci' 				=> 'Lithuanian',	
			'utf8_general_ci.middle_eastern' 	=> 'Middle Eastern',
			'utf8_unicode_ci.middle_eastern' 	=> 'Middle Eastern (Unicode)',
			'utf8_persian_ci' 					=> 'Persian',
			'utf8_general_ci.philippine' 		=> 'Philippine',
			'utf8_unicode_ci.philippine' 		=> 'Philippine (Unicode)',
			'utf8_general_ci.phonetic' 			=> 'Phonetic',
			'utf8_unicode_ci.phonetic' 			=> 'Phonetic (Unicode)',
			'utf8_polish_ci' 					=> 'Polish',
			'utf8_roman_ci' 					=> 'Roman',
			'utf8_romanian_ci' 					=> 'Romanian',
			'utf8_sinhala_ci' 					=> 'Sinhala',
			'utf8_slovak_ci' 					=> 'Slovak',
			'utf8_slovenian_ci' 				=> 'Slovenian',
			'utf8_general_ci.south_east_asian' 	=> 'South East Asian',
			'utf8_unicode_ci.south_east_asian' 	=> 'South East Asian (Unicode)',
			'utf8_spanish_ci' 					=> 'Spanish',
			'utf8_spanish2_ci' 					=> 'Spanish 2',
			'utf8_swedish_ci' 					=> 'Swedish',
			'utf8_turkish_ci' 					=> 'Turkish'
	
		);
		return $collation_languages_array;	
	}
}




