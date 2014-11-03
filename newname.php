<?php
	mkdir("image/".$_GET["name"]);
	chmod("image/".$_GET["name"], 0777);
	header('Location: index.php');
?>
