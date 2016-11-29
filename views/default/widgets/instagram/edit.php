<?php
/**
 * User blog widget edit view
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