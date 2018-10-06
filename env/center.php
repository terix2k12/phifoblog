<?php
    if($contentcontainer != 1) {
        return;
    }

    echo "\t<div class=\"contentcontainer\">\n";
    echo "\t\t<div class=\"content\">\n";
    
    if(array_key_exists($contentId,$content)) {
        echo "\t\t<h2 class=\"pagetitle\">".htmlspecialchars($content[$contentId]["title"])."</h2>\n";
        echo $content[$contentId]["content"] ;
    } else {
        echo "<p>Your search is futile.</p>\n";
    }

    echo "\n<br><br><a href=\"".GetLink(0, 0, "")."\">Home</a>\n";
    
    echo "\t\t\t</div>\n";
    echo "\t\t</div>\n\n";
?>