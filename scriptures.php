<?php
session_start();

	$dbHost = '127.0.0.1';
	$dbPort = '8889';
	$dbUser = 'root';
 	$dbPassword = 'root';
	$dbName = 'scriptures';

	try {
		$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);

		$query = $db->prepare("SELECT * FROM scriptures");
		$query->execute();
		$scriptures = $query->fetchAll();
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	$db = null;

	echo "<h2>Scripture Resources</h2>";

	foreach($scriptures as $scripture) {
		echo <<<HTML
<div><strong>{$scripture['book']} {$scripture['chapter']}:{$scripture['verse']}</strong> - "{$scripture['content']}"</div>
HTML;
	}

?>

<html>
	<p>Click <a href="add_scripture.php">here</a> to add a new scripture</p>
</html>