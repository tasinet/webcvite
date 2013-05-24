<?php

function name_to_id($name)
{
	return strtolower(str_replace(" ","-",$name));
}

function linkify($data)
{
	foreach($data as $key => &$value) {
		if (is_string($value) && 
			   (stripos($value,"http://")!==FALSE || 
					stripos($value,"https://")!==FALSE ) ) {
						$value = preg_replace(
							"#((http|https|ftp)://(\S*?\.\S*?))(\s|\;|\)|\]|\[|\{|\}|,|\"|'|:|\<|$|\.\s)#ie", "'<a href=\"$1\" target=\"_blank\">$1</a>$4'",
							$value
						);
		} else if (is_array($value)) {
			$value = linkify($value);
		}
	}
	return $data;
}
