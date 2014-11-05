<html>
<head></head>
<body>
<h1>Chaoscan</h1>
<?php
	$files = scandir("link");
	if(2<sizeof($files)){
		echo "Someone is using the service, please wait!";
	}else{
		echo"<a href=entry.php>-> Go in and lock the door.</a>";
	}
?>


</body>
</html>
