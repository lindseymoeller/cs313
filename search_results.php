<?php
require 'connect.php';
include 'view/header.php'; 

if (isset($_POST['search'])) {
	$name = $_POST['search'];
		$db = dbConnect();
		$query = $db->prepare("SELECT * FROM contacts WHERE name = '$name'");
		$query->execute();
		$contacts = $query->fetchAll();
} else {
	echo "No results found";
}

?>

<p>Search Results</p>
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
				<td><?php echo $contact['name']; ?></td>
                <td><?php echo $contact['address']; ?></td>
                <td><?php echo $contact['phone']; ?></td>
                <td><?php echo $contact['birthday']; ?></td>
			</tr>
		 <?php endforeach; ?>
        </table>

<p><a href="contacts.php">Back to search</a></p>


<?php require 'view/footer.php';
?>