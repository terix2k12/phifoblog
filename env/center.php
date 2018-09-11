<?php
    if($edit != 1 && $edit != 2){
        echo "<div id=\"contentcontainer\">\n";
        if(!empty($contentId))
        {
            if(array_key_exists($contentId,$content)) {
                include($content[$contentId]["href"]);
            } else {
                echo "<p>Your search is futile.</p>\n";
            }

            echo "\n<br><a href=\"".GetLink(0, 0, "")."\">Home</a>\n";
        } else {
            echo "The beginning.";
        }

        echo "</div>\n";
    }
?>