<?php
	$name	= (!empty($_GET["name"]))       ? $_GET["name"]          : "unnamed";
        $width  = (!empty($_GET["width"]))       ? $_GET["width"]         : 240;
        $height = (!empty($_GET["height"]))      ? $_GET["height"]        : 320;

	$handle = opendir("image/".$name);
	

	while (false !== ($file = readdir($handle))) {
		if(".jpg"==substr($file, strlen($file)-4)){
        		echo "<figure><img src=image/".$name."/".$file." width=".$width." height=".$height." /><figcaption>".$name."/".$file."</figcaption></figure>";
    		}
	}



?>
