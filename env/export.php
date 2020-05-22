<?php
	include("../dbcredentials.php");
	
	$contentId = intval($_GET["id"]);

	$mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
	
	if(empty($contentId)) {
		$stmt = $mysqli->prepare("SELECT * FROM ARTICLES;");
	} else {
		$stmt = $mysqli->prepare("SELECT * FROM ARTICLES WHERE ID = ?;");
		$stmt->bind_param("i", $contentId);
	}

	// TODO generic database interaction
	// TODO generic error handling
	// TODO authorization
	// TODO categories
	// TODO art cat
	// TODO date
						
	if (!$stmt->execute()) {
		echo "<h1>404 Not Found</h1>\n</body>\n</html>\n";
    	header("HTTP/1.0 404 Not Found");
	} else {		 
		$result = $stmt->get_result();
		$outp = $result->fetch_all(MYSQLI_ASSOC);

		$outpq = '{"exported": "2020-05-10",'.'"articles":'.json_encode($outp).', "categories": [], "art_cat":[]}';		

		header("Content-Type: application/json; charset=UTF-8");
		echo $outpq;		     
	}

	mysqli_close($mysqli);
?>