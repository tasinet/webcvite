<?php function render_text($str) {

	if (is_string($str)) return $str;
	if (isset($str['type']) && $str['type']=='list') {
		return "<ul><li>".implode("</li>\n<li>",$str['content'])."</li></ul>";
	}
	if (is_array($str)) {
		return implode("<BR/>",$str);
	}
	die("Don't know how to handle ".print_r($str,true)." in render_text()\n");
} ?>

<?php function render_block($content) {
	$s = "";
	if (is_string($content)) {
		return "<p>$content</p>";
	}
	foreach($content as $c) {
		if (is_string($c)) 
			$s .= "<p>$c</p>\n";
		else if (is_array($c) && isset($c['type']) && $c['type'] == 'list')
			$s .= "<ul><li>".implode("</li><li>",$c['content'])."</li></ul>\n";
	}
	return $s;
} ?>
