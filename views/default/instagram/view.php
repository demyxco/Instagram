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
$username = $_GET['username'];
$id = $_GET['id'];

if (!$username) {
	return;
}

$cache = new Instagram\Storage\CacheManager(elgg_get_data_path());
$api   = new Instagram\Api($cache);
$api->setUserName($username);
$feed = $api->getFeed();
// print_r($feed);
$medias = $feed->medias;

echo '<div class="ig-container">';
echo '
	<div class="ig-user">
		<img src="'.$medias[$id]->profilePicture.'"> <span><a href="https://instagram.com/'.$username.'" target="_blank">' . $medias[$id]->user->full_name . 
	'</a></span></div>';
echo '<a href="'.$medias[$id]->link.'" target="_blank"><img src="' . $medias[$id]->thumbnails[3]->src . '" class="ig-main"></a>';
echo '
	<ul class="ig-meta">
		<li><i class="fa fa-heart"></i>'.format_num($medias[$id]->likes).'</li>
		<li><i class="fa fa-comment"></i>'.format_num($medias[$id]->comments).'</li>
		<li><i class="fa fa-clock-o"></i>'.elgg_get_friendly_time($medias[$id]->date->getTimestamp()).'</li>
	</ul>
	<div class="ig-caption">
		'.$medias[$id]->caption.'
	</div>
';
echo '</div>';