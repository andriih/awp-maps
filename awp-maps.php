<?php
/*
Plugin Name: Google мапи для сайту
Description: Description [map center="city , country" width="600" height="300" zoom="13"]Описання мапи[/map]
Plugin URI: http://#
Author: Author
Author URI: http://#
Version: 1.0
License: GPL2
Text Domain: Text Domain
Domain Path: Domain Path
*/

// add_shortcode('test'  , 'awp_shortcode');
// function awp_shortcode ($atts,$content) 
// {	
// 	// $content = !empty($content) ? $content : 'Test data';
// 	// $user = isset($atts['name']) ? $atts['name'] : $atts['name'] = "Unknown" ;
// 	// $login = isset($atts['login']) ? $atts['login'] : $atts['login'] = "Unknown";
	
// 	$atts = shortcode_atts(
// 		array(
// 			'user'=>'Name',
// 			'login'=>'login',
// 			'content'=>!empty($content) ? $content : 'Test data'
// 		),$atts

// 	 );
// 	extract($atts);
// 	return "<h2>{$content}</h2>Hello , {$user}, your login is : {$login}";
// }

add_shortcode('map' , 'awp_maps' );

function awp_maps ($atts, $content)
{
	$atts = shortcode_atts(array(
		'center'=>'Киев,город+Киев,Украина',
		'widtth'=>600,
		'height'=>300,
		'zoom'=>13,
		'content'=>!empty($content) ? $content : 'Test data'

		),$atts
	);


	$atts['size'] = $atts['width'].'x'.$atts['height'];
	$atts['center'] = str_replace(' ', '+', $atts['center']);
	extract($atts);
	var_dump($atts) ;


	$map = $content;
	//$map .= '<img src="https://maps.googleapis.com/maps/api/staticmap?center='.$center.'&zoom='.$zoom.'&size='.$size.'&sensor=false " >';
	$map .= '<img src="https://maps.googleapis.com/maps/api/staticmap?center='.$center.'&zoom=13&size=600x300&maptype=roadmap" />';
	return $map;

}
?>