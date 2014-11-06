<?php
	include "delall.php";
	array_map('unlink', glob("../www/link/*"));
	mkdir("image/myScan");
        chmod("image/myScan", 0777);
	header("Location: /");
?>
