<?php
/*
	Admin menu
*/

// Add options to database
add_action( 'admin_init', 'alphacollate_admin_init' );

// Add the settings page for collation in the admin dashboard menu.
if ( !function_exists( 'alphacollate_admin_init' )){
	function alphacollate_admin_init(){
		// Add settings to admin
		add_settings_section( 'alphacollate_collation_section', '', '', 'reading' );	
		add_settings_field( 'alphacollate_collation_language', 'Alphabetical Sort by Language', 'alphacollate_select_collation_language', 'reading', 'alphacollate_collation_section' );
		// Register settings
		register_setting( 'reading', 'alphacollate_collation_language' );		
	}
}

// Create the dropdown for setting the collation language.   
if ( !function_exists( 'alphacollate_select_collation_language' )){
	function alphacollate_select_collation_language(){
		
		$alphacollate_options = get_option( 'alphacollate_collation_language' );
		
		// Get the collation language array.
		$collation_languages_array = alphacollate_get_collation_language_array();

		echo '<select name="alphacollate_collation_language" type="text" id="alphacollate_collation_language" class="regular-text" />';
		foreach ( $collation_languages_array as $collation_code => $collation_language){
			echo '<option value="' . esc_attr( $collation_code ) . '"' . selected( $alphacollate_options, $collation_code, false) . '>';
			echo $collation_language;
			echo "</option>";
		}
	
		echo "</select>";
	}
}






