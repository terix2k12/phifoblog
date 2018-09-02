<?php
	$pagetitle_de = "Startseite";
	$pagetitle_en = "Home";
	
	include("env/header.php");
	include("content.php");	

	$contentId = $_GET["id"];
?>

	<div class="menucontainer">
		<?php
			if($css!="off" || empty($contentId)){
				echo "<ul>";
				$page = intval($_GET["page"]);
				$pagesize = 7;
				$maxpage = intval(count($content) / $pagesize);
	
				if(empty($page) || $page<0){
					$page = 0;
				}
	
				if($page>$maxpage){
					$page = $maxpage;
				}
	
				$from = 1 + ($page * $pagesize);
				$until = ($page + 1) * $pagesize;
	
				if($until > count($content)) { 
					$until = count($content);
				}

				for ($i = $from; $i <= $until; $i++) {
					echo "\n\t\t<li><a href=\"index.php?id=".$i."\">".$content[$i]["title"]."</a>";
					echo " <p>".$content[$i]["date"]."</p></li>";
				}
				echo "</ul><div class=\"pageinator\">";

				if($page>0){
					echo "<a class=\"previouspage\" href=\"index.php?id=".$contentId."&page=".($page-1)."\">&lt; Last </a>\n";	
				}
				
				echo "Page: ".($page+1)."/".($maxpage+1)."\n";

				if($page<$maxpage) {
					echo "<a class=\"nextpage\" href=\"index.php?id=".$contentId."&page=".($page+1)."\"> Next &gt;</a>\n";	
				}

				echo "</div>";
			}	
		?>
	</div>

	<div id="contentcontainer">
<?php
	if(!empty($contentId))
	{
		if(array_key_exists($contentId,$content)) {
			include($content[$contentId]["href"]);
		} else {
			echo "Deine Suche wird erfolglos bleiben.";
		}

		echo "<a href=\"index.php\">Startseite</a>";
	}
?>
	</div>

<?php
	include("env/footer.php");
?>