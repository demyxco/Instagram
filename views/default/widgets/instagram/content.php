<?php
/*
Theme Name: Instagram
Theme URI: https://github.com/manacim/Instagram
Author: Cim
Author URI: https://demyx.com/
Description: Instagram widget that displays up to 9 recent posts.
Version: 2.0.0
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: instagram
*/

$widget = elgg_extract('entity', $vars);
$username = $widget->username;
$endCursor = $widget->num_display;

if (!$username) {
	return;
}

if (!$endCursor) {
	$endCursor = 9;
}

$cache = new Instagram\Storage\CacheManager(elgg_get_data_path());
$api   = new Instagram\Api($cache);
$api->setUserName($username);
$feed = $api->getFeed();
// print_r($feed);
$medias = $feed->medias;

echo '<ul class="instagram-list">';
foreach ($medias as $key => $value) {
	if ($key == $endCursor) break;
	switch ($number) {
	    case 1:
	        $instagram_class = 'ig-1';
	        break;
	    case 3:
	        $instagram_class = 'ig-3';
	        break;
	    case 6:
	        $instagram_class = 'ig-6';
	        break;
	    default:
	        $instagram_class = 'ig-9';
	}
	echo '<li class="'.$instagram_class.'">';
		echo elgg_view('output/url', [
		   'text' => '<img src="' . $value->thumbnails[0]->src . '">',
		   'href' => '#',
		   'class' => 'elgg-lightbox',
		   'data-colorbox-opts' => json_encode([
		   		'width' => '600px',
		   		'height' => '700px',
		   		'href' => elgg_normalize_url('ajax/view/instagram/view' . '?id=' . $key . '&username=' . $username),
		   		'className' => 'ig-colorbox'
		   	])
		]);
	echo '</li>';
}
echo '</ul>';