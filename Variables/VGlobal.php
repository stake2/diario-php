<?php

#VGlobal.php $sitefolder, site, cdn and fontawesome link variables
$sitefolder = strtolower($site);
$site = $sitefolder;
$cdn = $url.'cdn/';
$local_cdn = $mega_folder_diario.'cdn/';

$cdnimg = $cdn.'img/';
$local_cdn_img = $local_cdn.'img/';
$cdn_image_stories = $cdnimg.'Stories/';
$cdn_image_drawings = $cdnimg.'Drawings/';
$local_cdn_image_drawings = $local_cdn_img.'Drawings/';

$cdntxt = $cdn.'txt/';
$cdn_txt_moviecomments = $cdntxt.'Movie Comments/';

$cdnjs = $cdn.'js/';
$cdncss = $cdn.'css/';

$fontawesome_link = 'https://use.fontawesome.com/releases/v5.8.2/css/all.css';
#$fontawesome_link = 'https://use.fontawesome.com/releases/v5.14.0/css/all.css';
$fontawesome_script = '<script src="https://kit.fontawesome.com/df0c191291.js" crossorigin="anonymous"></script>';

#Notepad/Bloco De Notas folder variables
$notepad_folder = $mega_folder.'Bloco De Notas/';

$notepad_folder_effort = $notepad_folder.'Dedicação/';
$notepad_folder_effort_networks = $notepad_folder_effort.'Networks/';
$notepad_folder_effort_medianetwork = $notepad_folder_effort_networks.'Media Network/';

$diario_folder = $notepad_folder.'Diario/';
$diario_folder_blocks = $diario_folder.'Blocks/';

$notepad_stories_folder = $notepad_folder_effort.'Historias/';
$notepad_years_folder = $notepad_folder_effort.'Anos/';

$notepad_stories_folder_variable = $notepad_stories_folder;
$notepad_years_folder_variable = $notepad_years_folder;
$notepad_folder_effort_variable = $notepad_folder_effort;

$story_files_php_folder = $php_variables.'Story PHP Files/';
$newdesign_php_folder = $php_variables.'New Design/';

$story_files_php_folder_variable = $story_files_php_folder;
$newdesign_php_folder_variable = $newdesign_php_folder;

$sitebuttons_files_php_folder = $php_tabs.'Sites Buttons Tab/';
$sitebuttons_files_php_folder_variable = $sitebuttons_files_php_folder;

#Global PHP Files
$siteheaderfilephp = $php_variables.'SiteHeader.php';
$globalstylefilephp = $php_variables.'GlobalStyle.php';
$tabgeneratorphp = $php_variables.'Tab Generator.php';
$topbuttonscreator = $php_variables.'Top Buttons Creator.php';
$topbuttonsloader = $php_variables.'Buttons PHP File Loader.php';
$textfilereaderphp = $php_variables.'TextFileReader.php';

#Useless SiteStyle PHP file
$stylefilephp = $php_variables.'SiteStyle.php';

#New Design PHP Files
$newdesignphp = $newdesign_php_folder_variable.'NewDesignScript.php';
$newdesignsitephp = $newdesign_php_folder_variable.'NewDesignSite.php';

$vyears_php = $php_tabs_variable.$folder3.'/'.'V'.$folder3.'.php';

#PHP Files
$globalfilesphp = array(
$formfile = $php_variables.'FormFile.php',
$notificationsphp = $php_variables.'Notifications.php',
$city_bodies_generator_php = $php_variables.'CityBodies Generator.php',
$sitesbuttonsattributes = $sitebuttons_files_php_folder_variable.'SitesButtons Attributes.php',
$sitesbuttonstab = $sitebuttons_files_php_folder_variable.'SitesButtons Tab.php',
$sitesbuttonscreator = $sitebuttons_files_php_folder_variable.'Sites Button Creator.php',
);

$city_bodies_generator_php_variable = $city_bodies_generator_php;

#Story PHP files
$story_variables_php = $story_files_php_folder_variable.'StoryVars.php';
$story_links_php = $story_files_php_folder_variable.'Story Links.php';
$cover_images_displayer_php = $story_files_php_folder_variable.'Cover Images Displayer.php';
$cover_images_generator_php = $story_files_php_folder_variable.'Cover Images Generator.php';
$chapter_button_generator_php = $story_files_php_folder_variable.'CapButton Generator.php';
$chapter_text_displayer_php = $story_files_php_folder_variable.'Chapter Text Displayer.php';
$chapter_writer_displayer_php = $story_files_php_folder_variable.'Chapter Writer Displayer.php';
$chapter_comment_and_read_displayer_php = $story_files_php_folder_variable.'Chapter Comment And Read Displayer.php';
$new_chapter_comment_and_read_displayer_php = $story_files_php_folder_variable.'New Chapter Comment And Read Displayer.php';
$story_reads_generator_php = $story_files_php_folder_variable.'Story Reads Generator.php';
$read_modal_generator_php = $story_files_php_folder_variable.'Read Modal Generator.php';
$comment_modal_generator_php = $story_files_php_folder_variable.'Comment Modal Generator.php';

$story_variables_php_variable = $story_variables_php;
$story_links_php_variable = $story_links_php;
$cover_images_displayer_php_variable = $cover_images_displayer_php;
$cover_images_generator_php_variable = $cover_images_generator_php;
$chapter_button_generator_php_variable = $chapter_button_generator_php;
$chapter_comment_and_read_displayer_php_variable = $chapter_comment_and_read_displayer_php;
$new_chapter_comment_and_read_displayer_php_variable = $new_chapter_comment_and_read_displayer_php;
$story_reads_generator_php_variable = $story_reads_generator_php;
$read_modal_generator_php_variable = $read_modal_generator_php;
$comment_modal_generator_php_variable = $comment_modal_generator_php;

#GlobalTabs array
$globaltabs = array(
$chapter_generator_global = $php_global_tabs.'Chapters Generator '.$global.'.php',
$readersglobal = $php_global_tabs.'Readers'.$global.'.php',
$commentsglobal = $php_global_tabs.'Comments'.$global.'.php',
$writeglobal = $php_global_tabs.'Write'.$global.'.php',
$storiesglobal = $php_global_tabs.'Stories'.$global.'.php',
);

$chapter_generator_global_variable = $chapter_generator_global;

#Watch PHP files
$mediaarraygenerator = $php_tabs.'Watch/MediaArrayGenerator.php';
$mediastyler = $php_tabs.'Watch/MediaStyler.php';
$watchedmediageneratorphp = $php_tabs.'Watch/WatchedMedia2020 Generator.php';
$watchtextsphp = $php_tabs.'Watch/WatchTexts.php';

#Years PHP Files
$yearsvarsfilephp = $php_tabs.'Years/YearsVars.php';

#English texts for all websites
if (in_array($lang, $en_langs)) {
	$andtxt = 'and';
	$newtxt = 'New';
	$ortxt = 'or';
	$numbertxt = 'number';
	$langreadtext = 'Read';
	$imglinktxt = 'image link';
	$siteicon = '🇺🇸';
	$btnmenutxt = 'Mobile button menu: ';
	$editbtntxt1 = 'Edit text';
	$editbtntxt2 = 'Activate';
	$editbtntxt3 = 'Deactivate';
	$copybtntxt1 = 'Copy HTML';
	$copybtntxt2 = 'Copy text';
	$redondodesc = 'Round revolution ahead!';
	$covertxt = 'Cover';
	$cannotfindfiletxt = 'This file could not be found, sorry';

	if ($newdesign == true) {
		$newdesigntxts = array(
		'Story menu',
		'Chapter menu',
		);
	}
}

#Brazilian Portuguese texts for all websites
if (in_array($lang, $pt_langs)) {
	$andtxt = 'e';
	$newtxt = 'Novo';
	$newtxt2 = 'Nova';
	$ortxt = 'ou';
	$numbertxt = 'número';
	$langreadtext = 'Ler';
	$imglinktxt = 'link da imagem';
	$siteicon = '🇧🇷';
	$btnmenutxt = 'Menu de botões mobile: ';
	$editbtntxt1 = 'Editar texto';
	$editbtntxt2 = 'Ativar';
	$editbtntxt3 = 'Desativar';
	$copybtntxt1 = 'Copiar HTML';
	$copybtntxt2 = 'Copiar texto';
	$redondodesc = 'Revolução redonda avante!';
	$covertxt = 'Capa';
	$cannotfindfiletxt = 'Não foi possível encontrar este arquivo, desculpe';

	if ($newdesign == true) {
		$newdesigntxts = array(
		'Menu de histórias',
		'Menu de capítulos',
		);
	}
}

$langreadtext2 = strtolower($langreadtext);

#Watch History and YearWebsites year variables
if ($sitename == $sitewatch or in_array($sitename, $yeararray)) {
	$anoanterior = $ano - 1;
	$anos = array(
	'2018', 
	'2019', 
	'2020',
	);

	$mediareader2018 = $php_tabs_variable.ucwords($site2018).'/'.$site2018.' MediaReader'.'.php';
	$mediareader2019 = $php_tabs_variable.ucwords($site2019).'/'.$site2019.' MediaReader'.'.php';

	if (in_array($lang, $en_langs)) {
		$watchedtypefile2018 = $notepad_years_folder_variable.$site2018.'/Watched VideoTypes '.$langs[1].'.txt';
	}

	if (in_array($lang, $pt_langs)) {
		$watchedtypefile2018 = $notepad_years_folder_variable.$site2018.'/Watched VideoTypes '.$langs[2].'.txt';
	}

	$watchedtypefile2019 = $notepad_years_folder_variable.$site2019.'/Watched VideoTypes.txt';
	$yearmakerfilephp2test = $php_tabs_variable.ucwords($sitetextmaker).'/YearMaker2.php';
	$yearmakerfilephp2test = str_replace(array("\r\n", "\r", "\n", "%EF%BB%BF", "%EF", "%BB", "%BF", "U+FEFF", "/uFEFF", "^"), "", $yearmakerfilephp2test);

	if (file_exists($watchedtypefile2018) == true) {
		$fp = fopen ($watchedtypefile2018, 'r', 'UTF-8'); 
		if ($fp) {
			$watchedfile2018 = explode("\n", fread($fp, filesize($watchedtypefile2018)));
		}
	}

	if (file_exists($watchedtypefile2019) == true) {
		$fp = fopen ($watchedtypefile2019, 'r', 'UTF-8'); 
		if ($fp) {
			$watchedfile2019 = explode("\n", fread($fp, filesize($watchedtypefile2019)));
		}
	}
}

#Css definers for specific websites
$sitecssfile = $setsitecssfile;

if ($newwritestyle == true) {
	$newwritestylescript = '<script src="'.$cdnjs.'WriteChapter.js"></script>'."\n";
}

else {
	$newwritestylescript = '';
}

#SuperAnimes test CSS and script
if ($newdesign == true) {
	#SuperAnimes test loader
	include $newdesignphp;

	$newdesigncss = $newdesigncss;
	$newdesignscript = $newdesignscript;
}

else {
	$newdesigncss = '';
	$newdesignscript = '';
}

#Notifications CSS and script includer
if ($sitehasnotifications == true) {
	$notificationcss = '<link rel="stylesheet" type="text/css" href="'.$cdncss.'Notification.css" />'."\n";
	$notificationscript = '<script src="'.$cdnjs.'Notification.js"></script>'."\n".
	'<script src="'.$cdnjs.'HideNotification.js"></script>';
}

if ($sitehasnotifications == false) {
	$notificationcss = '';
	$notificationscript = '';
}

if ($sitename == $sitetextmaker) {
	$editbtnscript = '<script src="'.$cdnjs.'EditBtn.js"></script>';
}

else {
	$editbtnscript = '';
}

#Site CSS definer
$sitecss = '<link rel="stylesheet" type="text/css" href="'.$cdncss.$sitecssfile.'.css" />
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css" />
<link rel="stylesheet" type="text/css" href="'.$cdncss.'w3.css" />
<link rel="stylesheet" type="text/css" href="'.$cdncss.'Colors.css" />
<link rel="stylesheet" type="text/css" href="'.$cdncss.'Stories.css" />
<link rel="stylesheet" type="text/css" href="'.$cdncss.'Mobile.css" />
<link rel="stylesheet" type="text/css" href="'.$cdncss.'ImgHover.css" />'."\n".
$notificationcss.
$newdesigncss;

#Site JavaScript definer
$sitejs = '<script src="'.$cdnjs.'Search.js"></script>
<script src="'.$cdnjs.'Tabs.js"></script>
<script src="'.$cdnjs.'Redirect.js" onLoad="Rodar();"></script>
<script src="'.$cdnjs.'ShowHide.js"></script>
<script src="'.$cdnjs.'SideMenu.js"></script>
<script src="'.$cdnjs.'Set Revised Date.js"></script>'."\n".
$editbtnscript.
$newdesignscript.
$newwritestylescript.
'<script src="https://code.jquery.com/jquery-3.5.1.js"></script>'."\n";

#Date style definer
date_default_timezone_set("America/Sao_Paulo");
$data = date("d/m/Y");

#SiteStyle.php includer
include $stylefilephp;

#Global CSS variables
require $globalstylefilephp;

#Stories variables includer if the site is a story site
require $story_variables_php_variable;

#SitesButtons Attributes.php includer
require $sitesbuttonsattributes;

#VYears.php file loader for YearsSites
if (in_array($sitename, $yeararray)) {
	require $vyears_php;
}

#Websites array
$i = 0;
foreach ($sitenamesarray as $value) {
	if ($sitename == $value) {
		require $sitefilevars[$i];
	}

	$i++;
}

#Site notifications includer if site has notifications activated
if ($sitehasnotifications == true) {
	require $notificationsphp;
}

require $sitesbuttonscreator;

if ($sitetype1 == $types[1]) {
	$br = '<br />';
	$border2 = 'border-width:3px;border-color:'.$bordercolor.';border-style:solid;';
}

else {
	$br = '<br /><br />';
	$border2 = 'border-width:3px;border-color:'.$bordercolor.';border-style:solid;';
}

if ($sitename == $sitepequenata) {
	$mainimage = '<img src="'.$imglink.'" width="'.$imagesize1.'%" class="'.$colortext.' '.$computervar.'" style="'.$border2.''.$roundedborderstyle4.'" />';
	$mainimagem = '<img src="'.$imglink.'" width="'.$imagesize2.'%" class="'.$colortext.' '.$mobilevar.'" style="'.$border2.''.$roundedborderstyle4.'" />';
}

else {
	$mainimage = '<img src="'.$imglink.'" width="'.$imagesize1.'%" class="'.$colortext.' '.$computervar.'" style="'.$border2.''.$roundedborderstyle2.'" />';
	$mainimagem = '<img src="'.$imglink.'" width="'.$imagesize2.'%" class="'.$colortext.' '.$mobilevar.'" style="'.$border2.''.$roundedborderstyle2.'" />';
}

$imgbtn = '<div class="'.$computervar.'">'.'<button class="w3-btn '.$btnstyle.'" '.$roundedborderstyle.' onclick="window.open('."'".$imglink."'".')">'.'<'.$m.'>'.ucfirst($imglinktxt).': '.$icons[2].'</'.$m.'>'.'</button>'.$divc;
$imgbtnm = '<div class="'.$mobilevar.'">'.'<button class="w3-btn '.$btnstyle.'" '.$roundedborderstyle.' onclick="window.open('."'".$imglink."'".')">'.'<'.$m.'>'.ucfirst($imglinktxt).': '.$icons[2].'</'.$m.'>'.'</button>'.$divc;

$imagens = $mainimage."\n".$imgbtn.
"\n".
$mainimagem."\n".$imgbtnm.
"\n";

$sitehead = '
<title>'.$sitetitulo.'</title>
<meta charset="UTF-8" />
<meta property="og:title" content="'.$sitetitulo.'" />
<meta property="og:site_name" content="'.$sitetitulo.'" />
<link rel="canonical" href="'.$siteurl.'" />
<meta property="og:url" content="'.$siteurl.'" />
<link rel="icon" href="'.$siteimage.'" />
<link rel="image_src" href="'.$siteimage.'" />
<meta property="og:image" content="'.$siteimage.'" />
<meta name="description" content="'.$sitedesc.'" />
<meta property="og:description" content="'.$sitedesc.'" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" value="@The_Snakes90" />
<meta name="twitter:creator" content="@The_Snakes90" />
'.$sitecss.
'<meta name="revised" content="'."Stake's Enterprisetm".', '.$data.'" />
<meta name="author" content="Stake Ferreira" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=yes" />'.
"\n".$fontawesome_script
/*'<link rel="stylesheet" href="'.$fontawesome_link.'" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />'*/;

if ($sitename == $sitetextmaker) {
	$sitedesc = $sitedesc;
}

if (in_array($sitename, $yeararray)) {
	$sitedesc = $sitedesc2;
}

if ($sitename != $sitetextmaker) {
	$sitedesc = $sitedesc;
}

require $siteheaderfilephp;

?>