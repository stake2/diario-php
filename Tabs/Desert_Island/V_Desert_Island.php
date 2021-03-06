<?php 

$story_name = $desert_island_story_name;

# New website name generator, generates: "desert_island"
$new_site_name = str_replace(' ', '_', strtolower($sitename_desertisland));

# Folder variables
$selected_website_url = $main_website_url.$new_site_name.'/';
$selected_website_folder = $php_folder_tabs.ucwords($selected_website).'/';
$story_folder = $desert_island_story_folder;

# Form code for the comment and read forms
$website_form_code = 'desert_island';

$no_language_story_folder = $notepad_stories_folder_variable.$story_folder.'/';

$single_cover_folder = 'Capas';
$cover_folder = $cdn_image_stories_desertisland.$single_cover_folder.'/';

# Defines the folder for the chapter text files that are going to be read and the cover folder on the CDN
require $cover_images_folder_definer_php_variable;

# Story name definer
$story_name_variable = $desert_island_story_name;

# Story status
$story_status = $status[1];

# Defines the website image if the website has book covers or not
if ($website_story_has_book_covers_setting == True) {
	$story_book_cover_filename = '1';

	$website_image = $story_chapter_covers_folder.$story_book_cover_filename.'.png';
	$website_image_size_computer = 60;
	$website_image_size_mobile = 100;
}

else {
	$website_image = $cdnimg.$website_image.'.jpg';

	$website_image_size_computer = 30;
	$website_image_size_mobile = 77;
}

$website_image_link = $website_image;

# Text File Reader.php file includer
require $text_file_reader_file_php;

$chapters = $chapter_number[0];

# Website descriptions
$website_descriptions_array = array(
'Website about my story, '.$story_name.', made by stake2', 
'Website sobre a minha história, '.$story_name.', feito por stake2',
);

# Synopsis text definer using the $story_synopsis that is generated from Text File Reader.php
$website_html_descriptions_array = array(
'Synopsis: <i class="fas fa-scroll"></i> "'.$story_synopsis[0].'"<br />',
'Sinopse: <i class="fas fa-scroll"></i> "'.$story_synopsis[1].'"<br />',
);

# Story Details Definer.php file includer
require $story_name_details_definer_php;

$comments_number = 1;
$comments_number_text = $comments_number + 1;
$website_comments_number = 0;
$website_comments_number_to_show = $website_comments_number - 1;
$number_of_chapter_comments = $comments_number_text - $website_comments_number;

$readed_number = 1;

# Reads the book cover image directory if the website has book covers
if ($website_story_has_book_covers_setting == True) {
	require $cover_images_generator_php_variable;
}

# Re-require of the StoryVars.php file to set the story name
require $story_variables_php;

# English texts for Desert Island website
if (in_array($website_language, $en_languages_array)) {
	$read_and_reader_texts_array = array(
	$reading_text = "You're reading",
	$reading_text.': '.ucwords($story_name),
	'I Read It ✓',
	'I read the Chapter',
	'Read the Chapter',
	'Readings',
	'Readers',
	'Reader',
	);

	$write_texts_array = array(
	'Write',
	'Write the Chapter',
	substr($reading_text, 0, -8).' '.strtolower('Writing').': '.ucwords($story_name),
	);
}

#Brazilian Portuguese texts for Desert Island website
if (in_array($website_language, $pt_languages_array)) {
	$read_and_reader_texts_array = array(
	$reading_text = "Você está lendo",
	$reading_text.': '.ucwords($story_name),
	'Eu li ✓',
	'Eu li o Capítulo',
	'Leu o Capítulo',
	'Leituras',
	'Leitores',
	'Leitor',
	);

	$write_texts_array = array(
	'Escrever',
	'Escreva o capítulo',
	substr($reading_text, 0, -6).' '.strtolower('Escrevendo').': '.ucwords($story_name),
	);
}

#Status text definer, that sets the status text with [] around it
$statustxt = '['.ucfirst($story_status).']';

#Website name, title, main_website_url and description setter
if ($website_language == $language_geral) {
	$website_language = $language_enus;
	$hyphen_separated_website_language = strtoupper($website_language);
	$hyphen_separated_website_language = substr_replace($hyphen_separated_website_language, '-', 2, 0);
	$website_language = $language_geral;

	$website_name = $enus_title.' '.$hyphen_separated_website_language;
	$website_title = $enus_title.' '.ucwords($website_language);
	$website_title_header = $enus_title.': '.$icons[11];
	$website_link = $selected_website_url;
	$website_meta_description = $website_descriptions_array[0];
	$website_header_description = $website_html_descriptions_array[0];

	$website_language = $language_geral;
}

if ($website_language == $language_enus) {
	$hyphen_separated_website_language = strtoupper($website_language);
	$hyphen_separated_website_language = substr_replace($hyphen_separated_website_language, '-', 2, 0);

	$website_name = $enus_title;
	$website_title = $enus_title;
	$website_title_header = $enus_title.': '.$icons[11];
	$website_link = $selected_website_url.strtolower($hyphen_separated_website_language).'/';
	$website_meta_description = $website_descriptions_array[0];
	$website_header_description = $website_html_descriptions_array[0];
}

if (in_array($website_language, $pt_languages_array)) {
	$hyphen_separated_website_language = strtoupper($website_language);
	$hyphen_separated_website_language = substr_replace($hyphen_separated_website_language, '-', 2, 0);

	if ($website_language == $ptpt_language) {
		$website_title = $websites_names_array[1].' '.strtoupper($hyphen_separated_website_language);
	}

	else {
		$website_title = $websites_names_array[1];
	}

	$website_name = $selected_website;
	$website_title_header = $story_name_variable.': '.$icons[11];
	$website_link = $selected_website_url.strtolower($hyphen_separated_website_language).'/';
	$website_meta_description = $website_descriptions_array[1];
	$website_header_description = $website_html_descriptions_array[1];
}

# Button names
$tab_texts = array(
$tab_names[0].': '.$icons[21].' '.$cyanspan.'['.$new_text.' '.$chapters.']'.$spanc,
$tab_names[1].': '.$icons[20].' '.' ❤️ '.' 😊',
$tab_names[2].': '.$icons[12],
$tab_names[3].': '.$icons[10],
$tab_names[4].': '.$icons[11],
$icons[13],
);

# Buttons and tabs definer
# Tab chapter_titles definer
$tab_titles = array(
$tab_names[0].': '.$icons[21].' '.$cyanspan.'['.$new_text.' '.$chapters.']'.$spanc,
$tab_names[1].': '.$icons[20].' '.' ❤️ '.' 😊',
$tab_names[2].': '.$icons[12],
$tab_names[3].': '.$icons[10],
$tab_names[4].': '.$yellowspan.$stories_number.$spanc.' '.$icons[11],
);

# Button names definer
$i = 0;
foreach ($tab_titles as $tabname) {
	$tab_texts[$i] = $tabname;

	$i++;
}

# Tab Generator.php includer
require $website_tabs_generator;

?>