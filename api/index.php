<?php 
	$contentId = intval($_GET["id"]);

	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri = explode( '/', $uri );
	//echo json_encode($_SERVER);
	$uriCount = count($uri);

	$baseUri = $uri[0]; // Should be ''
	$baseUri = $uri[1]; // Should be 'api'

	include("mockdb.php");
	$response = foo();

	// if($uriCount == 3) {

		// $actionUri = $uri[2];

		// if($actionUri == 'articles') {
			header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
			echo json_encode($response);
		// }
	// }

	if($uriCount == 4) { 
		$actionUri = $uri[2];

		if($actionUri == 'article') {
			
			$idUri = $uri[3];

			header("Content-Type: application/json; charset=UTF-8");
			echo json_encode($response[$idUri]);
		}
	}

//header("Content-Type: application/json; charset=UTF-8");
//header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
//header("Access-Control-Max-Age: 3600");
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

?>