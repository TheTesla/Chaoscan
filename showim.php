
<?php
	$name	= (!empty($_GET["name"]))       ? $_GET["name"]          : "unnamed";
        $width  = (!empty($_GET["width"]))       ? $_GET["width"]         : 240;
        $height = (!empty($_GET["height"]))      ? $_GET["height"]        : 320;


	$files = scandir("image/".$name, 1);	
	$col = 1;
	$cols = 4;

	foreach ($files as $file){
		if(".jpg"==substr($file, strlen($file)-4)){
			if($cols < $col) {
				$col = 1;
				echo "<br>";
			}
			$col = $col + 1;
        		echo "<figure><img src=image/".$name."/".$file." width=".$width." height=".$height." /><figcaption>".$name."/".$file."<a href=delim.php?name=".$name."&nbr=".$file.">delete</a></figcaption></figure>";
    		}
	}



?>
