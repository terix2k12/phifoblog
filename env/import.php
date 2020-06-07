<?php

	include("../env/blogdatabase.php");

	echo "Received file: ".$_FILES['import']['name']."<br>";
	echo "Temporary file: ".$_FILES['import']['tmp_name']."<br>";
	echo "Size: ".$_FILES['import']['size']."<br>";
	echo "Type: ".$_FILES['import']['type']."<br>";

	if ($_FILES['import']['size']) {
		$strJsonFile = file_get_contents($_FILES['import']['tmp_name']);

		$obj = json_decode($strJsonFile, true);
		
		$articles = $obj["articles"];

		$db = new BlogDatabase("../dbcredentials.php");
		$db->connect();

		foreach ($articles as $article) {
			$id = $article["id"];
			$name = $article["name"];
			$created = $article["created"];
			$content = $article["content"];
			$active = $article["active"];

			echo "Importing article:<br>";
			echo " id: ".$id."<br>";
			echo " name: ".$name."<br>";
			echo " created: ".$created."<br>";
			echo " content: ".$content."<br>";
			echo " active: ".$active."<br>";

			$put = $db->putArticle($id, $name, $created, $content, $active);

			if (!$put) {
				echo "Import failure.<br>\n";
			}
		}

		$db->disconnect();
	} else {
		echo "Nothing to import.";
	}

	// TODO file issaved after import
	// TODO categories
	// TODO art/cat connection
	// TODO authorization
	// TODO progress bar
?>