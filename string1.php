<!DOCTYPE html>
<html>
<head>
	<title> string </title>
</head>
<body>
	<?php
	$sentence="The main body of a book";
	echo strtolower($sentence)."<br>";
	echo strtoupper($sentence)."<br>";
	$replace=str_replace("book","college",$sentence)."<br>";
	echo $replace;
	echo strlen($sentence)."<br>";
	echo $sentence[4];
?>
</body>
</html>