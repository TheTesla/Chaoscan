<html><head></head><body>
<?php

$name	= (!empty($_GET["name"])) 	? $_GET["name"] 	: "unnamed";
$n = 0;
$handle = opendir("image/".$name);
while (false !== ($file = readdir($handle))) {
        $n = max($n, intval($file));              
}
$nbr	= (!empty($_GET["nbr"])) 	? $_GET["nbr"] 		: $n+1;
$x	= (!empty($_GET["x"])) 		? $_GET["x"] 		: 210;
$y	= (!empty($_GET["y"])) 		? $_GET["y"] 		: 297;
$res 	= (!empty($_GET["resolution"])) ? $_GET["resolution"] 	:  90;
$no	= (!empty($_GET["noscan"]))	? $_GET["noscan"]	:  0;

$nlz = 4;

$handle = opendir("image/".$name);


 

$file = fopen("command/name", "w") or die("can't open name file");
fwrite($file, $name);
fclose($file);
$file = fopen("command/number", "w") or die("can't open number file");
fwrite($file, str_pad($nbr, $nlz, '0', STR_PAD_LEFT));
fclose($file);
$file = fopen("command/x", "w") or die("can't open x file");
fwrite($file, $x);
fclose($file);
$file = fopen("command/y", "w") or die("can't open y file");
fwrite($file, $y);
fclose($file);
$file = fopen("command/resolution", "w") or die("can't open resolution file");
fwrite($file, $res);
fclose($file);


if(0==$no){
	$file = fopen("command/scan", "w") or die("can't open scan file");
	fclose($file);
}

while(file_exists("command/scan")){
	sleep(1);
}

header("Location: scans.php?name=".$name);

?>
</body></html>


