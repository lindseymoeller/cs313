<?php
require 'connect.php';
include 'view/header.php'; 


if (isset($_POST['submit'])) {
	 	$username = ($_POST['username']);
        $password = ($_POST['password']);
		$db = dbConnect();
		$query = $db->prepare("SELECT id, username FROM users WHERE username = '$username' AND password = '$password'");
		$query->execute();
		$users = $query->fetch();
} else {
	echo "No results found";
}

//print_r($users);
$user_id = $users['id'];

//print_r($users['id']);

$db = dbConnect();
$query = $db->prepare("SELECT * FROM contacts WHERE user_id = '$user_id'");
$query->execute();
$contacts = $query->fetchAll();

//print_r($contacts);

?>

<!DOCTYPE html>

<body>
<h2>Address Book</h2>
	<p>Welcome, <?php echo $username; ?>!</p>
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
			   		<input type="hidden" name="user_id"
						   value="<?php echo $contact['user_id']; ?>">
                    <input type="submit" name="submit" value="Edit">
                </form></td>
                
            </tr>
            <?php endforeach; ?>
        </table>
	<br>
	<form action="add_new.php" method="post">
                    <input type="hidden" name="user_id"
                           value="<?php echo $contact['user_id']; ?>">
		
                    <input type="submit" name="submit" value="Add new">
                </form>
</body>