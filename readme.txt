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

This plugin fixes incorrect alphabetical sorting for the different languages in categories and tags.


== Supported Languages ==

Collation for the following languages are supported:

African, American English, Central Asian, Czech, Danish, Esperanto, Estonian, 
European, Hungarian, Icelandic, Indic, Ipa, Korean, Latvian, Lithuanian, 
Middle Eastern, Persian, Philippine, Phonetic, Polish, Roman, Romanian, Sinhala,  
Slovak, Slovenian, South East Asian, Spanish, Swedish, Turkish

== Supported Collations ==

The following collations are supported:

			utf8_general_ci.african
			utf8_unicode_ci.african
			utf8_general_ci.american
			utf8_unicode_ci.american		
			utf8_general_ci.central_asian
			utf8_unicode_ci.central_asian
			utf8_czech_ci
			utf8_danish_ci	
			utf8_esperanto_ci
			utf8_estonian_ci		
			utf8_general_ci.european
			utf8_unicode_ci.european	
			utf8_hungarian_ci
			utf8_icelandic_ci
			utf8_general_ci.indic
			utf8_unicode_ci.indic	
			utf8_general_ci.ipa
			utf8_unicode_ci.ipa
			utf8_general_ci.korean
			utf8_unicode_ci.korean
			utf8_latvian_ci
			utf8_lithuanian_ci
			utf8_general_ci.middle_eastern
			utf8_unicode_ci.middle_eastern
			utf8_persian_ci
			utf8_general_ci.philippine
			utf8_unicode_ci.philippine
			utf8_general_ci.phonetic
			utf8_unicode_ci.phonetic
			utf8_polish_ci
			utf8_roman_ci
			utf8_romanian_ci
			utf8_sinhala_ci
			utf8_slovak_ci
			utf8_slovenian_ci
			utf8_general_ci.south_east_asian
			utf8_unicode_ci.south_east_asian
			utf8_spanish_ci
			utf8_spanish2_ci
			utf8_swedish_ci
			utf8_turkish_ci
		
== Example ==
			
For example, the Swedish alphabet is ordered like this:

	A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Å Ä Ö 
	a b c d e f g h i j k l m n o p q r s t u v w x y z å ä ö
	
In Swedish alphabet rules, the following characters with diacritic marks should all be sorted after the character z. 

	Å, Ä, Ö, å, ä, and ö 
	
However, WordPress incorrectly sorts it like this:

	A Å Ä B C D E F G H I J K L M N O P Q R S T U V W X Y Z Ö 
	a å ä b c d e f g h i j k l m n o p q r s t u v w x y z ö
	
treating the characters A, Å, Ä the same as the character A, so it incorrectly sorts all these characters together. 


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

= 1.0.2 = 

Added validation.

= 1.0.1 = 

Improved Readme.txt

= 1.0.0 =

Released


