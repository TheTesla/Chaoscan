<?php
	$handle = opendir("image/");

	while (false !== ($file = readdir($handle))) {
                if(is_dir("image/".$file)){
			if("."!=$file && ".."!=$file){
                		echo "<a href=scans.php?name=".$file.">".$file."</a>";
				echo " <a href=delname.php?name=".$file.">delete</a><br>";
			}
		}
        }


?>
