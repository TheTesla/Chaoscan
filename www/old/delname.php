<?php
        $name = $_GET["name"];
        array_map('unlink', glob("image/".$name."/*"));
	rmdir("image/".$name);
        header("Location: index.php");
?>

