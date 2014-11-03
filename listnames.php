<?php
	$handle = opendir("image/");

	while (false !== ($file = readdir($handle))) {
                if(is_dir("image/".$file)){
			if("."!=$file && ".."!=$file){
                		echo "<a href=scans.php?name=".$file.">".$file."</a><br>";
			}
		}
        }


?>
