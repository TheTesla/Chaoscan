<?php
	$name = $_GET["name"];
	$nbr = $_GET["nbr"];
	unlink("image/".$name."/".$nbr);
	header("Location: scans.php?name=".$name);	
?>
