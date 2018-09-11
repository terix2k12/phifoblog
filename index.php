<?php
	$contentId = $_GET["id"];
	$css = $_GET["css"];
	$page = intval($_GET["page"]);
	$edit = $_GET["edit"];

	function GetLink($targetId, $targetPage, $targetCss) {
    	global $contentId;
    	global $page;
    	global $css;

    	if(empty($targetId)) {
    		$targetId = 0;
    	}

		if(empty($targetPage)) {
    		$targetPage = $page;
    	}

    	$cssLnk = "";
    	if(empty($targetCss) && !empty($css)) {
    		$cssLnk = "&css=".$css;
    	}
    	
    	return "index.php?id=".$targetId.$cssLnk."&page=".$targetPage;
	}
	
	include("dbcredentials.php");
	include("env/header.php");
	include("content.php");
	include("env/article.php");
	include("env/menu.php");
	include("env/center.php");
	include("env/footer.php");
?>