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

        if (isset($_POST['book']) && isset($_POST['chapter']) && isset($_POST['verse'])) {
            echo "INSERT INTO scriptures (book,chapter,verse,content) VALUES ('{$_POST['book']}','{$_POST['chapter']}','{$_POST['verse']}','{$_POST['content']}'";
        //print_r($_POST);
            $query = $db->prepare("INSERT INTO scriptures (book,chapter,verse,content) VALUES ('{$_POST['book']}','{$_POST['chapter']}','{$_POST['verse']}','{$_POST['content']}')");
            $query->execute();
            $scripture_id = $db->lastInsertId();
            //print_r($_POST['topics']);
            foreach ($_POST['topics'] as $topic) {
                $query = $db->prepare("INSERT INTO scripture_topics (scriptureID,topicID) VALUES ($scripture_id,$topic)");
                $query->execute();
            }
        }
        $scriptures = $db->query("SELECT * FROM scriptures");
        
        foreach ($scriptures as $scripture) {
            // print_r($scripture);
            $scripture_topics = $db->query("SELECT t.name FROM scripture_topics st JOIN topics t ON st.topicID = t.id WHERE st.scriptureID = {$scripture['Id']}");
//            print_r($scripture_topics->fetchAll());
//            $topics = "";
//            foreach ($scripture_topics->fetchAll() as $key => $topic) {
//                $topics .= "$topic,";
//            }
            
            $topics =  implode(', ', array_column($scripture_topics->fetchAll(), 'name'));  //substr($topics,0,-1);
            
            echo <<<HTML
            <div>{$scripture['book']} {$scripture['chapter']}: {$scripture['verse']} - {$scripture['content']} - Topics: {$topics}</div>
HTML;
            
        }
        
?>



