<?php
	$contentId = intval($_GET["id"]);
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