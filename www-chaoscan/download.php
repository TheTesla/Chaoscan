<?php
	shell_exec("tar -cvf download/scans.tar.gz image");
	header("Location: download/scans.tar.gz");

?>
