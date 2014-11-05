<html><head></head>
<body>
<h1>Chaoscan</h1>
<a href="exit.php">-> Clean up, unlock the door and got out.</a><br><br>
<a href="delall.php">delete all</a><br><br>
<a href=download.php>download all scans</a><br><br>
<?php
	include "listnames.php";

?>
<form action="newname.php" methode="get">
        <input name=name type=text value=name size=30 maxlength=30>
        <input name="new" type="submit" value="new">
</form>

</body>
</html>

