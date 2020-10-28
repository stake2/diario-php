<?php 

$siteicons = array(
'📘',
'🦄',
'👁',
'📅',
'⊡',
'🎵',
'🎮',
'🗒',
);

$sitecodes = array(
'my_little_pony'.' '.$siteicons[1],
'watch'.' '.$siteicons[2],
'music'.' '.$siteicons[5],
'games'.' '.$siteicons[6],
'foobar_albums'.' '.$siteicons[5],
'terraria_talk'.' '.$siteicons[6],
'tasks'.' '.$siteicons[7],
'things_I_do',
'years'.' '.$siteicons[3],
'2018',
'2019',
'2020',
'stories_historias'.' '.$siteicons[0],
'new_world'.' '.$siteicons[4],
'pequenata'.' '.$siteicons[0],
'new_world'.' '.$siteicons[4].'/'.'spaceliving'.' '.$siteicons[0],
'nazzevo'.' '.$siteicons[0],
'desert_island',
'lonely stories',
'mental_frameworks',
'template',
'stake2',
);

if (in_array($website_language, $en_languages_array)) {
	$thingsIdolink = $main_website_url.$sitecodes[7].'/';
}

if (in_array($website_language, $pt_languages_array)) {
	$thingsIdolink = $main_website_url.'coisas_que_eu_faço'.'/';
}

$sitelinks = array(
'https://printsofcomputer.netlify.app', #POCB Link
$main_website_url.$siteicons[0].'/',
$main_website_url.$sitecodes[0].'/',
$main_website_url.$sitecodes[1].'/',
$main_website_url.$sitecodes[2].'/',
$main_website_url.$sitecodes[3].'/',
$main_website_url.$sitecodes[4].'/',
$main_website_url.$sitecodes[5].'/',
$main_website_url.$sitecodes[6].'/',
$thingsIdolink, #Things I Do
$main_website_url.$sitecodes[8].'/',
$main_website_url.$sitecodes[9].'/',
$main_website_url.$sitecodes[10].'/',
$main_website_url.$sitecodes[11].'/',
$main_website_url.$sitecodes[12].'/',
$main_website_url.$sitecodes[13].'/',
$website_pequenata_link = $main_website_url.$sitecodes[14].'/',
$website_spaceliving_link = $main_website_url.$sitecodes[15].'/',
$website_nazzevo_link = $main_website_url.$sitecodes[16].'/',
$website_desert_island_link = $main_website_url.$sitecodes[17].'/',
$website_lonelystories_link = $main_website_url.$sitecodes[18].'/', #Lonely Stores
$main_website_url.$sitecodes[19].'/',
$main_website_url.$sitecodes[20].'/',
$main_website_url.$sitecodes[21].'/',
);

$story_namenames2 = array(
$sitename_pequenata = $pqntstoryname.' '.$siteicons[0],
$sitename_spaceliving = $slstoryname.' '.$siteicons[0],
$sitename_nazzevo = $nazzevostoryname.' '.$siteicons[0],
$sitename_desertisland = $desert_island_story_name,
$sitename_lonelystories = $lonely_story_name.' '.$siteicons[0],
);

if (in_array($website_language, $en_languages_array)) {
	$replacesitenamesarray = array(
	$sitename_diario = 'Diary'.' '.$siteicons[0],
	$sitename_music = 'Music'.' '.$siteicons[5],
	$sitename_games = 'Games'.' '.$siteicons[6],
	$sitename_foobaralbums = 'Foobar_Albums'.' '.$siteicons[5],
	$sitename_tasks = 'Tasks'.' '.$siteicons[7],
	$sitename_thingsido = 'Things I Do'.' '.$siteicons[7],
	$sitename_years = 'Years'.' '.$siteicons[3],
	$sitename_stories = 'Stories'.' '.$siteicons[0],
	$sitename_mentalframeworks = 'Mental_Frameworks',
	$sitename_websitetemplate = 'Website Template',
	);
}

if (in_array($website_language, $pt_languages_array)) {
	$replacesitenamesarray = array(
	$sitename_diario = 'Diário'.' '.$siteicons[0],
	$sitename_music = 'Música'.' '.$siteicons[5],
	$sitename_games = 'Jogos'.' '.$siteicons[6],
	$sitename_foobaralbums = 'Albuns do Foobar (Foobar_Albums)'.' '.$siteicons[5],
	$sitename_tasks = 'Tarefas'.' '.$siteicons[7],
	$sitename_thingsido = 'Coisas Que Eu Faço'.' '.$siteicons[7],
	$sitename_years = 'Anos'.' '.$siteicons[3],
	$sitename_stories = 'Histórias'.' '.$siteicons[0],
	$sitename_mentalframeworks = 'Frameworks Mentais',
	$sitename_websitetemplate = 'Modelo de Site',
	);
}

$websites_names_array = array(
'Prints Of Computer Blocks',
$sitename_diario,
'My Little Pony'.' '.$siteicons[1],
'Watch History'.' '.$siteicons[2],
$sitename_music,
$sitename_games,
$sitename_foobaralbums,
'Terraria_Talk'.' '.$siteicons[6],
$sitename_tasks,
$sitename_thingsido,
$sitename_years,
'2018 '.$siteicons[3],
'2019 '.$siteicons[3],
'2020 '.$siteicons[3],
$sitename_stories,
'New World'.' '.$siteicons[4],
$sitename_pequenata,
$sitename_spaceliving,
$sitename_nazzevo,
$sitename_desertisland,
$sitename_lonelystories,
$sitename_mentalframeworks,
$sitename_websitetemplate,
'Stake2',
);

$websites_names_array_2 = array(
'Prints Of Computer Blocks',
str_replace(' '.$siteicons[0], "", $sitename_diario),
'My Little Pony',
'Watch History',
str_replace(' '.$siteicons[5], "", $sitename_music),
str_replace(' '.$siteicons[6], "", $sitename_games),
str_replace(' '.$siteicons[5], "", $sitename_foobaralbums),
'Terraria_Talk',
str_replace(' '.$siteicons[7], "", $sitename_tasks),
str_replace(' '.$siteicons[7], "", $sitename_thingsido),
str_replace(' '.$siteicons[3], "", $sitename_years),
'2018',
'2019',
'2020',
str_replace(' '.$siteicons[0], "", $sitename_stories),
'New World',
str_replace(' '.$siteicons[0], "", $sitename_pequenata),
str_replace(' '.$siteicons[0], "", $sitename_spaceliving),
str_replace(' '.$siteicons[0], "", $sitename_nazzevo),
$sitename_desertisland,
str_replace(' '.$siteicons[0], "", $sitename_lonelystories),
$sitename_mentalframeworks,
$sitename_websitetemplate,
'Stake2',
);

/*
if (in_array($website_language, $en_languages_array)) {
	$replacesitenamesarray = array(
	$sitename_diario = 'Diary'.' '.$siteicons[0],
	$sitename_music = 'Music'.' '.$siteicons[5],
	$sitename_games = 'Games'.' '.$siteicons[6],
	$sitename_foobaralbums = 'Foobar_Albums'.' '.$siteicons[5],
	$sitename_tasks = 'Tasks'.' '.$siteicons[7],
	$sitename_thingsido = 'Things I Do'.' '.$siteicons[7],
	$sitename_years = 'Years'.' '.$siteicons[3],
	$sitename_stories = 'Stories'.' '.$siteicons[0],
	$sitename_mentalframeworks = 'Mental_Frameworks',
	$sitename_websitetemplate = 'Website Template',
	);
}

if (in_array($website_language, $pt_languages_array)) {
	$replacesitenamesarray = array(
	$sitename_diario = 'Diário'.' '.$siteicons[0],
	$sitename_music = 'Música'.' '.$siteicons[5],
	$sitename_games = 'Jogos'.' '.$siteicons[6],
	$sitename_foobaralbums = 'Albuns do Foobar (Foobar_Albums)'.' '.$siteicons[5],
	$sitename_tasks = 'Tarefas'.' '.$siteicons[7],
	$sitename_thingsido = 'Coisas Que Eu Faço'.' '.$siteicons[7],
	$sitename_years = 'Anos'.' '.$siteicons[3],
	$sitename_stories = 'Histórias'.' '.$siteicons[0],
	$sitename_mentalframeworks = 'Frameworks Mentais',
	$sitename_websitetemplate = 'Modelo de Site',
	);
}


$i = 0;
foreach ($sitetitlesarray as $value) {
	$websites_names_array[$i] = $value;

	$i++;
}

$i = 0;
foreach ($website_names_array as $value) {
	$sitelinks[$i] = $main_website_url.strtolower($value).'/';

	$i++;
}
*/

/*
$i = 0;
foreach ($websites_names_array as $value) {
	$varresource = strtolower($website_names_array[$i]);

	echo 'Before: '.$websites_names_array[$i].'<br />';
	echo 'Real var: '.${"sitename_$varresource"}.'<br />';

	if (in_array(${"sitename_$varresource"}, $websites_names_array)) {
		$websites_names_array[$i] = $replacesitenamesarray[$i];
	}

	echo 'After: '.$websites_names_array[$i].'<br />'.'<br />';

	$i++;
}
*/

$yearnames = array(
'2018',
'2019',
'2020',
);

$story_namelinks = array(
$website_pequenata_link,
$website_spaceliving_link,
$website_nazzevo_link,
$website_desert_island_link,
$website_lonelystories_link,
);

#$websites_number = count($website_names_array) - 1; #22

$websites_number = 23;
$story_name_websites_number = $storiesnumb - 1;
$websites_number_text = count($sitelinks);

$websites_buttons_style = $first_button_style;

#Normal Sites Buttons generator
$i = 0;
$websites_number = $websites_number;
while ($i <= $websites_number) {
	$websites_buttons_array[$i] = '<button class="w3-btn '.$websites_buttons_style.' '.$computer_variable.'" title="'.$websites_names_array[$i].'" '.$roundedborderstyle.' onclick='.'"window.open('."'".$sitelinks[$i]."');".'"'."><".$n.">".$websites_names_array[$i]."</".$n."></button>";

	$i++;
}

$i = 0;
$websites_number = $websites_number;
while ($i <= $websites_number) {
	$websites_buttons_mobile[$i] = '<button class="w3-btn '.$websites_buttons_style.' '.$mobile_variable.'" title="'.$websites_names_array[$i].'" '.$roundedborderstyle.' onclick='.'"window.open('."'".$sitelinks[$i]."');".'"'."><".$m.">".$websites_names_array[$i]."</".$m."></button>";

	$i++;
}


#Blue Sites Buttons generator
$i = 0;
$websites_number = $websites_number;
while ($i <= $websites_number) {
	$websites_buttons_blue[$i] = '<button class="w3-btn w3-blue '.$websites_buttons_style.' '.$computer_variable.'" title="'.$websites_names_array[$i].'" '.$roundedborderstyle.' onclick='.'"window.open('."'".$sitelinks[$i]."');".'"'."><".$n.">".$websites_names_array[$i]."</".$n."></button>";

	$i++;
}

$i = 0;
$websites_number = $websites_number;
while ($i <= $websites_number) {
	$websites_buttons_blue_mobile[$i] = '<button class="w3-btn w3-blue '.$websites_buttons_style.' '.$mobile_variable.'" title="'.$websites_names_array[$i].'" '.$roundedborderstyle.' onclick='.'"window.open('."'".$sitelinks[$i]."');".'"'."><".$m.">".$websites_names_array[$i]."</".$m."></button>";

	$i++;
}


#Stories Sites Buttons generator
$i = 0;
$storiessitenumb = $story_name_websites_number;
while ($i <= $storiessitenumb) {
	$story_name_websites_buttons[$i] = '<button class="w3-btn '.$websites_buttons_style.' '.$computer_variable.'" title="'.$story_namenames2[$i].'" '.$roundedborderstyle.' onclick='.'"window.open('."'".$story_namelinks[$i]."');".'"'."><".$n.">".$story_namenames2[$i]."</".$n."></button>";

	$i++;
}

$i = 0;
$storiessitenumb = $story_name_websites_number;
while ($i <= $storiessitenumb) {
	$story_name_websites_buttons_mobile[$i] = '<button class="w3-btn '.$websites_buttons_style.' '.$mobile_variable.'" title="'.$story_namenames2[$i].'" '.$roundedborderstyle.' onclick='.'"window.open('."'".$story_namelinks[$i]."');".'"'."><".$m.">".$story_namenames2[$i]."</".$m."></button>";

	$i++;
}


#Year Sites Buttons generator
$i = 0;
$z = 11;
while ($i <= $yearnumb) {
	$year_websites_buttons[$i] = '<button class="w3-btn '.$websites_buttons_style.' '.$computer_variable.'" title="'.$yearnames[$i].'" '.$roundedborderstyle.' onclick='.'"window.open('."'".$sitelinks[$z]."');".'"'."><".$n.">".$yearnames[$i].": ".$icons[3]."</".$n."></button>";

	$z++;
	$i++;
}

$i = 0;
$z = 11;
while ($i <= $yearnumb) {
	$year_websites_buttons_mobile[$i] = '<button class="w3-btn '.$websites_buttons_style.' '.$mobile_variable.'" title="'.$yearnames[$i].'" '.$roundedborderstyle.' onclick='.'"window.open('."'".$sitelinks[$z]."');".'"'."><".$m.">".$yearnames[$i].": ".$icons[3]."</".$m."></button>";

	$z++;
	$i++;
}

?>