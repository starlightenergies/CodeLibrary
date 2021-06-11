<?php
echo "<html><head>";
//need to make sure all the scripts are getting imported correctly TODO
?>

	<link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/datepicker3.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">

	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/bootstrap-table.js"></script>

    <style>
        a { color: white; }
    </style>

</head>
<body style="font-size: 18px">


<div class="navbar-fixed-top" style="background: #753000" >
  <a class="navbar-btn pull-left" href="/" style="margin-left: 10px" >Home</a>
  <a class="navbar-btn pull-left" href="/create.html" style="margin-left: 10px" >Create</a>
  <a class="navbar-btn pull-left" href="/create.html" style="margin-left: 10px" >Append</a>
  <a class="navbar-btn pull-left" href="/create.html" style="margin-left: 10px" >Update</a>
  <a class="navbar-btn pull-left" href="/create.html" style="margin-left: 10px" >Archive</a>
  <a class="navbar-btn pull-left" href="/create.html" style="margin-left: 10px" >Filter</a>
  <a class="navbar-btn pull-left" href="/create.html" style="margin-left: 10px" >Link</a>
  <a class="navbar-btn pull-right" href="/create.html" style="margin-right: 10px" >About</a>
</div>

<h2 align="center">Code Library</h3>

<div class="row" id="file" style="color: black">
	<div class="col-md-3" style="color: black">
		<h3 align="justify">By File</h3>

<?php

$dir = "/var/www/projects/codeLibrary";
$values = scandir($dir , SCANDIR_SORT_ASCENDING);

echo "<ul>";
foreach($values as $key => $val) {

	if($val == "index.php"||$val == "." || $val == ".."||is_dir($val)
		||preg_match("/css$|js$|^template|md$/", $val)) {
		continue;
	}

	if(is_file($val)){
		echo "<li><a href= " . $val . ">" . $val . "</a></li>";
	}

}

echo "</ul>";

?>
	</div>

	<div class="col-md-3">

	<h3 align="justify">By Link</h3>

<?php

$dir = "/var/www/projects/codeLibrary";
$values = scandir($dir , SCANDIR_SORT_ASCENDING);

echo "<ul>";
foreach($values as $key => $val) {

	if($val == "index.php"||$val == "." || $val == ".."||is_dir($val)
		||preg_match("/css$|js$|^template|md$/", $val)) {
			continue;
	}

		//open file
		$fh = fopen($val,'r');
		while (!feof($fh)) {

			$line = fgets($fh);
			if(preg_match("/data-name=\"([a-z0-9]+)\".*$/i", $line,$matches)) {

				echo "<li><a href=/" . $val . "#" . $matches[1] . ">" . ucfirst($matches[1]) ."</a></li>\n";

			}
		}

		//close file
		fclose($fh);


}

echo "</ul>";

?>

	</div>

	<div class="col-md-3">

	<h3 align="justify">By Tech</h3>

<?php

$dir = "/var/www/projects/codeLibrary";
$values = scandir($dir , SCANDIR_SORT_ASCENDING);

echo "<ul>";
foreach($values as $key => $val) {

	if($val == "index.php"||$val == "." || $val == ".."||is_dir($val)
		||preg_match("/css$|js$|^template|md$/", $val)) {
		continue;
	}

	echo "<li>Lang: " . "<a href= " . $val . ">" . $val . "</a></li>";
}

echo "</ul>";

?>

	</div>


	<div class="col-md-3">

	<h3 align="justify">By Purpose</h3>

<?php

$dir = "/var/www/projects/codeLibrary";
$values = scandir($dir , SCANDIR_SORT_ASCENDING);

echo "<ul>";
foreach($values as $key => $val) {

	if($val == "index.php"||$val == "." || $val == ".."||is_dir($val)
		||preg_match("/css$|js$|^template|md$/", $val)) {
		continue;
	}

	echo "<li>Purpose: " . "<a href= " . $val . ">" . $val . "</a></li>";
}

echo "</ul>";

?>

	</div>
</div>
</body>
</html>

