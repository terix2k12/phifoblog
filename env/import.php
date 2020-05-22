<?php
	
	echo "Received file: ".$_FILES['import']['name']."<br>";
	echo "Temporary file: ".$_FILES['import']['tmp_name']."<br>";
	echo "Size: ".$_FILES['import']['size']."<br>";
	echo "Type: ".$_FILES['import']['type']."<br>";

	if ($_FILES['import']['size']) {
		$strJsonFile = file_get_contents($_FILES['import']['tmp_name']);

		$obj = json_decode($strJsonFile, true);

		include("../dbcredentials.php");
		$mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
		
		$articles = $obj["articles"];

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

			$stmt = $mysqli->prepare("INSERT INTO ARTICLES (id, name, created, content, active) VALUES (?, ?, ?, ?, ?);");
			$stmt->bind_param("issss", $id, $name, $created, $content, $active);

			if (!$stmt->execute()) {
				// echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
				echo "Import failure.<br>\n";
			} 

		}

		mysqli_close($mysqli);
	} else {
		echo "Nothing sent.";
	}

	// TODO categories
	// TODO art/cat connection
	// TODO authorization
	// TODO progress bar
?>