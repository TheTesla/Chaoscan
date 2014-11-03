<html><head></head>
<body>
<h1>Chaoscan</h1>
<?php
	include "listnames.php";

	$name   = (!empty($_GET["name"]))       ? $_GET["name"]          : "unnamed";
	include "showim.php?name=".$name;
?>
<form action="newname.php" methode="get">
        <input name=name type=text value=name size=30 maxlength=30>
        <input name="new" type="submit" value="new">
</form>

</body>
</html>

