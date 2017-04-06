<?php

function formInput($id, $name, $label, $value) {
	return <<<HTML
<label for="$id">$label</label>
<input type="text" id="$id" name="$name" value="$value">
HTML;
}

function formDropdown($id, $name, $label, $values, $value = null, $prompt = null) {
	$options = [];
	
	if($prompt != null) {
		array_push($options, "<option value=\"\">$prompt</option>");
	}
	
	foreach($values as $key => $val) {
		if($value == $key) {
			$selected = 'selected';
		}
		else {
			$selected = '';
		}
		array_push($options, "<option value=\"$key\" $selected>$val</option>");
	}
	$htmlOptions = implode('', $options);
	
	return <<<HTML
<label>$label</label>
<select id="$id" name="$name">$htmlOptions</select>
HTML;
}