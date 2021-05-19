<?php 

#Defines some number variables
$chapter_number_1 = 1;
$chapter_number_2 = 2;
$chapter_number_3 = 0;
$chapter_number_4 = 0;
$chapter_number_4a = 0;
$chapter_number_7 = 0;
$chapter_text_name = str_replace("s", "", $chapters_text);

$reads_array = array(Null);

$chapter_write_to_folder = $story_chapter_files_folder_language.'Test/';

# Chapter file text link array generator, it generates the array to access the text files of the chapters
$chapter_date_number = 1;
$a = 1;
$z = 1;
while ($a <= $chapters) {
	$a2 = $a - 1;

	$z_text = $z;

	if ($a <= 9) {
		$z_text = "0".$z_text;
	}

	if ($website_story_has_titles == True) {
		$normal_chapters[$a] = $story_chapter_files_folder_language.$z_text.' - '.$chapter_titles[$a2].'.txt';
		$normal_chapters[$a] = str_replace(array("\r\n", "\r", "\n", "%EF%BB%BF", "%EF", "%BB", "%BF", "U+FEFF", "/uFEFF", "^", "?", "<br />"), "", $normal_chapters[$a]);
	}

	else {
		$normal_chapters[$a] = $story_chapter_files_folder_language.$z_text.'.txt';
		$normal_chapters[$a] = str_replace(array("\r\n", "\r", "\n", "%EF%BB%BF", "%EF", "%BB", "%BF", "U+FEFF", "/uFEFF", "^", "?", "<br />"), "", $normal_chapters[$a]);
	}

	$z++;
	$a++;
}

#Chapter file text link array generator for the English language, it generates the array to access the English text files of the chapters
$a = 1;
$z = 1;

if (strpos($host_text, $website_translate_story_setting.'=true')) {
	$main_story_folder_3 = $story_chapter_files_folder.strtoupper($enus_language).'/';
}

if (strpos($host_text, $website_translate_story_setting.'=false') or strpos($host_text, $website_translate_story_setting.'='.'false') == false) {
	$main_story_folder_3 = $story_chapter_files_folder.strtoupper($website_language).'/';
}

while ($a <= $chapters) {
	$a2 = $a - 1;

	$main_story_folder_4 = $story_chapter_files_folder.strtoupper($enus_language).'/';

	if ($a <= 9) {
		$text_to_add = "0";
	}

	if ($a > 9) {
		$text_to_add = "";
	}

	if ($website_story_has_titles == True) {
		$english_chapters[$a] = $main_story_folder_4.$text_to_add.$z.' - '.$chapter_titles_enus[$a2].'.txt';
		$english_chapters[$a] = str_replace(array("\r\n", "\r", "\n", "%EF%BB%BF", "%EF", "%BB", "%BF", "U+FEFF", "/uFEFF", "^", "?", "<br />"), "", $english_chapters[$a]);
	}

	else {
		$english_chapters[$a] = $main_story_folder_4.$text_to_add.$z.'.txt';
		$english_chapters[$a] = str_replace(array("\r\n", "\r", "\n", "%EF%BB%BF", "%EF", "%BB", "%BF", "U+FEFF", "/uFEFF", "^", "?", "<br />"), "", $normal_chapters[$a]);
	}

	$z++;
	$a++;
}

#Chapter date file reader, it generates the capdate array which contains the date that the chapter was written
$a = 0;
$z = 0;
if ($story_has_dates == True) {
	while ($a <= $chapters) {
		$a2 = $a - 1;

		$chapter_dates_file = $story_info_folder.'Chapter Written Dates.txt';

		$fp = fopen($chapter_dates_file, 'r', 'UTF-8'); 
		if ($fp) {
			$chapter_dates = explode("\n", fread($fp, filesize($chapter_dates_file)));
			$chapter_dates = str_replace("^", "", $chapter_dates);
		}

		$chapter_dates[$a] = str_replace(array("\r\n", "\r", "\n"), "<br />", $chapter_dates[$a]);
	
		$z++;
		$a++;
	}
}

echo "\n";

if ($story_has_reads == True and $story_website_contains_reads == True) {
	require $read_generator_php;

	$h = $readed_number;
}

$z123 = 0;
$chapter_line_number = 0;
$b1 = 0;
$b2 = 1;

if ($site_uses_new_comment_and_read_displayer == True and $story_website_contains_reads == True and $story_website_contains_comments == True) {
	if ($website_name == $website_the_life_of_littletato) {
		$comments_array = array(
		null,
		$story_chapter_comments_array[0],
		[$story_chapter_comments_array[1], $story_chapter_comments_array[6]],
		$story_chapter_comments_array[2],
		null,
		null,
		null,
		null,
		null,
		);
	}

	if ($website_name == $website_spaceliving) {
		$comments_array = array(
		null,
		$story_chapter_comments_array[0],
		null,
		$story_chapter_comments_array[1],
		$story_chapter_comments_array[2],
		null,
		null,
		null,
		null,
		);
	}
}

$zw = 1;
$zq = 1;
$za = 2;
$mzz = 10;
$zzcxx = 3;
$book_cover_number = 1;
$a = 1;

echo '<div id="'.strtolower($chapters_text).'-div">'."\n";

#Chapter reader/writer/displayer, it generates the tabs for the chapters to be read by the user
while ($chapter_number_1 <= $chapters) {
	require $chapter_tab_generator_php_variable;
}

if ($write_new_chapter == True) {
	require $chapter_tab_generator_php_variable;
}

$write_chapter_55 = False;

if ($write_chapter_55 == True) {
	$chapter_number_1 = 55;
	$chapter_number_4 = 54;

	require $chapter_tab_generator_php_variable;
}

echo '</div>'."\n";

while ($chapter_number_1 <= $chapters) {
	$test_script = '';

	echo $test_script;
}

if ($story_has_reads == True) {
	#Read-modal Tab generator PHP file
	require $read_modal_generator_php;
}

if ($website_has_comments_tab == True and $story_has_chapter_comments == True) {
	#Comment-modal Tab generator PHP file
	require $comment_modal_generator_php;
}

?>