<?php 

#"Things I do" Website definer
if (strpos ($host_text, $website_selector_parameters[0].'='.$sitethingsido) == true) {
	$selected_website = $sitethingsido;

	#Site title and name definer
	$site = $selected_website;
	$website_name = $selected_website;
	$choosed_website_css_file = $css_file_pocb;

	#Site settings
	$showembeds = false; #If site shows Youtube embeds
	$showembeds2 = false; #If site shows Youtube embeds 2
	$showplaylistembed = false; #If site shows Youtube playlist embeds
	$sitehasstories = true; #If site has a Stories Tab

	#Site settings setter file includer
	include $setting_parameters_file;

	#Site Tabs array
	$tabs = array('Productive Things', 'Not Productive Things');

	#Site Tabnames array
	if ($website_language == $languages_array[0] or $website_language == $languages_array[1]) {
		$tabnames = array('Productive Things', 'Not Productive Things', 'To Write', 'Make Websites', 'To Program/Code', 'Edit Videos', 'To Draw', 'Listen to Music', 'To Talk', 'To Watch', 'To Play Games', 'Songs', 'Playlists');
	}

	if ($website_language == $languages_array[2]) {
		$tabnames = array('Coisas Produtivas', 'Coisas Não Produtivas', 'Escrever', 'Fazer Sites', 'Programar', 'Editar Vídeos', 'Desenhar', 'Ouvir música', 'Conversar', 'Assistir', 'Jogar Jogos', 'Músicas', 'Playlists');
	}

	#Number of tabs
	$tabnumb = 12;

	#Includer of the array of the GenericTabs files
	include $generic_tabs_generator_file;
}

?>