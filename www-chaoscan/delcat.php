<?php
	$name = $_GET["name"];
	array_map('unlink', glob("image/".$name."/*"));
	header("Location: scans.php?name=".$name);
?>
