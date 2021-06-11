<?php

/* Process create snippet */
// test comment

//get form data
//need to convert html entities TODO

$data = $_POST;

//linkname techtype purpose lang snippet send
//sanitize vars
$page = $data['pagename'];
$path_parts = pathinfo($page);
$ext = $path_parts['extension'];
$name = $path_parts['filename'];

//clean up filename and extension name
if($ext != 'html') {
	$ext = 'html';
}
$name = strtolower($name);
$name = $name . '.' . $ext;
$link = $data['linkname'];
$tech = $data['techtype'];
$purpose = $data['purpose'];
$lang = $data['lang'];
$title = $data['title'];
$snippet = htmlentities($data['snippet']);
//need to use javascript to check if form field have info in before can submit TODO

//copy template to new filename
if(!file_exists($name)) {
	shell_exec('cp template.html ' . $name);
}

//open for reading and writing, pointer at top
$fh = fopen($name, 'r+');
if(is_resource($fh)) {
		while (!feof($fh)) {
			$line = fgets($fh);
			echo $line;
			trim($line);

			if(!preg_match('/^<\/div>$/',$line)) {
					continue;
			}
			//update new file
				fwrite($fh, "<div style=\"margin-left: 25px\" class=\"col-md-9\">\n");
				fwrite($fh, "\n<h3 style=\"align-content: center\">Code Library</h3>\n");
            	fwrite($fh, "<a data-name=" . "\"" . $link . "\"" . ">" . $title . "</a>\n");
            	fwrite($fh, "<pre class=" .  "\"" . $tech . "\"" . " " . "id=" . $purpose . ">\n");
            	fwrite($fh, "<code class=\"lang-" . $lang . "\"" .  ">\n");
            	fwrite($fh, $snippet . "\n");
            	fwrite($fh, "</code>\n");
            	fwrite($fh, "</pre>\n");
            	fwrite($fh, "</div>\n");
            	fwrite($fh, "</body>\n");
            	fwrite($fh, "</html>\n");
			break;

		}
}

fclose($fh);
echo "<h3>File created and updated successfully</h3>\n";
echo "<a href='/'>Home</a>\n";


