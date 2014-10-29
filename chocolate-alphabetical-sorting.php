<?php
	/*
		Plugin Name:  Chocolate Alphabetical Sorting
		Plugin URI:  http://silverhoneymedia.com
		Description:   Sorts categories and tags by correct alphabetical order based on the collation rules of different languages (especially ones that have characters with diacritic or accent marks). This WordPress plugin fixes incorrect alphabetical sorting.
		Version:  1.0.0
		Author:  Honey Silvas
		Author URI:  http://honeysilvas.wordpress.com
		License: GPL2
 
		Copyright 2014 Honey Silvas (honeysilvas@gmail.com)
 
		Chocolate Alphabetical Sorting is free software: you can redistribute it and/or modify 
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 2 of the License, or
		any later version.
 
		Chocolate Alphabetical Sorting is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
		GNU General Public License for more details.
 
		You should have received a copy of the GNU General Public License
		along with Chocolate Alphabetical Sorting. If not, write to the Free Software
		Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// Require the files needed for this plugin.
require_once( 'includes/collation.php' );		// language collation functions

// Check if we are in the admin dashboard.
if ( is_admin() ){
	// require functions for language collation settings in the admin dashboard
	require_once( 'admin/collation-admin.php' );	
}
	
alphacollate_do_collation();

	





