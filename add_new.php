<?php
require 'connect.php';
include 'view/header.php'; 

//print_r($_POST['user_id']);


//print_r($contacts);

?>

<DOCTYPE HTML>
	
<body>
    <h1>Add Contact</h1>
	
    <form action="added.php" method="post">
     
		<label>Name:</label><br>
        <input type="text" name="name" required>
        <br>
		
        <label>Address:</label><br>
        <input type="text" name="address" required>
        <br>
        
        <label>Phone:</label><br>
        <input type="text" name="phone" required>
        <br>
        
        <label>Birthday:</label><br>
        <input type="text" name="birthday" required>
        <br>
        
		<br>
        <input type="submit" name="submit" value="Add Contact" />
			<input type="hidden" name="user_id" 
                   value="<?php echo $_POST['user_id']; ?>">
		
		 
    </form>
	
</body>
<?php include 'view/footer.php'; ?>