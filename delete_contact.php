<?php
require 'connect.php';
include 'view/header.php'; 


if (isset($_POST['submit'])) {
	 	$contact_id = ($_POST['contact_id']);
		$db = dbConnect();
		$query = $db->prepare("DELETE FROM contacts WHERE contact_id = '$contact_id'");
		$query->execute();
		//$contacts = $query->fetchAll();
	
} else {
	echo "No results found";
}

$user_id = $_POST['user_id'];
$db = dbConnect();
$query = $db->prepare("SELECT * FROM contacts WHERE user_id = '$user_id'");
$query->execute();
$contacts = $query->fetchAll();
?>

<!DOCTYPE html>

<body>
<h2>Address Book</h2>
<table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Birthday</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

		<?php foreach ($contacts as $contact) : ?>
            <tr>
				<td class="border"><?php echo $contact['name']; ?></td>
                <td class="border"><?php echo $contact['address']; ?></td>
                <td class="border"><?php echo $contact['phone']; ?></td>
                <td class="border"><?php echo $contact['birthday']; ?></td>
			
	
		   <td><form action="edit_contact.php" method="post">
                    <input type="hidden" name="contact_id"
                           value="<?php echo $contact['contact_id']; ?>">
			   
                    <input type="submit" name="submit" value="Edit">
                </form></td>
                
            </tr>
            <?php endforeach; ?>
        </table>
	<form action="add_new.php" method="post">
                    <input type="hidden" name="user_id"
                           value="<?php echo $contact['user_id']; ?>">
		
                    <input type="submit" name="submit" value="Add new">
                </form>
</body>
</main>
<?php include 'view/footer.php'; ?>