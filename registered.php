<?php
require 'connect.php';
include 'view/header.php'; 



if (isset($_POST['submit'])) {
 	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); 
    $password2 = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING); 
	if ($password == $password2) {
		$db = dbConnect();
		$query = $db->prepare("INSERT INTO users (username, password) VALUES ('$username', '$password')");
		$user = $query->execute();
		if ($user) {
		$query = $db->prepare("SELECT id, username FROM users WHERE username = '$username' && password = '$password'");
		$query->execute();
		$user = $query->fetch();
		$user_id = $user['id'];
		}
	} else {
		echo "Registration failed, please try again";
		header('Location: login.php');
	}
} else {
echo "Please try again";	
}

//print_r($user['id']);
?>


<main>

    <h2>Success, <?php echo $username; ?>!</h2>
  
    <p>Your registration was successful</p>
	<form action="add_new.php" method="post">
   	<input type="submit" name="submit" value="Add Contacts" />
	<input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
	</form>
</main>
<?php include '../view/footer.php'; ?>