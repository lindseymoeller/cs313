<?php

	$dbHost = '127.0.0.1';
	//$dbPort = '8889';
	$dbUser = 'root';
 	$dbPassword = '';  //  'root';
	$dbName = 'team_activity';
        
	try {
		$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);  //  $dbHost:$dbPort

	
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

	$topics = $db->query("SELECT * FROM topics");
        
?>

<body>
<h2>Add New Scripture</h2>
<form method="post" action="scripture_submit.php">
	<input type="hidden" name="action" value="scripture_submit">
	<label>Book:</label><br>
	<input name="book" type="text" placeholder="book" size="20"/>
	<br>
	<br>
	<label>Chapter:</label><br>
	<input name="chapter" type="text" placeholder="chapter" size="20"/>
	<br>
	<br>
	<label>Verse:</label><br>
	<input name="verse" type="text" placeholder="verse" size="20"/>
	<br>
	<br>
	<label>Content:</label><br>
	<textarea name="content" rows="7" cols="22">Verse text...</textarea>
	<br>
	<br>
	<label>Topic:</label><br>
        <?php 
            foreach ($topics as $topic) {
                echo <<<HTML
            <input type="checkbox" name="topics[]" value="{$topic['id']}">{$topic["name"]}
            <br>
HTML;
                
            }
        ?>
<!--	<input type="checkbox" name="topic" value="faith">Faith
	<br>
	<input type="checkbox" name="topic" value="charity">Charity
	<br>
	<input type="checkbox" name="topic" value="sacrifice">Sacrifice
	<br>-->
	<br>
	<input type="submit" value="Submit"/>
</form>
</body>

<!--  $db = null;  -->