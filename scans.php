<html><head>
<link rel="stylesheet" type="text/css" href="default.css">
</head>
<body>
<?php
	$file = fopen("command/x", "r") or die("can't open name file");
	$x = fread($file, 6);
	fclose($file);
	$file = fopen("command/y", "r") or die("can't open name file");
	$y = fread($file, 6);
	fclose($file);
	$file = fopen("command/resolution", "r") or die("can't open name file");
	$res = fread($file, 6);
	fclose($file);

	$name   = (!empty($_GET["name"]))       ? $_GET["name"]          : "unnamed";
	echo "<h1>".$name."</h1>";
?>
<form action=scan.php method=get>
       <?php 
		echo "height/mm: <input type=text name=x value=".$x.">";
        	echo "width/mm: <input type=text name=y value=".$y.">";
        	echo "resolution/dpi: <input type=text name=resolution value=".$res.">";
		echo "<input type=hidden name=name value=".$name.">" ?>
        <input type=submit value=scan>
</form>
	<a href=index.php>back</a>
<?php
	include "showim.php";
?>

</body>
</html>

