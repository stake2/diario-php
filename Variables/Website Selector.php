<?php 

$i = 0;
$c = 0;
$array = $sitefolders;
while ($c <= count($array) - 1) {
	if (file_exists($array[$i].'Website.php')) {
		$current_website_folder = $array[$i];
		$currentsitefile = $array[$i].'Website.php';

		include $currentsitefile;
	}

	$i++;
	$c++;
}

?>