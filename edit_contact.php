<?php
require 'connect.php';
include 'view/header.php'; 

//print_r($_POST['contact_id']);


if (isset($_POST['submit'])) {
	 	$contact_id = ($_POST['contact_id']);
		$db = dbConnect();
		$query = $db->prepare("SELECT * FROM contacts WHERE contact_id = '$contact_id'");
		$query->execute();
		$contacts = $query->fetchAll();
	
} else {
	echo "No results found";
}


//print_r($contacts);

?>


<body>
    <h1>Edit Contact</h1>
	
	<?php foreach ($contacts as $contact) : ?>
	
    <form action="updated.php" method="post" id="updated">
        <input type="hidden" name="contact_id" value="<?php echo $contact['contact_id']; ?>">
		<input type="hidden" name="user_id" value="<?php echo $contact['user_id']; ?>">
		<label>Name:</label><br>
        <input type="text" name="name" required value="<?php echo $contact['name']; ?>">
     	<br>
		
        <label>Address:</label><br>
        <input type="text" name="address" value="<?php echo $contact['address']; ?>">
        <br>
        
        <label>Phone:</label><br>
        <input type="text" name="phone" value="<?php echo $contact['phone']; ?>">
        <br>
        
        <label>Birthday:</label><br>
        <input type="text" name="birthday" value="<?php echo $contact['birthday']; ?>">
        <br>
        
		<br>
        <input type="submit" name="submit" value="Update Contact" />
		 	
        </td>
        <br>
    </form>
	<form action="delete_contact.php" method="post" id="delete">
			<input type="submit" name="submit" value="Delete Contact">
			<input type="hidden" name="user_id" 
			    value="<?php echo $contact['user_id']; ?>">
			<input type="hidden" name="contact_id"
            	value="<?php echo $contact['contact_id']; ?>">
     <?php endforeach; ?>

</body>
<?php include 'view/footer.php'; ?>