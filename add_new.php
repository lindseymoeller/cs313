<?php
require 'connect.php';
include 'view/header.php'; 

//print_r($_POST['user_id']);
//print_r($user['id']);



//print_r($contacts);

?>

<DOCTYPE HTML>
	
<body>
    <h1>Add Contact</h1>
	
    <form action="added.php" method="post">
     
		<label>Name:</label><br>
        <input type="text" name="name" placeholder="name" required>
        <br>
		
        <label>Address:</label><br>
        <input type="text" name="address" placeholder="address" required>
        <br>
        
        <label>Phone:</label><br>
        <input type="text" name="phone" placeholder="XXX-XXXX" required>
        <br>
        
        <label>Birthday:</label><br>
        <input type="text" name="birthday" placeholder="dd/mm" required>
        <br>
        
		<br>
        <input type="submit" name="submit" value="Add Contact" />
			<input type="hidden" name="user_id" 
                   value="<?php echo $_POST['user_id']; ?>">
			<input type="hidden" name="user_id" 
                   value="<?php echo $user['id']; ?>"> 
    </form>
	
</body>
<?php include 'view/footer.php'; ?>