<?php
require 'connect.php';
include 'view/header.php'; 

	try {
		$db = dbConnect();
		$query = $db->prepare("SELECT * FROM contacts");
		$query->execute();
		$contacts = $query->fetchAll();
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	
?>

<!DOCTYPE html>

<body>
<h2>Address Book</h2>
<form method="post" action="search_results.php">
	<input name="search" type="text" placeholder="search names" size="20"/>
	<input type="submit" value="Search"/>
</form>

<br>

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
</body>
<?php require 'view/footer.php';
?>

