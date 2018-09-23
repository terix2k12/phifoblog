<?php
    /*  $content = [
    	1 => [ "title" => "A new awakening.",
    		   "date"  => "2018-02-07",
    		   "href"  => "text/00000awakening.html" ],
    	2 => [ "title" => "A simple PHP REST interface.",
    		   "date"  => "2018-02-11",
    		   "href"  => "text/00001rest.php" ],
        3 => [ "title" => "From multi to singlepage.",
               "date"  => "2018-09-01",
               "href"  => "text/00027single.html" ],
    	4 => [ "title" => "Sublime Editor",
    		   "date"  => "2018-02-18",
    		   "href"  => "text/00002sublime.html" ],
    	5 => [ "title" => "HTML5.",
    		   "date"  => "2018-02-21",
    		   "href"  => "text/00001html5.html" ],
    	6 => [ "title" => "Ubuntu Upgrade",
    		   "date"  => "2018-02-24",
    		   "href"  => "text/00003ubuntu.html" ],
    	7 => [ "title" => "Hibernation hidden.",
    		   "date"  => "2018-02-24",
    		   "href"  => "text/00003hibernate.html" ],
    	8 => [ "title" => "Android Studio.",
    		   "date"  => "2018-02-24",
    		   "href"  => "text/00004androidstudio.html" ],
    	9 => [ "title" => "Android app concept.",
    		   "date"  => "2018-03-06",
    		   "href"  => "text/00004android.html" ],
       10 => [ "title" => "SSL!",
    		   "date"  => "2018-03-06",
    		   "href"  => "text/00005ssl.html" ],
    	11 => [ "title" => "Wireshark.",
    		   "date"  => "2018-03-06",
    		   "href"  => "text/00005sslwire.html" ],
    	12 => [ "title" => "Digital postcards.",
    		   "date"  => "2018-03-06",
    		   "href"  => "text/00005sslpostcard.html" ],
    	13 => [ "title" => "Let's Encrypt.",
    		   "date"  => "2018-03-06",
    		   "href"  => "text/00005sslcert.html" ],
    	14 => [ "title" => "Android and SSL.",
    		   "date"  => "2018-03-06",
    		   "href"  => "text/00004androidssl.html" ],
    	15 => [ "title" => "Python and SSL.",
    		   "date"  => "2018-03-06",
    		   "href"  => "text/00004pythonssl.html" ],
    	16 => [ "title" => "Cruising Teneriffe.",
    		   "date"  => "2018-03-15",
    		   "href"  => "text/00006teneriffe.html" ],
    	17 => [ "title" => "Firefox's media behavior on Android.",
    		   "date"  => "2018-03-15",
    		   "href"  => "text/00007ffmedia.html" ],
    	18 => [ "title" => "Fresh Oreo for Nexus 5",
    		   "date"  => "2018-03-17",
    		   "href"  => "text/00008nexus5.html" ],
    	19 => [ "title" => "A crude CSS design.",
    		   "date"  => "2018-03-21",
    		   "href"  => "text/00009basiccss.html" ],
    	20 => [ "title" => "Timeboxing.",
    		   "date"  => "2018-03-22",
    		   "href"  => "text/00010timeboxing.html" ],
    	21 => [ "title" => "D12.",
    		   "date"  => "2018-03-28",
    		   "href"  => "text/00011D12.html" ],
    	22 => [ "title" => "Z12",
    		   "date"  => "2018-03-30",
    		   "href"  => "text/00011Z12.html" ],
    	23 => [ "title" => "My CSM got a new home..",
    		   "date"  => "2018-03-27",
    		   "href"  => "text/00013joomlamig.html" ],
		24 => [ "title" => "India.",
    		   "date"  => "2018-05-14",
    		   "href"  => "text/00013india.html" ],
    	25 => [ "title" => "Sublime Spellchecker.",
    		   "date"  => "2018-06-15",
    		   "href"  => "text/00021SpellDe.html" ],
    	26 => [ "title" => "Edmund.",
    		   "date"  => "2018-06-15",
    		   "href"  => "text/00020edmund.html" ],
		27 => [ "title" => "Tracking pixel.",
    		   "date"  => "2018-07-25",
    		   "href"  => "text/00014trackingpixel.html" ],
    	28 => [ "title" => "Virtual Windows.",
    		   "date"  => "2018-07-25",
    		   "href"  => "text/00015virtualboxWin10.html" ],
    	29 => [ "title" => "Citrix under Ubuntu.",
    		   "date"  => "2018-07-30",
    		   "href"  => "text/00016citrix.html" ],
		30 => [ "title" => "Day of the Tentacle",
    		   "date"  => "2018-08-05",
    		   "href"  => "text/00017dott.html" ],
    	31 => [ "title" => "DNS Resolve",
    		   "date"  => "2018-08-05",
    		   "href"  => "text/00018dnsresolve.html" ],
    	32 => [ "title" => "Hacking myself.",
    		   "date"  => "2018-08-05",
    		   "href"  => "text/00019hackself.html" ],
		33 => [ "title" => "What the hell dropbox?",
    		   "date"  => "2018-08-23",
    		   "href"  => "text/00022dropbox.html" ],
    	34 => [ "title" => "Using Android Emulator.",
    		   "date"  => "2018-02-28",
    		   "href"  => "text/00023android.html" ],
    	35 => [ "title" => "Wannacry.",
    		   "date"  => "2018-03-15",
    		   "href"  => "text/00024wannacry.html" ],
    	36 => [ "title" => "Latex",
    		   "date"  => "2018-08-20",
    		   "href"  => "text/00025latex.html" ],
    	37 => [ "title" => "Apply complex shapes to an image with masking.",
    		   "date"  => "2018-08-21",
    		   "href"  => "text/00026masks.html" ],
        38 => [ "title" => "Use a dynamic website design.",
               "date"  => "2018-09-01",
               "href"  => "text/00041dynamiccss.html" ],
        39 => [ "title" => "Improve the menu with pagination.",
               "date"  => "2018-09-01",
               "href"  => "text/00040pagination.html" ],
       40 => [ "title" => "Short Introduction to Grep.",
               "date"  => "2018-09-02",
               "href"  => "text/00040grep.html" ],
       41 => [ "title" => "Glance at licensing",
               "date"  => "2018-09-02",
               "href"  => "text/00041license.html" ]   ,
        42 => [ "title" => "Open Source!",
               "date"  => "2018-09-02",
               "href"  => "text/00043github.html" ] ,
        43 => [ "title" => "Article mechanism (1).",
               "date"  => "2018-09-02",
               "href"  => "text/00042newarticles.html" ],
        44 => [ "title" => "GIT ignores you.",
               "date"  => "2018-09-02",
               "href"  => "text/00044gitignore.html" ]   ,
            45 => [ "title" => "SQL Selfdefense.",
               "date"  => "2018-09-03",
               "href"  => "text/00045hacking.html" ] ,
        46 => [ "title" => "Fishing for H.",
               "date"  => "2018-09-03",
               "href"  => "text/00046getfile.html" ]     ,
        47 => [ "title" => "Prepare your statements",
               "date"  => "2018-09-07",
               "href"  => "text/00047sqlprep.html" ]   ,
        48 => [ "title" => "speak PHP",
               "date"  => "2018-09-",
               "href"  => "text/00048speakphp.html" ] ,
        49 => [ "title" => "Brute Force is not enough",
               "date"  => "2018-09-",
               "href"  => "text/00049force.html" ] ,
        50 => [ "title" => "Styling Sublime PHP",
               "date"  => "2018-09-",
               "href"  => "text/00050subphp.html" ],
         51 => [ "title" => "A succesful hack!",
               "date"  => "2018-09-",
               "href"  => "text/00051hacking3.html"],                 
         52 => [ "title" => "Android Alarms",
               "date"  => "2018-09-19",
               "href"  => "text/00052alarmmanager.html" ] ,
         53 => [ "title" => "GIT integration in Android Studio",
               "date"  => "2018-09-",
               "href"  => "text/00053astudiogit.html" ] ,
         54 => [ "title" => "Booklets in Linux",
               "date"  => "2018-09-15",
               "href"  => "text/00054booklet.html" ] ,
         55 => [ "title" => "Toe-in",
               "date"  => "2018-09-",
               "href"  => "text/00055toein.html" ] ,
         56 => [ "title" => "Sleepless in Seatle",
               "date"  => "2018-09-19",
               "href"  => "text/00056keepawake.html" ] ,
         57 => [ "title" => "You look nice today",
               "date"  => "2018-09-20",
               "href"  => "text/00057formatstudio.html" ] ,
         58 => [ "title" => "Turn your lights on!",
               "date"  => "2018-09-22",
               "href"  => "text/00058androidlights.html" ] ,
         59 => [ "title" => "I want to SELECT you",
               "date"  => "2018-09-23",
               "href"  => "text/00059phpselect.html" ] ,
         60 => [ "title" => "Articles to database (cntd)",
               "date"  => "2018-09-23",
               "href"  => "text/00060phpjson.html" ] 
]; */


    $mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
 
    $stmt = $mysqli->prepare("SELECT id, name, date, content FROM ARTICLES;");                        
    $stmt->execute();
    $stmt->bind_result($did, $dname, $ddate, $dcontent);

    $content = [];
     while($row = $stmt->fetch()) {
        $content[intval($did)] = 
        [ "title" => $dname,
               "date"  => $ddate,
               "content"  => $dcontent ];
     }
    
    mysqli_close($mysqli);

/*
  return;

        // Migration code:
        $mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
        $stmt = $mysqli->prepare("INSERT INTO ARTICLES (name, date, content) VALUE (?,?,?)");

        $tdate = "";
        $tname = "";
        $tcontent = "";

        $stmt->bind_param("sss", $tname, $tdate, $tcontent);
                        
        $tmax = intval(count($content));

        for ($i = 1; $i <= $tmax; $i++) {
        
           $tdate = $content[$i]["date"]; 
            $tcontent = file_get_contents($content[$i]["href"]);
            $tname = $content[$i]["title"];
             $stmt->execute();

            // echo "dp:".$tname." >>".$tcontent."\n";
        }                        

        mysqli_close($mysqli);*/
?>