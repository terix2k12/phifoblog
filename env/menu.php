<?php
    if($edit==3) {
        return;
    }

    if($css!="off" || empty($contentId)){
        echo "\n<div class=\"menucontainer\">\n";
        echo "<ul>";
                
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
                    echo "\n\t\t<li><a href=".GetLink($i,"","").">".$content[$i]["title"]."</a>";
                    echo " <p>".$content[$i]["date"]."</p></li>";
                }
                echo "\n</ul>\n\t<div class=\"pageinator\">\n";

                if($page>0){
                    echo "<a class=\"previouspage\" href=".GetLink($contentId,$page-1,"").">&lt; Previous </a>\n";  
                }
                
                echo "Page: ".($page+1)."/".($maxpage+1)."\n";

                if($page<$maxpage) {
                    echo "<a class=\"nextpage\" href=".GetLink($contentId,$page+1,"")."> Next &gt;</a>\n";  
                }

        echo "</div>";    
    }
    echo "</div> <!-- outer -->";  
?>