<?php

function dbConnect() {
	
	$onOpenShift = $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
	
	if($onOpenShift === null || $onOpenShift == '') {
		// in localhost environment
		$dbHost = '127.0.0.1';
		$dbPort = '8889';
		$dbUser = 'root';
		$dbPassword = 'root';
		$dbName = 'address_book';
	} else {
		//in openshift environment
		$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');	
		$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
		$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
		$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	}
	
	echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser";
	
	$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);

		return $db;
}

?>
