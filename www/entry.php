<?php
	$target = "../../www-chaoscan";
	$link = "session_".rand(0, 999999999);
	echo symlink($target, "link/".$link);
	header("Location: link/".$link);
?>
