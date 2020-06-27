<?php 

#CSS color and text style variables
$color2 = 'yellow';
$color3 = '#b88e50';
$color4 = 'bg2';
$color5 = 'bg';
$colortext = 'pqnttext';
$colorsubtext = 'w3-text-orange';
$colorsubtext2 = 'w3-text-white';
$sitehr = 'pqnthr';
$sitehr2 = 'pqnthr';
$sitehr3 = 'blackhr';
$spanstyle = "pqntspan";
$formbtnstyle = "pqntsend";

#Variables that mixes CSS tags
$textstyle = $colortext.' blackbg';
$textstyle2 = 'w3-text-black bg';
$btnstyle = $color4.' '.$cssbtn1;
$btnstyle2 = $color3.' '.$cssbtn1;
$btnstyle3 = $color5.' '.$cssbtn1;
$subtextspan = '<span class="'.$colorsubtext2.'">';
$subtextspan2 = '<span class="'.$colorsubtext.'">';
$spannewtextcolor = $subtextspan;
$sitewhilestyle = $color4;
$formcolor = $color4;

#HTML and HTML Style variables
$marginstyle1 = 'style="margin:10%;border-width:3px;border-color:'.$color3.';border-style:solid;'.$roundedborderstyle2.'"';
$marginstyle2 = 'style="margin-right:70%;border-width:3px;border-color:'.$color3.';border-style:solid;'.$roundedborderstyle2.'"';
$marginstyle3 = 'style="margin-right:70%;border-width:3px;border-color:'.$color3.';border-style:solid;'.$roundedborderstyle2.'"';
$border = 'border-width:4px;border-color:'.$color3.';border-style:solid;';
$border2 = 'border-width:7px;border-color:'.$color3.';border-style:solid;';
$h2 = '<'.$n.' class="'.$computervar.' '.$textstyle.'" style="margin:10%;border-width:3px;border-color:'.$color3.';border-style:solid;'.$roundedborderstyle2.'">';'.$roundedborderstyle2.';
$h4 = '<'.$m.' class="'.$mobilevar.' '.$textstyle.'" style="margin:10%;border-width:3px;border-color:'.$color3.';border-style:solid;">';
$h42 = '<'.$m.' class="'.$textstyle.'" style="margin:10%;border-width:3px;border-color:'.$color3.';border-style:solid;'.$roundedborderstyle2.'">';
$widthsize = '';
$size = '';

#Folder variables
$siteurlgeral = $url.$sitefolder.'/';
$sitephpfolder2 = $sitephpfolder.$global.'/'.$folder1.'/'.ucwords($choosenwebsite).'/';
$storyfolder = $pqntstoryfolder;

#Form code for the comment and read forms
$formcode = 'pequenata';

#Defines the folder for the chapter text files that are going to be read and the cover folder on the CDN
if ($lang == $langs[0]) {
	$lang = $langs[1];
	$rootstoryfolder2 = $rootstoryfolder.$storyfolder.'/'.strtoupper($lang).'/';

	if ($storyhascovers == true) {
		$coverfolder = $cdn.'/'.'img'.'/'.'stories'.'/'.$formcode.'/'.'Capas'.'/'.'kids'.'/'.strtoupper($lang).'/';
		$coverfolder2 = substr($rootstoryfolder2, 0, -5).'Foto'.'/'.'Capas'.'/'.'Kids'.'/'.strtoupper($lang).'/';
	}

	$lang = $langs[0];
}

else {
	$rootstoryfolder2 = $rootstoryfolder.$storyfolder.'/'.strtoupper($lang).'/';

	if ($storyhascovers == true) {
		$coverfolder = $cdn.'/'.'img'.'/'.'stories'.'/'.$formcode.'/'.'capas'.'/'.'kids'.'/'.strtoupper($lang).'/';
		$coverfolder2 = substr($rootstoryfolder2, 0, -5).'Foto'.'/'.'Capas'.'/'.'Kids'.'/'.strtoupper($lang).'/';
	}
}

#Story name definer
$story = $pqntstoryname;

#Story status
$storystatus = $status[2];

#Site image vars
$siteimage = 'pequenata';

#Defines the site image if the site has book covers or not
if ($storyhascovers == true) {
	$siteimage = $coverfolder.'1 '.$covertxt.'.png';
	$imagesize1 = 60;
	$imagesize2 = 88;
}

else {
	$siteimage = $cdn.'/'.'img'.'/'.$siteimage.'.jpg';
	$imagesize1 = 30;
	$imagesize2 = 77;
}

$imglink = $siteimage;

#Site numbers
$crossover = 26;
$commentsnumb = 16;
$commentsnumbtext = $commentsnumb + 1;
$commentsnormalnumb = 10;
$commentsnormalnumbtowrite = $commentsnormalnumb - 1;
$commentschapternumb = $commentsnumbtext - $commentsnormalnumb;
$readednumb = 12;

#Non-language dependent texts
$authorname = 'Izaque Sanvezzo (stake2)';
#$commentsbtn = '<a href="#'.$tabcode[6].'"><button class="w3-btn '.$btnstyle.' '.$computervar.'" onclick="openCity('."'".$tabcode[6]."')".'">'.$commentsnumb.' '.$icons[12].'</button></a>'."\n";
#$commentsbtnm = '<a href="#'.$tabcodem[6].'"><button class="w3-btn '.$btnstyle.' '.$mobilevar.'" onclick="openCity('."'".$tabcodem[6]."')".'">'.$commentsnumb.' '.$icons[12].'</button></a>'."\n";

#TextFileReader.php file includer
include $textfilereaderphp;

#Story date definer using story date text file
$storydate = $storydate[0];

#The chapter that I want to write
if ($chaptertowrite == false) {
	$sitestorywritechapter = '';
}

else {
	$sitestorywritechapter = (int)$chaptertowrite;
}

#Reviewed chapter number
$reviewedcap = 10;

#Site descriptions
$sitedescs = array(
'Website about my story, '.$story.', made by stake2', 
'Site sobre a minha história, '.$story.', feito por stake2',
);

#Synopsis text definer using the $synopsis that is generated from TextFileReader.php
$descs = array(
'Synopsis: <i class="fas fa-scroll"></i> "'.$synopsis[0].'"<br />',
'Sinopse: <i class="fas fa-scroll"></i> "'.$synopsis[1].'"<br />',
);

#Reads the book cover image directory if the site has book covers
if ($storyhascovers == true) {
	#Sets the local Cover folder and lists the files inside it
	$dir = $coverfolder2;
	$x2 = 0;
	$zz2 = 0;
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				$files[$zz2] = $coverfolder.$file;
				$x2++;
				$zz2++;
			}
			closedir($dh);
		}
	}

	#Cover image array creator
	$a = 1;
	$i = 3;
	$z = 1;
	$c = 1;
	while ($c <= (count($files) - 3)) {
		if (isset($files[$a]) == true) {
			$onclickscript = 'openCity('."'".$capdiv.$z."'".');DefineChapter('.$z.');';
			if ($c == 3) {
				$z--;
				$onclickscript = 'openCity('."'".$capdiv.$z."'".');DefineChapter('.$z.');';

				$coverimages[$a] = '<div class="'.$computervar.'">'.'<img src="'.$files[$i].'" width="60%" height="60%" style="border-color:'.$bordercolor.';border-style:solid;'.$roundedborderstyle3.'height: auto;max-width: 4000px;" onclick="'.$onclickscript.'" />'."\n".$divc.'<br class="'.$computervar.'" />'."\n";

				$coverimagesm[$a] = '<div class="'.$mobilevar.'">'.'<img src="'.$files[$i].'" width="99%" height="99%" style="border-color:'.$bordercolor.';border-style:solid;'.$roundedborderstyle3.'height: auto;max-width: 4000px;" onclick="'.$onclickscript.'" />'."\n".$divc.'<br class="'.$mobilevar.'" />'."\n";
			}

			if ($c == 2) {
				$onclickscript = 'openCity('."'".$capdiv.($z + 8)."'".');DefineChapter('.($z + 8).');';

				$coverimages[$a] = '<div class="'.$computervar.'">'.'<img src="'.$files[$i].'" width="60%" height="60%" style="border-color:'.$bordercolor.';border-style:solid;'.$roundedborderstyle3.'height: auto;max-width: 4000px;" onclick="'.$onclickscript.'" />'."\n".$divc.'<br class="'.$computervar.'" />'."\n";

				$coverimagesm[$a] = '<div class="'.$mobilevar.'">'.'<img src="'.$files[$i].'" width="99%" height="99%" style="border-color:'.$bordercolor.';border-style:solid;'.$roundedborderstyle3.'height: auto;max-width: 4000px;" onclick="'.$onclickscript.'" />'."\n".$divc.'<br class="'.$mobilevar.'" />'."\n";
			}

			else {
				$coverimages[$a] = '<div class="'.$computervar.'">'.'<img src="'.$files[$i].'" width="60%" height="60%" style="border-color:'.$bordercolor.';border-style:solid;'.$roundedborderstyle3.'height: auto;max-width: 4000px;" onclick="'.$onclickscript.'" />'."\n".$divc.'<br class="'.$computervar.'" />'."\n";

				$coverimagesm[$a] = '<div class="'.$mobilevar.'">'.'<img src="'.$files[$i].'" width="99%" height="99%" style="border-color:'.$bordercolor.';border-style:solid;'.$roundedborderstyle3.'height: auto;max-width: 4000px;" onclick="'.$onclickscript.'" />'."\n".$divc.'<br class="'.$mobilevar.'" />'."\n";
			}

			$a++;
			$i++;
			$z++;
			$c++;
		}
	
		else {
			$c++;
		}
	}
}

#English texts for Pequenata website
if ($lang == $langs[0] or $lang == $langs[1]) {
	$readtxts = array(
	$readingtxt = "You're reading",
	$readingtxt.': '.ucwords($story),
	'I Read It ✓',
	'I read the Chapter',
	'Read the Chapter',
	'Readings',
	'Readers',
	'Reader',
	);

	$writetxts = array(
	'Write',
	'Write the Chapter',
	substr($readingtxt, 0, -8).' '.strtolower('Writing').': '.ucwords($story),
	);
}

#Brazilian Portuguese texts for Pequenata website
if ($lang == $langs[2]) {
	$readtxts = array(
	$readingtxt = "Você está lendo",
	$readingtxt.': '.ucwords($story),
	'Eu li ✓',
	'Eu li o Capítulo',
	'Leu o Capítulo',
	'Leituras',
	'Leitores',
	'Leitor',
	);

	$writetxts = array(
	'Escrever',
	'Escreva o capítulo',
	substr($readingtxt, 0, -6).' '.strtolower('Escrevendo').': '.ucwords($story),
	);
}

#Status text definer, that sets the status text with [] around it
$statustxt = '['.ucfirst($storystatus).']';

#Site name, title, URL and description setter, by language
if ($lang == $langs[0]) {
	$lang = $langs[1];
	$lang2 = strtoupper($lang);
	$lang2 = substr_replace($lang2, '-', 2, 0);
	$sitename = $choosenwebsite;
	$lang = $langs[0];
	
	$sitetitulo = $storyfolder;
	$sitetitulo2 = $storyfolder.': '.$icons[11];
	$siteurl = $sitepqntlink;
	$sitedesc = $sitedescs[0];
	$sitedesc2 = $descs[0];
	$lang = $langs[0];
}

if ($lang == $langs[1]) {
	$lang2 = strtoupper($lang);
	$lang2 = substr_replace($lang2, '-', 2, 0);
	$sitename = $choosenwebsite;
	
	$sitetitulo = $story;
	$sitetitulo2 = $story.': '.$icons[11];
	$siteurl = $sitepqntlink.strtolower($lang2).'/';
	$sitedesc = $sitedescs[0];
	$sitedesc2 = $descs[0];
}

if ($lang == $langs[2]) {
	$lang2 = strtoupper($lang);
	$lang2 = substr_replace($lang2, '-', 2, 0);
	$sitename = $choosenwebsite;

	$sitetitulo = $story;
	$sitetitulo2 = $story.': '.$icons[11];
	$siteurl = $sitepqntlink.strtolower($lang2).'/';
	$sitedesc = $sitedescs[1];
	$sitedesc2 = $descs[1];
}

#Buttons and tabs definer
#Tab names replacer for langs
if ($lang == $langs[0] or $lang == $langs[1]) {
	$tabnames[5] = substr_replace($tabnames[5], '-', 6, 0);
	$tabnames[5] = strtr($tabnames[5], "l", strtoupper("l"));;
}

if ($writingpack == true) {
	$tabnames[0] = str_replace('Read', 'Write', $tabnames[0]);
	$tabnames[0] = str_replace('Ler', 'Escrever', $tabnames[0]);
}
#str_replace(array("\r\n", "\r", "\n", "%EF%BB%BF", "%EF", "%BB", "%BF", "U+FEFF", "/uFEFF", "^"), "", ${"$filetextarraynames[$i]"});
#Button names
$citiestxts = array(
$tabnames[0].': '.$icons[21].' '.'<span class="w3-text-yellow"> ['.$newtxt.' '.$chapters.']</span>',
$tabnames[1].': '.$icons[20].' ❤️ 😊',
$tabnames[2].': '.$icons[12],
$tabnames[3].': '.$icons[10],
$tabnames[4].': '.$icons[11],
$icons[13],
'',
);

#TabGenerator.php includer
include $tabgeneratorphp;

#Site notification variables if the site notification setting is true
if ($sitehasnotifications == true) {
	#Reviewed chapter title
	$reviewedcapcode = $chapterbtns[$reviewedcap];
}

?>