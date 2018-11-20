<?php
/**
 * plugin name: HenriquePlugins
 * Version: 3.3.3
 * Author: Henrique e victoria
*/

function abab ($atts) 
{
    return '<iframe src="'.plugins_url().'/teste/index.php" frameborder="0" width="400" height="210" style="border:0">';   //frameborder='0'  allowfullscreen></iframe>";
}

add_shortcode('teste', 'abab');