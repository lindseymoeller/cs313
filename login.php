<?php include 'view/header.php'; 
?>

<main>
    <?php if (isset($message)){ echo $message; }?>
   <h2>Login</h2>
    <p>Existing customer login:</p>
    
    <div id="login">
    <form action="index.php" method="post" >  
        <label class="name">Username:</label><br>
        <input class="input" type="username" name="username" id="username" required value="<?php echo $username; ?>"/>
        <br/>
        <label class="name">Password:</label><br>
         <input class="input" type="password" name="password" id="password" required>
        <br/>
        <input type="submit" name="action" value="Login">
    </form>
        </div>
    
    <h2>Register</h2>
    <p>New to the site? Register below</p>
   
    <div id="register">
    <form action="index.php" method="post" >        
        <label class="name">Username:</label><br>
        <input class="input" type="username" name="username" id="username" required value="<?php echo $username; ?>"/>
        <br/>
        <label class="name">Password:</label><br>
         <input class="input" type="password" name="password" id="password" required>
        <br/>
        <label class="name">Reenter Password:</label><br>
         <input class="input" type="password" name="password2" id="password2" required>
         <br>
        <input type="submit" name="action" value="Register">
        <br>
        <br>
    </form>
</div>
	
	<?php require 'view/footer.php';
?>