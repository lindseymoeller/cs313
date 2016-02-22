<?php
	session_start();

	if(isset($_SESSION['user_id'])) {
		echo "Welcome " . $_SESSION['username'];
	} else {
		header("Location: logged_in.php");
	}

//	session_destroy();