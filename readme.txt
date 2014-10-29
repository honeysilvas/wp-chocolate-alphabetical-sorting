=== Chocolate Alphabetical Sorting ===
Contributors: honeysilvas
Donate link: http://silverhoneymedia.com
Tags: alphabetical, sorting, alphabetized, category, categories, tag, tags, terms, character, characters, language, local, international, accent, diacritic, marks
Requires at least: 4.0
Tested up to: 4.0
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This WordPress plugin sorts categories and tags by correct alphabetical order based on the collation rules of different languages (especially ones that have characters with diacritic or accent marks).

== Description ==

This plugin fixes incorrect alphabetical sorting for the different languages.

For example, the Swedish alphabet is ordered like this:

	A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Å Ä Ö 
	a b c d e f g h i j k l m n o p q r s t u v w x y z å ä ö
	
In Swedish alphabet rules, the following characters with diacritic marks should all be sorted after the character z. 

	Å, Ä, Ö, å, ä, and ö 
	
However, WordPress incorrectly sorts it like this:

	A Å Ä B C D E F G H I J K L M N O P Q R S T U V W X Y Z Ö 
	a å ä b c d e f g h i j k l m n o p q r s t u v w x y z ö
	
treating the characters A, Å, Ä the same as the character A, so it incorrectly sorts all these characters together. 

== Supported Languages ==

Chocolate Alphabet Sorting currently only supports the following collations in the utf8 character set.  

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


== Installation ==

1. Upload the entire 'wp-chocolate-alphabetical-sorting' folder to the '/wp-content/plugins/' directory of your WordPress installation
2. Activate the plugin through the 'Plugins' menu in WordPress
3. In your Dashboard, go to Settings > Reading.
4. Change the language under "Alphabetical Sort by Language".
5. That's it!



== Frequently Asked Questions ==

(will add later)


== Screenshots ==

(will add later)


== Changelog ==

= 1.0.0 =

Released


