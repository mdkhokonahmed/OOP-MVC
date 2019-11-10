#!/usr/bin/php -q
<?php

require "../GUMP.php";

$validator = new GUMP();

$_POST = array(
	'string' => '<script>alert(1); $("body").remove(); </script>'
);

$filters = array(
	'string' => 'sanitize_string'
);

print_r($validator->filter($_POST, $filters));
