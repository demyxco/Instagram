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
// set default value
if (!isset($widget->num_display)) {
	$widget->num_display = 9;
}

echo '<p><label>'.elgg_echo('instagram:username').'</label>';
echo elgg_view('input/text', array(
	'name' => 'params[username]',
	'value' => $vars['entity']->username
));
echo '</label></p>';

echo elgg_view('object/widget/edit/num_display', [
	'entity' => $widget,
	'options' => [1, 3, 6, 9],
	'label' => elgg_echo('instagram:numbertodisplay'),
]);