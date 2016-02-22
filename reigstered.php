<?php 
include 'view/header.php'; 
session_start();
require_once("connect.php");
require_once("password.php");

function add_user($username, $password) {
    global $db;
    $query = 'INSERT INTO users (username, password)
            VALUES
            (:username, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

?>


<main>

    <h2>Success!</h2>
  
    <p><?php echo $user['username'] ; ?>, your registration was successful</p>
    <p>Please click <a href="add_new.php">HERE</a> to begin adding your contacts.</p>
</main>
<?php include '../view/footer.php'; ?>