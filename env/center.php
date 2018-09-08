<?php
    if(!empty($contentId))
    {
        echo "<div id=\"contentcontainer\">\n";
        if(array_key_exists($contentId,$content)) {
            include($content[$contentId]["href"]);
        } else {
            echo "Your search is futile.";
        }
        echo "\n<a href=".GetLink(0, 0, "").">Startseite</a>\n";
        echo "</div>\n";
    } else {
        echo "<div id=\"contentcontainer\">\n";
        echo "The beginning.";
        echo "</div>\n";
    }
?>