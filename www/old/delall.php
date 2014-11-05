<?php
	array_map('unlink', glob("image/*/*"));
	array_map('rmdir', glob("image/*"));
	header("Location: index.php");	
?>
