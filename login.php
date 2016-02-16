<?php include 'view/header.php'; 

session_start();
?>

<body>
   <h2>Login</h2>
    <p>Existing user login:</p>
    <p>(Username: red
	<br>
	Password: red
	<br> OR
	<br>
	Username: blue
	<br>		
	Password: blue)</p>
    <div id="login">
    <form action="logged_in.php" method="post" >  
		<label class="name">Username:</label><br>
		<input name="username" type="username" placeholder="username" size="20" required/><br>
		<label class="name">Password:</label><br>
		<input name="password" type="password" placeholder="password" size="20" required/><br>
		<input name="submit" type="submit" value="Login"/>
</form>
        </div>
   
	<?php require 'view/footer.php';
?>