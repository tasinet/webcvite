<?php

include_once 'templates/header.php';
include_once 'templates/footer.php';
include_once 'common.php';

$datafile = $argc > 1 ? $argv[1] : "chris_cv.json";

$data = json_decode( file_get_contents($datafile), true );

tpl_header($data);

foreach($data['sections'] as $section) {
	include_once 'templates/'.$section['type'].'.php';
	$section['id'] = isset($section['id']) ? $section['id'] : name_to_id($section['title']);
	$f = 'tpl_section_'.$section['type'];
	$f($section);
}

tpl_footer($data);
