<?php
    $host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'address_book';
    
if ($_SERVER['HTTP_HOST'] != 'localhost') {
        $dsn = ;
        $username = ;
        $password = ;
    }
    try {
        $db = new PDO($dsn, $username1, $password1);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>