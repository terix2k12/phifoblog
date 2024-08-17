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

	$contentId = intval($_GET["id"]);
	if(empty($contentId)) {
		$contentId = 0;
	}

	$css = htmlspecialchars($_GET["css"]);
	$page = intval($_GET["page"]);
	$edit = intval($_GET["edit"]);

	function GetLink($targetId, $targetPage, $targetCss) {
    	global $contentId;
    	global $page;
    	global $css;

    	if(empty($targetId)) {
    		$targetId = 0;
    	}

		if(!is_numeric($targetPage)) {
    		$targetPage = $page;
    	}

    	$cssLnk = "";
    	if(empty($targetCss) && !empty($css)) {
    		$cssLnk = "&css=".$css;
    	}
    	
    	return "index.php?id=".$targetId.$cssLnk."&page=".$targetPage;
	}

	if($edit != 1 && $edit != 2 && $edit != 3){
		$contentcontainer = 1;
	}

	if($edit==3){
		$nonHtml = 1;
	}

	$stylepath = "env/stylesheet.css";

	if($css == "dark"){
		$stylepath = "env/styledark.css";
	}

	if($css == "light"){
		$stylepath = "env/stylelight.css";
	}

	if($css == "off"){
		$stylepath = "";
	}
	
	include("dbcredentials.php");
	include("env/header.php");
	include("content.php");
	include("env/article.php");
	include("env/menu.php");
	include("env/center.php");
	include("env/footer.php");
?>