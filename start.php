<?php
/**
 * Instagram initialize
 * 
 */

elgg_register_event_handler('init', 'system', 'instagram_init');

function instagram_init() {
	// Add to the main css
	elgg_extend_view('elgg.css', 'instagram/css');
	// Add an Instagram widget
	elgg_register_widget_type('instagram', elgg_echo('instagram'), elgg_echo('instagram:widget:description'));
	// Instagram single post
	elgg_register_ajax_view('instagram/view');
}

function format_num($num, $precision = 2) {
  	if ($num >= 1000 && $num < 1000000) {
  		  $n_format = number_format($num/1000,$precision).'k';
  	} else if ($num >= 1000000 && $num < 1000000000) {
  		  $n_format = number_format($num/1000000,$precision).'m';
  	} else if ($num >= 1000000000) {
  		  $n_format=number_format($num/1000000000,$precision).'b';
  	} else {
  		  $n_format = $num;
  	}
  	return $n_format;
} 