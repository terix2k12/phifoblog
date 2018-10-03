<?php
    if($contentcontainer != 1) {
        return;
    }

    echo "\t<div class=\"contentcontainer\">\n";
    echo "\t\t<div class=\"content\">\n";
    
    if(!empty($contentId))
    {
        echo "\t\t<p class=\"pagetitle\">".htmlspecialchars($content[$contentId]["title"])."</p>\n";

        if(array_key_exists($contentId,$content)) {
            echo $content[$contentId]["content"] ;
        } else {
            echo "<p>Your search is futile.</p>\n";
        }
        echo "\n<br><br><a href=\"".GetLink(0, 0, "")."\">Home</a>\n";
    } else {
        echo "\t\t<p class=\"pagetitle\">First-In-First-Out</p>\n";

        echo "<h3>A blog mainly about programming and development.</h3>

<div>A wild trip<br> This blog is a self-documenting adventure. Follow its creation and if you like this blog, feel free to clone the source code from <a>github</a>  </div>

        <div>Classical programming<br>
         COBOL, C#, Python, </div>

        <div>Apps and gimmicks<br> 
         Android, Flutter, Kotlin and everything on your mobile device.
         </div>

         <div>Computers in everyday life<br>
         Ubuntu, IT-Security, Latex and more. 
         </div>

         <div>Webtechnologies
            PHP, Angular, JavaScript, CSS and other tools you should or shoudnt know
         </div>";
    }

    echo "\t\t</div>\n";
    echo "\t</div>\n";
?>