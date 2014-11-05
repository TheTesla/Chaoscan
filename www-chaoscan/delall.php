<?php
	array_map('unlink', glob("image/*/*"));
	array_map('rmdir', glob("image/*"));
	array_map('unlink', glob("download/*"));
	header("Location: index.php");	
?>
