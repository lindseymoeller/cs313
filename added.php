<?php
require 'connect.php';
include 'view/header.php'; 

//print_r($_POST['user_id']);
//print_r($_POST['name']);
//print_r($_POST['address']);
//print_r($_POST['phone']);
//print_r($_POST['birthday']);


if (isset($_POST['submit'])) {
	 	$user_id = ($_POST['user_id']);
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
		$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
		$birthday = filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_STRING);
		$db = dbConnect();
		$query = $db->prepare("INSERT INTO contacts (name, address, phone, birthday, user_id) VALUES ('$name', '$address', '$phone', '$birthday', '$user_id')");
		$query->execute();
		//$users = $query->fetch();
} else {
	echo "No results found";
}


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
	<br>
	<form action="add_new.php" method="post">
                    <input type="hidden" name="contact_id"
                           value="<?php echo $contact['user_id']; ?>">
			   
                    <input type="submit" name="submit" value="Add new">
                </form>
</body>
</main>
<?php include 'view/footer.php'; ?>