<?php
    if($edit != 1 && $edit != 2 && $edit != 3){
        echo "<div id=\"contentcontainer\">\n";
        if(!empty($contentId))
        {
            if(array_key_exists($contentId,$content)) {
                echo $content[$contentId]["content"] ;
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