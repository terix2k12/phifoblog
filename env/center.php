<?php
    if($contentcontainer != 1) {
        return;
    }

    echo "\t<div class=\"contentcontainer\">\n";
    echo "\t\t<div class=\"content\">\n";
    
    echo "\t\t<p class=\"pagetitle\">".htmlspecialchars($content[$contentId]["title"])."</p>\n";
    
    if(!empty($contentId))
    {
        if(array_key_exists($contentId,$content)) {
            echo $content[$contentId]["content"] ;
        } else {
            echo "<p>Your search is futile.</p>\n";
        }
        echo "\n<br><br><a href=\"".GetLink(0, 0, "")."\">Home</a>\n";
    } else {
        echo "The beginning.";
    }

    echo "\t\t</div>\n";
    echo "\t</div>\n";
?>