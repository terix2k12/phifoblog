<?php
	include("../env/blogdatabase.php");
	
	$contentId = intval($_GET["id"]);

	$db = new BlogDatabase("../dbcredentials.php");
	$db->connect();

	if(empty($contentId)) {
		$outp = $db->getAllArticles();
	} else {
		$outp = $db->getArticle($contentId);
	}

	// TODO generic error handling
	// TODO authorization
	// TODO categories
	// TODO art cat
	// TODO date
						
	if (!$outp) {
		echo "<h1>404 Not Found</h1>\n</body>\n</html>\n";
    	header("HTTP/1.0 404 Not Found");
	} else {
		$outpq = '{"exported": "2020-05-10",'.'"articles":'.json_encode($outp).', "categories": [], "art_cat":[]}';		

		header("Content-Type: application/json; charset=UTF-8");
		echo $outpq;		     
	}

	$db->disconnect();
?>