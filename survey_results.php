<?php

$better = $_POST["better"];

$holiday = $_POST["holiday"];

$animal = $_POST["animal"];

$color = $_POST["color"];


$survey = fopen("record.php", 'w') or die ("Unable to open file");
		$vanilla = fgets($survey);
		$chocolate = fgets($survey);
		$christmas = fgets($survey);
		$birthday = fgets($survey);
		$july = fgets($survey);
		$thanksgiving = fgets($survey);
		$coati = fgets($survey);
		$giraffe = fgets($survey);
		$platypus = fgets($survey);
		$narwhal = fgets($survey);
		$red = fgets($survey);
		$green = fgets($survey);
		$blue = fgets($survey);
		$yellow = fgets($survey);

if ($better == "vanilla") {
	$vanilla += 1;
} elseif ($better == "chocolate") {
	$chocolate += 1;
}
$total = $vanilla + $chocolate;
$vanilla_total = $vanilla / $total * 100;
$vanilla_final = "Vanilla: " . $vanilla_total . '%';
$chocolate_total = $chocolate / $total * 100;
$chocolate_final = "Chocolate: " . $chocolate_total . '%';

$output = "Which is better: " . $vanilla_final . $chocolate_final; 

fwrite($survey, $output);


if ($holiday == "christmas") {
	$christmas += 1;
} elseif ($holiday == "birthday") {
	$birthday += 1;
} elseif ($holiday == "july") {
	$july += 1;
} elseif ($holiday == "thanksgiving") {
	$thanksgiving += 1;
}
$total2 = $christmas + $birthday + $july + $thanksgiving;
$christmas_total = $christmas / $total2 * 100;
$christmas_final = "Christmas: " . $christmas_total . '%';
$birthday_total = $birthday / $total2 * 100;
$birthday_final = "My birthday: " . $birthday_total . '%';
$july_total = $july / $total2 * 100;
$july_final = "4th of July: " . $july_total . '%';
$thanksgiving_total = $thanksgiving / $total2 * 100;
$thanksgiving_final = "Thanksgiving: " . $thanksgiving_total . '%';

$output2 = "Favorite holiday: " . $christmas_final . $birthday_final . $july_final . $thanksgiving_final;

fwrite($survey, $output2);


if ($animal == "coati") {
	$coati += 1;
} elseif ($animal == "giraffe") {
	$giraffe += 1;
} elseif ($animal == "platypus") {
	$platypus += 1;
} elseif ($animal == "narwhal") {
	$narwhal += 1;
}
$total3 = $coati + $giraffe + $narwhal + $platypus;
$coati_total = $coati / $total3 * 100;
$coati_final = "Coati: " . $coati_total . '%';
$giraffe_total = $giraffe / $total3 * 100;
$giraffe_final = "Giraffe: " . $giraffe_total . '%';
$platypus_total = $platypus / $total3 * 100;
$platypus_final = "Platypus: " . $platypus_total . '%';
$narwhal_total = $narwhal / $total3 * 100;
$narwhal_final = "Narwhal: " . $narwhal_total . '%';

$output3 = "Favorite animal: " . $coati_final . $giraffe_final . $platypus_final . $narwhal_final;

fwrite($survey, $output3);


if ($color == "red") {
	$red += 1;
} elseif ($color == "green") {
	$green += 1;
} elseif ($color == "blue") {
	$blue += 1;
} elseif ($color == "yellow") {
	$yellow += 1;
}
$total4 = $red + $green + $blue + $yellow;
$red_total = $red / $total4 * 100;
$red_final = "Red: " . $red_total . '%';
$green_total = $green / $total4 * 100;
$green_final = "Green: " . $green_total . '%';
$blue_total = $blue / $total4 * 100;
$blue_final = "Blue: " . $blue_total . '%';
$yellow_total = $yellow / $total4 * 100;
$yellow_final = "Yellow: " . $yellow_total . '%';

$output4 = "Favorite color: " . $red_final . $green_final . $blue_final . $yellow_final;

fwrite($survey, $output4);
fclose($survey);

$survey = fopen("record.php", 'r');
echo fread($survey,filesize("record.php"));
fclose($survey);
?>		   

