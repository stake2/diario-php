<?php 

$i = 8;
echo '<div class="'.$computer_variable.'">';
echo '<a href="#'.$tabcodes[$i].'" style="float:right;"><button class="w3-btn '.$first_button_style.'" '.$roundedborderstyle.' onclick="openCity('."'".$tabcodes[$i]."')".'">'.$icons[29].'</button></a>'."\n";

echo '<a href="#'.$citycodes[1].'"><button class="w3-btn '.$first_button_style.'" style="float:left;margin-left:15px;'.$rounded_border_style_2.'" onclick="openCity('."'".$citycodes[1]."')".'"><h3>'.$icons[16].'</h3></button></a>'."\n";
echo $div_close."\n";

echo '<div class="'.$mobile_variable.'">';
echo '<a href="#'.$tabcodesm[$i].'" style="float:right;"><button class="w3-btn '.$first_button_style.'" '.$roundedborderstyle.' onclick="openCity('."'".$tabcodesm[$i]."')".'">'.$icons[29].'</button></a>'."\n";

echo '<a href="#'.$citycodes[1].'"><button class="w3-btn '.$first_button_style.'" style="float:left;margin-left:15px;'.$rounded_border_style_2.'" onclick="openCity('."'".$citycodes[1]."')".'"><h3>'.$icons[16].'</h3></button></a>'."\n";
echo $div_close."\n";

echo '<br /><br />';

echo '<div class="'.$computer_variable.'">'."\n";
echo $margin."\n";
echo '<div class="'.$textstyle2.'" style="border-color:'.$bordercolor.';border-style:solid;'.$rounded_border_style_2.'">'."\n";
echo $margin."\n";
echo '<p style="margin-top:2%;">'.'<b>'.$tabsubdescs[0].': '.'</b>'.$pc."\n";
echo '<p style="margin-bottom:1%;margin-left:3%;margin-right:3%;">'.$tabdescriptions[6].$pc."\n";
echo $div_close."\n";
echo $div_close."\n";
echo '<a name="playlist"></a>'."\n";
echo $div_close."\n";

echo $margin."\n";
echo $margin."\n";
echo '<div class="'.$textstyle2.'" style="border-color:'.$bordercolor.';border-style:solid;'.$rounded_border_style_2.'">';
echo $margin."\n";
echo '<p style="margin-bottom:3%;">'.'<b>'.$tabsubdescs[6].' '.'</b>'.$pc."\n";

echo $margin3."\n";
echo '<a href="#music"><button class="w3-btn w3-grey '.$cssbtn1.'" '.$roundedborderstyle.' onclick="openCity('."'".$tabcodes[11]."')".'">'.$tabtxts[11].'</button></a>'."\n";
echo '<a href="#playlist"><button class="w3-btn w3-yellow '.$cssbtn1.'" '.$roundedborderstyle.' onclick="openCity('."'".$tabcodes[12]."')".'">'.$tabtxts[12].'</button></a>'."\n";
echo '<br /><br />'."\n";
echo $div_close."\n";

echo $div_close."\n";
echo $div_close."\n";
echo $div_close."\n";
echo $div_close."\n";

echo $div_close."\n";

echo '<div class="'.$mobile_variable.'">'."\n";
echo $margin."\n";
echo '<div class="'.$textstyle2.'" style="border-color:'.$bordercolor.';border-style:solid;'.$rounded_border_style_2.'">'."\n";
echo $margin."\n";
echo '<p style="margin-top:2%;">'.'<b>'.$tabsubdescs[0].': '.'</b>'.$pc."\n";
echo '<p style="margin-bottom:7%;">'.$tabdescriptions[6].$pc."\n";
echo $div_close."\n";
echo $div_close."\n";
echo $div_close."\n";

echo $margin."\n";
echo $margin."\n";
echo '<div class="'.$textstyle2.'" style="border-color:'.$bordercolor.';border-style:solid;'.$rounded_border_style_2.'">';
echo $margin."\n";
echo '<p style="margin-bottom:7%;">'.'<b>'.$tabsubdescs[6].' '.'</b>'.$pc."\n";

echo '<a name="playlistm"></a>'."\n";
echo $margin3."\n";
echo '<a href="#musicm"><button class="w3-btn w3-grey '.$cssbtn1.'" '.$roundedborderstyle.' onclick="openCity('."'".$tabcodesm[11]."')".'">'.$tabtxtsm[11].'</button></a>'."\n";
echo '<a href="#playlistm"><button class="w3-btn w3-yellow '.$cssbtn1.'" '.$roundedborderstyle.' onclick="openCity('."'".$tabcodesm[12]."')".'">'.$tabtxtsm[12].'</button></a>'."\n";
echo '<br /><br />'."\n";
echo $div_close."\n";

echo $div_close."\n";
echo $div_close."\n";
echo $div_close."\n";
echo $div_close."\n";

echo $div_close."\n";

$i = 0;
while ($i <= $playlistsnumb) {
	echo $margin."\n";
	echo '<div class="border">'."\n";
	echo '<div class="'.$textstyle2.'" style="border-color:'.$bordercolor.';border-style:solid;'.$rounded_border_style_2.'">'."\n";
	echo $div_zoom_animation.'<p></p><br />'.'<b>'.$playlisttitles[$i].':</b>'.$div_close.'<br /><p></p>'.'<hr class="'.$sitehr3.'" style="border-width:3px;border-color:'.$color.';border-style:solid;" />'."\n";

	if ($showembeds == false or $showplaylistembed == True) {
		echo $div_zoom_animation.'<p></p><br /><a class="w3-text-blue" target="_newtab" href="https://www.youtube.com/playlist?list='.$youtubeplaylistids[$i].'">'.$playlisttitles[$i].'</a><br /><br /><p></p>'.$div_close."\n";
	}

	if ($showembeds == True) {
		echo $playlistembedsyoutube[$i].'<br />'."\n";
	}

	echo $div_close."\n";
	echo $div_close."\n";
	echo $div_close."\n";

	$i++;
}

?>