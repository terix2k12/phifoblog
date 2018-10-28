<?php
    if($contentcontainer != 1) {
        return;
    }

    echo "\t<div class=\"contentcontainer\">\n";
    echo "\t\t<div class=\"content\">\n";
    
    if(array_key_exists($contentId,$content)) {
        echo "\t\t<h2 class=\"pagetitle\">".htmlspecialchars($content[$contentId]["title"])."</h2>\n";
        echo $content[$contentId]["content"];


 $mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
        echo "\nCategories: ".$contentId;
        $stmt = $mysqli->prepare("SELECT name FROM ART_CAT ac join CATEGORY cat on cat.Id = ac.category where ac.ARTICLE = ?;");
        $stmt->bind_param("i", $contentId);

        $stmt->execute();
        $stmt->bind_result($dId);
        
        while($row = $stmt->fetch()) {
            echo "<".$dId.">";
        }
    mysqli_close($mysqli);

    } else {
        echo "<p>Your search is futile.</p>\n";
    }

    echo "\n<br><br><a href=\"".GetLink(0, 0, "")."\">Home</a>\n";
    
    echo "\t\t\t</div>\n";
    echo "\t\t</div>\n\n";
?>