<?php
	include "delall.php";
	array_map('unlink', glob("../www/link/*"));
	header("Location: /");
?>
