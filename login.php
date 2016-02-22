<?php

include 'view/header.php'; 
session_start();
require 'connect.php';
require 'password.php';

?>
<!DOCTYPE html>
<html lang="en">
<body>
	<div id="login">
   		<h2>Login</h2>
    	<p>Existing user login:</p>
    	<p>(Username: red
		<br>
		Password: red)</p>
        <form action="logged_in.php" method="post" >  
			<label class="name">Username:</label><br>
			<input name="username" type="username" placeholder="username" size="20" required/><br>
			<label class="name">Password:</label><br>
			<input name="password" type="password" placeholder="password" size="20" required/><br>
			<input name="submit" type="submit" value="Login"/>
		</form>
	</div>

<div id="register">
	<h2>Register</h2>
    <p>New to the site? Register below</p>
    	<form action="registered.php" method="post" >        
       		<label class="name">Username:</label><br>
       		<input class="input" type="username" name="username" id="username" placeholder="username" required value="<?php echo $username; ?>"/>
       		<br/>
       		<label class="name">Password:</label><br>
       		<input class="input" type="password" name="password" id="password" placeholder="password" required>
       		<br/>
       		<label class="name">Reenter Password:</label><br>         		<input class="input" type="password" name="password2" id="password2" placeholder="re-enter password" required>
         	<br>
        	<input type="submit" name="submit" value="Register">
        	<br>
       		<br>
    	</form>
</div>
</main>
<?php include '../view/footer.php'; 
?>
