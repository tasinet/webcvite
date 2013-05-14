<?php

include_once 'templates/header.php';
include_once 'templates/footer.php';

$data = json_decode( file_get_contents("chris_cv.json"), true );

tpl_header($data);

foreach($data['sections'] as $section) {
	include_once 'templates/'.$section['type'].'.php';
	$f = 'tpl_section_'.$section['type'];
	$f($section);
}

tpl_footer($data);
