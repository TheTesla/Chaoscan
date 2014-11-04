<?php
	$name = $_GET["name"];
	$nbr = $_GET["nbr"];
	$nbr = substr($nbr, 0, strlen($nbr)-4);
	array_map('unlink', glob("image/".$name."/".$nbr."*"));
	header("Location: scans.php?name=".$name);	
?>
