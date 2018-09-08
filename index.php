<?php
	$contentId = $_GET["id"];
	$css = $_GET["css"];
	$page = intval($_GET["page"]);

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

    	if(empty($targetCss)) {
    		$cssLnk = $css;
    	}
    	
    	return "\"index.php?id=".$targetId."&css=".$cssLnk."&page=".$targetPage."\"";
	}
	
	include("env/header.php");
	include("content.php");
	include("env/menu.php");
	include("env/center.php");
	include("env/footer.php");
?>