<?php
require 'connect.php';

	try {
		$db = dbConnect();
		$query = $db->prepare("SELECT * FROM contacts");
		$query->execute();
		$contacts = $query->fetchAll();
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	$db = null;

	echo "<h2>Address Book</h2>";

	foreach($contacts as $contact) {
		
		echo <<<HTML
<div>{$contact['name']} {$contact['address']} {$contact['phone']} {$contact['birthday']}</div>
HTML;
	}