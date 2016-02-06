<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
</head>

<body>
<div>

<h1>Address Book Contacts</h1>

<?php

$dbUser = 'root';
$dbPass = 'root';
$dbName = 'address_book';
$dbHost = '127.0.0.1';
$dbPort = '8889';

try
{
	// Create the PDO connection
	$db = new PDO("mysql:host=$dbHost;port=$dbport;dbname=$dbName", $dbUser, $dbPass);

	// prepare the statement
	$statement = $db->prepare('SELECT name, address, phone, birthday FROM contacts');
	$statement->execute();

	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo $row['name'] . ' ' . $row['address'] . ':';
		echo $row['phone'] . ' - ' . $row['birthday'];
		echo '</p>';
	}

}
catch (PDOException $ex)
{
	echo "Error connecting to DB. Details: $ex";
	die();
}

?>

</div>

</body>
</html>