<?php
session_start();
	
$better = $_POST["better"];
$_SESSION["better"] = $better;
echo $_POST["better"];

$holiday = $_POST["holiday"];
$_SESSION["holiday"] = $holiday;
echo $_POST["holiday"];

$animal = $_POST["animal"];
$_SESSION["animal"] = $animal;
echo $_POST["animal"];

$color = $_POST["color"];
$_SESSION["color"] = $color;
echo $_POST["color"];
	
//$survey = fopen("survey_results.php", "r") or die ("Unable to open file");
//echo fread($survey,filesize("survey_results.php"));
//fclose($survey);
?>		   