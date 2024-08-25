<?php 
	/* Docker Environment Test:
	phpinfo();

	// Credentials as specified in docker-compose.yml
    $servername = 'db'; 
    $username = 'devuser';
    $dbpassword = 'devpass';
    $dbname = 'test_db';

	$mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
	*/
	
	function foo() {
		$art1["id"]=1;
		$art1["name"]="Hallo Welt";
		$art1["text"]="Dies ist die Geschickte von Klaus";

		$art2["id"]=2;
		$art2["name"]="Geschichten";
		$art2["text"]="Noch mehr Geschichten sind langweilig";

		$art3["id"]=3;
		$art3["name"]="Anderes";
		$art3["text"]="Das war's dann!";

		return [
			$art1,
			$art2,
			$art3
			];
	}

?>