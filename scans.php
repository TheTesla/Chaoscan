<html><head></head>
<body>

<?php
	$name   = (!empty($_GET["name"]))       ? $_GET["name"]          : "unnamed";
	echo "<h1>".$name."</h1>";
	include "showim.php";

	echo "<a href=scan.php?name=".$name."><b>scan</b></a>";
?>

<a href=index.php>back</a>
</body>
</html>

