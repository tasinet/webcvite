<?php

function name_to_id($name)
{
	return strtolower(str_replace(" ","-",$name));
}

