<?php

/* Process create snippet */
// test comment

//get form data

$data = $_POST;

//linkname techtype purpose lang snippet send
//sanitize vars
$page = $data['pagename'];
echo "<div>page name is: " . $page . "</div>\n";
$path_parts = pathinfo($page);
$ext = $path_parts['extension'];
$name = $path_parts['filename'];

//clean up filename and extension name
if($ext != 'html') {
	$ext = 'html';
}
$name = strtolower($name);
$name = $name . '.' . $ext;
echo "<div>clean page name is: " . $name . "</div>\n";

