<?php
	$name = $_GET["name"];
	$search = array(" ");
	$replace= array("_");
	$name = str_replace($search, $replace, $name);
	mkdir("image/".$name);
	chmod("image/".$name, 0777);
	header('Location: index.php');
?>
