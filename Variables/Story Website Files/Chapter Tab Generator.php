<?php 

$i2 = $i + 1;
$i3 = $i + 2;

if ($site_uses_new_comment_and_read_displayer == True) {
	$number_variable = $chapter_number_1;
}

if ($write_new_chapter == True) {
	array_push($chapter_titles, $chapters + 1);
}

# Read Generator PHP File Includer
require $read_generator;

# Comment Generator PHP File Includer
require $comment_generator;

# Defines the top and bottom texts
if ($website_write_story_setting == True and $story_name_website_chapter_to_write == $chapter_number_1) {
	if ($website_story_has_titles == True) {
		$top_and_bottom_chapter_text = "\n\n"."<b>".$you_are_writing_story_text."<br />"."\n".$chapter_text_name.": ".$chapter_number_1." - ".$chapter_titles[$chapter_number_4]."</b>"."\n\n";
	}

	else {
		$top_and_bottom_chapter_text = "\n\n"."<b>".$you_are_writing_story_text."<br />"."\n".$chapter_text_name.": ".$chapter_number_1."</b>"."\n\n";
	}
}

else {
	if ($website_story_has_titles == True) {
		$top_and_bottom_chapter_text = "\n\n"."<b>".$you_are_reading_story_text."<br />"."\n".$chapter_text_name.": ".$chapter_number_1." - ".$chapter_titles[$chapter_number_4]."</b>"."\n\n";
	}

	else {
		$top_and_bottom_chapter_text = "\n\n"."<b>".$you_are_reading_story_text."<br />"."\n".$chapter_text_name.": ".$chapter_number_1."</b>"."\n\n";
	}
}

# Tab div id, a name and big space generator
echo "\n";
echo '<a name="'.$chapter_div_text.$chapter_number_1.'"></a>'."\n";

if ($write_new_chapter == True and $chapter_number_1 == $chapters + 1) {
	$display_variable = 'display:none;';
}

else {
	$display_variable = 'display:none;';
}

if ($website_name == $website_nazzevo) {
	$border_color = $background_black_css_class;
}

else {
	$border_color = "";
}

echo '<div id="'.$chapter_div_text.$chapter_number_1.'" class="city '.$alternative_full_tab_style." ".$third_full_border." ".$border_color." ".$border_4px_solid_css_class.'" style="'.$display_variable.$hstyle2.''.$rounded_border_style_2.'">'."\n";
echo '<br class="'.$mobile_variable.'" /><br class="'.$mobile_variable.'" /><br class="'.$mobile_variable.'" /><br class="'.$mobile_variable.'" /><br class="'.$mobile_variable.'" /><br class="'.$mobile_variable.'" />'."\n";
echo '<br />'."\n";

if ($selected_website != $website_desert_island) {
	$span_variable = $yellowspan;
}

if ($selected_website == $website_desert_island) {
	$span_variable = $cyanspan;
}

# "You're Reading [Story]" top text displayer
if ($story_uses_status == True) {
	if ($chapter_number_1 == $chapters and $story_status != $story_status_texts[0] and $story_status != $story_status_texts[3]) {
		echo '<div class="'.$computer_variable.'">'.'<'.$n.' class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle5.'">'.$div_zoom_animation.'<br />'.$top_and_bottom_chapter_text.$span_variable.'<b> ['.$new_text.'!]</b>'.$spanc.'<br />'.$div_close.'</'.$n.'>'.$div_close."\n";

		echo '<div class="'.$mobile_variable.'">'.'<'.$m.' class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle5.'">'.$div_zoom_animation.'<br />'.$top_and_bottom_chapter_text.$span_variable.'<b> ['.$new_text.'!]</b>'.$spanc.$div_close.'</'.$m.'>'.$div_close."\n";

		$chapter_number_4++;
	}

	else {
		echo '<div class="'.$computer_variable.'">'.'<'.$n.' class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle5.'">'.$div_zoom_animation.'<br />'.$top_and_bottom_chapter_text.$div_close.'</'.$n.'>'.$div_close."\n";

		echo $margin.'<div class="'.$mobile_variable.'">'.'<'.$m.' class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle5.'">'.$div_zoom_animation.'<br />'.$top_and_bottom_chapter_text.$div_close.'</'.$m.'>'.$div_close."\n".$div_close."\n";
	
		$chapter_number_4++;
	}
}

else {
	if ($chapter_number_1 == $chapters) {
		echo '<div class="'.$computer_variable.'">'.'<'.$n.' class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle5.'">'.$div_zoom_animation.'<br />'.$top_and_bottom_chapter_text.$span_variable.'<b> ['.$new_text.'!]</b>'.$spanc.'<br />'.$div_close.'</'.$n.'>'.$div_close."\n";

		echo '<div class="'.$mobile_variable.'">'.'<'.$m.' class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle5.'">'.$div_zoom_animation.'<br />'.$top_and_bottom_chapter_text.$span_variable.'<b> ['.$new_text.'!]</b>'.$spanc.$div_close.'</'.$m.'>'.$div_close."\n";

		$chapter_number_4++;
	}

	else {
		echo '<div class="'.$computer_variable.'">'.'<'.$n.' class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle5.'">'.$div_zoom_animation.'<br />'.$top_and_bottom_chapter_text.$div_close.'</'.$n.'>'.$div_close."\n";

		echo $margin.'<div class="'.$mobile_variable.'">'.'<'.$m.' class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle5.'">'.$div_zoom_animation.'<br />'.$top_and_bottom_chapter_text.$div_close.'</'.$m.'>'.$div_close."\n".$div_close."\n";
	
		$chapter_number_4++;
	}
}

# H5 header and hr creator
echo "\n";
echo '<h5 class="'.$alternative_full_tab_style.'" style="'.$hstyle.'text-align:left;"><hr class="'.$third_full_border.'" />'."\n";

# Top Previous chapter button
if ($chapter_number_1 != 1) {
	if ($website_story_has_titles == True) {
		$chapter_number_and_text = " - ".ucwords($chapter_text). ": ".$chapter_number_3." - ".str_replace("'", "", $chapter_titles[$chapter_number_3 - 1]);
	}

	if ($website_story_has_titles == False) {
		$chapter_number_and_text = " - ".ucwords($chapter_text). ": ".$chapter_number_3;
	}

	$change_title_on_click_script = "Add_To_Website_Title('".$chapter_number_and_text."', 'notification');";

	if ($new_write_style == True) {
		$on_click_script = 'openCity('."'".$chapter_div_text.$chapter_number_3."'".');'.$change_title_on_click_script;
		$on_click_script = $on_click_script.'Define_Chapter('.$chapter_number_3.');Replace_Chapter_Write_Content_With_Read_Content(Read_Content_'.$chapter_number_3.');';
	}

	else if ($new_write_style == false) {
		$on_click_script = 'openCity('."'".$chapter_div_text.$chapter_number_3."'".');'.$change_title_on_click_script;
	}

	echo '<a href="#'.$chapter_div_text.$chapter_number_3.'"><button class="w3-btn '.$second_button_style.'" style="float:left;'.$rounded_border_style_2.'" onclick="'.$on_click_script.'"><h3><i class="fas fa-arrow-circle-left"></i></h3></button></a>'."\n";

	$has_previous_chapter_button = True;
}

else {
	$has_previous_chapter_button = False;
}

# Top Next chapter button
if ($chapter_number_1 != $chapters and $chapter_number_1 != $chapters + 1) {
	if ($website_story_has_titles == True) {
		$chapter_number_and_text = " - ".ucwords($chapter_text). ": ".($chapter_number_4 + 1)." - ".str_replace("'", "", $chapter_titles[$chapter_number_4]);
	}

	if ($website_story_has_titles == False) {
		$chapter_number_and_text = " - ".ucwords($chapter_text). ": ".($chapter_number_4 + 1);
	}

	$change_title_on_click_script = "Add_To_Website_Title('".$chapter_number_and_text."', 'notification');";

	if ($new_write_style == True) {
		$on_click_script = 'openCity('."'".$chapter_div_text.$chapter_number_2."'".');'.$change_title_on_click_script;
		$on_click_script = $on_click_script.'Define_Chapter('.$chapter_number_2.');Replace_Chapter_Write_Content_With_Read_Content(Read_Content_'.$chapter_number_2.');';
	}

	else if ($new_write_style == false) {
		$on_click_script = 'openCity('."'".$chapter_div_text.$chapter_number_2."'".');'.$change_title_on_click_script;
	}

	echo '<a href="#'.$chapter_div_text.$chapter_number_2.'"><button class="w3-btn '.$second_button_style.'" style="float:right;'.$rounded_border_style_2.'" onclick="'.$on_click_script.'"><h3><i class="fas fa-arrow-circle-right"></i></h3></button></a>'."\n";

	$has_next_chapter_button = True;
}

else {
	$has_next_chapter_button = False;
}

if ($new_write_style == True) {
	if ($has_previous_chapter_button == True) {
		$local_button_style = 'float: left;margin-left: 15px;'.$rounded_border_style_2;
	}

	if ($has_previous_chapter_button == false) {
		$local_button_style = 'float: left;'.$rounded_border_style_2;
	}

	$edit_story_chapter_button = '<span id="edit_story_chapter_button_number_'.$chapter_number_1.'" style="display:none;">Write_Content_'.$chapter_number_1.'</span>'.

	'<button id="'.$write_button_text.'-'.$chapter_number_1.'" title="Edit Story Chapter Button" class="w3-btn '.$second_button_style.'" style="'.$local_button_style.'" onclick="Write_Chapter(Write_Content_'.$chapter_number_1.');"><h3><i class="fas fa-pen"></i></h3></button>'.
	"\n"."\n";

	$show_story_chapter_text_button = '<span id="show_story_chapter_text_button_number_'.$chapter_number_1.'" style="display:none;">Read_Content_'.$chapter_number_1.'</span>'.
	'<button id="'.$write_button_text.'-'.$chapter_number_1.'" class="w3-btn '.$second_button_style.'" style="'.$local_button_style.'" onclick="Replace_Chapter_Write_Content_With_Read_Content(Read_Content_'.$chapter_number_1.');"><h3><i class="fas fa-book"></i></h3></button>'.

	'<button id="write-button-'.$chapter_number_1.'" title="Edit Story Chapter Button" class="w3-btn '.$second_button_style.'" style="'.$local_button_style.'" onclick="Write_Chapter(Write_Content_'.$chapter_number_1.');"><h3><i class="fas fa-pen"></i></h3></button>'.
	"\n"."\n";

	$show_story_chapter_text_button = '<span id="show_story_chapter_text_button_number_'.$chapter_number_1.'" style="display:none;">Read_Content_'.$chapter_number_1.'</span>'.
	'<button id="write-button-'.$chapter_number_1.'" class="w3-btn '.$second_button_style.'" style="'.$local_button_style.'" onclick="Replace_Chapter_Write_Content_With_Read_Content(Read_Content_'.$chapter_number_1.');"><h3><i class="fas fa-book"></i></h3></button>'.

	"\n"."\n";

	# Edit story button displayer
	echo $edit_story_chapter_button;
	echo '<div style="display:none;">'.$show_story_chapter_text_button.$div_close;
}

# "Go back to the chapter buttons tab" button
if ($has_next_chapter_button == True) {
	$local_button_style = 'float: right;margin-right: 15px;'.$rounded_border_style_2;
}

if ($has_next_chapter_button == false) {
	$local_button_style = 'float: right;'.$rounded_border_style_2;
}

echo '<a href="#'.$citycodes[0].'">'.
'<button class="w3-btn '.$second_button_style.' '.$computer_variable.'" style="'.$local_button_style.'" onclick="openCity('."'".$citycodes[0]."')".'"><h3>'.$icons[16].'</h3></button>'.
'</a>'."\n";

echo '<a href="#'.$tabcodesm[0].'">'.
'<button class="w3-btn '.$second_button_style.' '.$mobile_variable.'" style="'.$local_button_style.'" onclick="openCity('."'".$tabcodesm[0]."')".'"><h3>'.$icons[16].'</h3></button>'.
'</a>'."\n";

if ($write_new_chapter == True and $chapter_number_1 != $chapters + 1) {
	#"Write new chapter" button
	echo '<a href="#'.$write_new_chapter_tab_text.'">'.
	'<button class="w3-btn '.$second_button_style.'" style="float:right;margin-right:15px;'.$rounded_border_style_2.'" onclick="openCity('."'".$chapter_div_text.($chapters + 1)."')".'"><h3>'.$icon_plus.'</h3></button></a>'."\n";
}

echo '<br /><br /><br /><br />'."\n";

echo $div_zoom_animation."\n";

# Story cover shower if story has the website_story_has_book_covers_setting setting as True
if ($website_story_has_book_covers_setting == True and $story_shows_story_covers == True) {
	echo "<center>"."\n";

	if (isset($chapter_cover_images_computer[$book_cover_number]) and isset($chapter_cover_images_mobile[$book_cover_number])) {
		echo $chapter_cover_images_computer[$book_cover_number];
		echo $chapter_cover_images_mobile[$book_cover_number];
	}

	echo "</center>"."\n";
	echo "<br />"."\n";
}

if ($new_write_style == False) {
	echo '<div id="'.$chapter_tab_div_text.$chapter_number_1.'" style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" unselectable="on" onselectstart="return false;" onmousedown="return false;">'."\n";
}

if ($new_write_style == True) {
	echo '<div class="'.$chapter_tab_div_text."class".'" id="'.$chapter_tab_div_text.$chapter_number_1.'">'."\n";
}

$website_write_story_setting = False;

# Chapter writer tab displayer
if ($website_write_story_setting == True and $story_name_website_chapter_to_write == $chapter_number_1 or $website_write_story_setting == True and $story_name_website_chapter_to_write.(int)'0' == $chapter_number_1 and $chapter_number_1 != 0) {
	echo '<div id="'.$chapter_tab_div_text.$chapter_number_1.'">'."\n";

	require $chapter_writer_displayer_php;

	if ($new_write_style == True) {
		#echo $new_write_stylescript."\n";
	}

	echo $div_close."\n";
	echo $div_close."\n";
	echo '<br /><br />'."\n";
}

# Chapter text tab displayer
else {
	require $chapter_text_displayer_php;
}

# Bottom Previous chapter button
if ($chapter_number_1 != 1) {
	if ($website_story_has_titles == True) {
		$chapter_number_and_text = " - ".ucwords($chapter_text). ": ".$chapter_number_3." - ".str_replace("'", "", $chapter_titles[$chapter_number_3 - 1]);
	}

	if ($website_story_has_titles == False) {
		$chapter_number_and_text = " - ".ucwords($chapter_text). ": ".$chapter_number_3;
	}

	$change_title_on_click_script = "Add_To_Website_Title('".$chapter_number_and_text."', 'notification');";

	if ($new_write_style == True) {
		$on_click_script = 'openCity('."'".$chapter_div_text.$chapter_number_3."'".');'.$change_title_on_click_script;
		$on_click_script = $on_click_script.'Define_Chapter('.$chapter_number_3.');Replace_Chapter_Write_Content_With_Read_Content(Read_Content_'.$chapter_number_3.');';
	}

	else if ($new_write_style == false) {
		$on_click_script = 'openCity('."'".$chapter_div_text.$chapter_number_3."'".');'.$change_title_on_click_script;
	}

	echo '<a href="#'.$chapter_div_text.$chapter_number_3.'"><button class="w3-btn '.$second_button_style.'" style="float:left;'.$rounded_border_style_2.'" onclick="'.$on_click_script.'"><h3><i class="fas fa-arrow-circle-left"></i></h3></button></a>'."\n";

	$has_previous_chapter_button = True;
}

# Bottom Next chapter button
if ($chapter_number_1 != $chapters) {
	if ($website_story_has_titles == True) {
		$chapter_number_and_text = " - ".ucwords($chapter_text). ": ".($chapter_number_4 + 1)." - ".str_replace("'", "", $chapter_titles[$chapter_number_4]);
	}

	if ($website_story_has_titles == False) {
		$chapter_number_and_text = " - ".ucwords($chapter_text). ": ".($chapter_number_4 + 1);
	}

	$change_title_on_click_script = "Add_To_Website_Title('".$chapter_number_and_text."', 'notification');";

	if ($new_write_style == True) {
		$on_click_script = 'openCity('."'".$chapter_div_text.$chapter_number_2."'".');'.$change_title_on_click_script;
		$on_click_script = $on_click_script.'Define_Chapter('.$chapter_number_2.');Replace_Chapter_Write_Content_With_Read_Content(Read_Content_'.$chapter_number_2.');';
	}

	else if ($new_write_style == false) {
		$on_click_script = 'openCity('."'".$chapter_div_text.$chapter_number_2."'".');'.$change_title_on_click_script;
	}

	echo '<a href="#'.$chapter_div_text.$chapter_number_2.'"><button class="w3-btn '.$second_button_style.'" style="float:right;'.$rounded_border_style_2.'" onclick="'.$on_click_script.'"><h3><i class="fas fa-arrow-circle-right"></i></h3></button></a>'."\n";

	$has_next_chapter_button = True;
}

$to_comment_button_text = $to_comment_text." ".$icons_array["Comment"];

# Computer Comment button
if ($website_has_comments_tab == True and $story_has_chapter_comments == True) {
	echo '<div class="'.$computer_variable.'">'."\n";
	echo '<button class="w3-btn '.$second_button_style.' '.$computer_variable.'" id="comment_button_'.$a.'" style="margin-left:15px;float:right;'.$rounded_border_style_2.'"><h3><b>'.$to_comment_button_text.'</b></h3></button>'."\n";
	echo $div_close."\n";
}

$i_read_it_button_text = $i_read_it_text." ".$icons_array["Reader"];

# Computer "I Read it" button
if ($story_has_reads == True) {
	echo '<div class="'.$computer_variable.'">'."\n";
	echo '<button class="w3-btn '.$second_button_style.' '.$computer_variable.'" id="readbtn'.$a.'" style="margin-left:15px;float:right;'.$rounded_border_style_2.'"><h3><b>'.$i_read_it_button_text.'</b></h3></button>'."\n";
	echo $div_close."\n";
	echo $big_space_mobile_and_computer;
}

# Mobile Comment button
if ($website_has_comments_tab == True and $story_has_chapter_comments == True) {
	echo "\n";
	echo '<div class="'.$mobile_variable.'"><br /><br />'."\n".$div_close."\n";
	echo '<div class="'.$mobile_variable.'">'."\n";
	echo '<button class="w3-btn '.$second_button_style.' '.$mobile_variable.'" id="comment_button_'.$a.'m" style="margin-left:15px;float:right;'.$rounded_border_style_2.'"><'.$m.'><b>'.$to_comment_button_text.')</b></'.$m.'></button>'."\n";
	echo '<br /><br />'."\n";
	echo $div_close."\n";
}

# Mobile "I Read it" button
if ($story_has_reads == True) {
	echo '<div class="'.$mobile_variable.'">'."\n";
	echo '<button class="w3-btn '.$second_button_style.' '.$mobile_variable.'" id="readbtn'.$a.'m" style="margin-left:15px;float:right;'.$rounded_border_style_2.'" onclick="openCity('."'".'modal-read-'.$a."m')".'"><'.$m.'><b>'.$i_read_it_text.' ('.$readed_number.' '.$icons[20].')</b></'.$m.'></button>'."\n";
	echo $div_close."\n";
	echo '<br /><div class="'.$mobile_variable.'"><br /><br />'."\n".'</div>'."\n";
}

if ($story_has_chapter_comments == False and $story_has_reads == False) {
	echo '<br /><br /><br />'."\n";
}

# "You're Reading [Story]" bottom text
if ($story_uses_status == True) {
	if ($chapter_number_1 == $chapters and $story_status != $story_status_texts[0] and $story_status != $story_status_texts[3]) {
		echo '<div style="text-align:center;">'."\n".
		$div_zoom_animation."\n".
		'<span class="'.$alternative_full_tab_style.'">'."\n".
		'<br />'.$top_and_bottom_chapter_text."\n".
		'<b>'.$span_variable.'['.$new_text.'!]'.$spanc.'</b>'."\n".
		'<br /></span>'."\n".
		$div_close."\n".
		$div_close."\n";

		$chapter_number_7++;
	} 

	else {
		echo '<div style="text-align:center;">'."\n".
		$div_zoom_animation."\n".
		'<span class="'.$alternative_full_tab_style.'">'."\n".
		'<br />'.$top_and_bottom_chapter_text.'<br />'."\n".
		'</span>'."\n".
		$div_close."\n".
		$div_close."\n";

		$chapter_number_7++;
	}
}

else {
	if ($chapter_number_1 == $chapters) {
		echo '<div style="text-align:center;">'."\n".
		$div_zoom_animation."\n".
		'<span class="'.$alternative_full_tab_style.'">'."\n".
		'<br />'.$top_and_bottom_chapter_text."\n".
		'<b>'.$span_variable.'['.$new_text.'!]'.$spanc.'</b>'."\n".
		'<br /></span>'."\n".
		$div_close."\n".
		$div_close."\n";

		$chapter_number_7++;
	} 

	else {
		echo '<div style="text-align:center;">'."\n".
		$div_zoom_animation."\n".
		'<span class="'.$alternative_full_tab_style.'">'."\n".
		'<br />'.$top_and_bottom_chapter_text.'<br />'."\n".
		'</span>'."\n".
		$div_close."\n".
		$div_close."\n";

		$chapter_number_7++;
	}
}

# HR displayer if the story has comments or story_reads_array
if ($site_uses_new_comment_and_read_displayer == True) {
	if (isset($array1[$number_variable]) or isset($array2[$number_variable])) {
		echo '<hr class="'.$third_full_border.'" />'."\n";
	}

	else {
		echo $mobile_div.'<br />'.$div_close."\n";
	}
}

else if ($story_has_chapter_comments == True and $story_website_contains_comments == True or $story_has_reads == True and $story_website_contains_reads == True) {
	echo '<hr class="'.$third_full_border.'" />'."\n";
}

echo '</h5>'."\n";

/*
if ($story_has_chapter_comments == True and $story_website_contains_comments == True or $story_has_reads == True and $story_website_contains_reads == True) {
	require $new_chapter_comment_and_read_displayer_php_variable;
}
*/

if ($site_uses_new_comment_and_read_displayer == True) {
	if ($story_has_chapter_comments == True and $story_website_contains_comments == True) {
		require $new_chapter_comment_and_read_displayer_php_variable;
	}
}

else if ($story_has_chapter_comments == True and $story_website_contains_comments == True or $story_has_reads == True and $story_website_contains_reads == True) {
	require $chapter_comment_and_read_displayer_php_variable;
}

echo $div_close."\n";

# Adds to the variables
$i++;
$i2++;
$a++;

if (isset($h) == True) {
	if ($h != 0) {
		$h--;
	}
}

$chapter_number_1++;
$chapter_number_2++;
$chapter_number_3++;
$chapter_date_number++;
$chapter_date_number++;
$chapter_date_number++;
$book_cover_number++;

?>