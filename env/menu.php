<?php
    if($edit==3) {
        return;
    }

    if($css!="off" || empty($contentId)) {
        echo "\n\t<div class=\"menucontainer\">\n";
        echo "\t\t<ul>";
                
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
            echo "\n\t\t\t<li><a href=\"".GetLink($i,"","")."\">".$content[$i]["title"]."</a>";
            echo " <p>".$content[$i]["date"]."</p></li>";
        }

        // Paginator:
        echo "\n\t\t</ul>\n\n\t\t<div class=\"pageinator\">\n";
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