<?php
    if($edit==3) {
        return;
    }

    if($css!="off" || empty($contentId)) {
        echo "\n\t<div class=\"menucontainer\">\n";
        echo "<p>Latest Articles:</p>\n";
        echo "\t<div class=\"menu\">\n";
        echo "\t\t\t<ul>";
                
        $pagesize = 5;
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
            echo "\n\t\t\t<li><div><a href=\"".GetLink($i,"","")."\">".$content[$i]["title"]."</a>";
            echo " <span>".$content[$i]["date"]."</span></div></li>";
        }
        echo "\t\t</ul>\n\t</div>\n";

        // Paginator:
        echo "\n\n\t\t<div class=\"pageinator\">\n";
        if($page>0){
            echo "\t\t\t<a class=\"previouspage\" href=\"".GetLink($contentId,$page-1,"")."\">&lt; Previous </a>\n";  
        }
            
        echo "\t\t\tPage: ".($page+1)."/".($maxpage+1)."\n";           
        
        if($page<$maxpage) {
            echo "\t\t\t<a class=\"nextpage\" href=\"".GetLink($contentId,$page+1,"")."\"> Next &gt;</a>\n";  
        }

        echo "\t\t</div>\n";
        // End paginator    
    }
    echo "\t</div>\n";  
?>