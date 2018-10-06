<?php
    if($contentcontainer != 1) {
        return;
    }

    echo "\t<div class=\"contentcontainer\">\n";
    echo "\t\t<div class=\"content\">\n";
    
    if(!empty($contentId))
    {
        echo "\t\t<h2 class=\"pagetitle\">".htmlspecialchars($content[$contentId]["title"])."</h2>\n";

        if(array_key_exists($contentId,$content)) {
            echo $content[$contentId]["content"] ;
        } else {
            echo "<p>Your search is futile.</p>\n";
        }
        echo "\n<br><br><a href=\"".GetLink(0, 0, "")."\">Home</a>\n";
    } else {
        echo "\t\t<p class=\"pagetitle\">First-In-First-Out</p>\n";

        echo "<div class=\"home\">
    <h3>A blog (mostly) about programming and development.</h3>
    <ul>
    <li>
        <p>A wild trip:</p>
        <p>An adventure self-documenting its own story. Follow the creation of this blog on the fly. If you like it, feel free to clone the source code from <a>github</a>.</p>
    </li>
 
    <li>
        <p >Classical programming:</p>
        <p >Solving everyday problems with COBOL, C#, Python or brainfuck.</p>
    </li>

 <li>
    <p >Apps and gimmicks:</p>
<p >Android, Flutter, Kotlin and everything on your mobile device.</p>
</li>

 <li>
    <p >Computers in everyday life:</p>
<p >Ubuntu, IT-Security, Latex and more. </p>
</li>

 <li>
    <p >Webtech:</p>
<p >PHP, Angular, JavaScript, CSS and other tools you should or shoudnt know</p>
</li>

 <li>
    <p >Offline:</p>
<p >cycling, hiking, travel</p>
</li>

</ul>
 </div>";
    }

    echo "\t\t\t</div>\n";
    echo "\t\t</div>\n\n";
?>