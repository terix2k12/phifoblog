<?php
    $content = [];

    $mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
 
    // TODO select only specific content based on filters (date, categories, range etc.)

    $stmt = $mysqli->prepare("SELECT id, name, date, content, active FROM ARTICLES order by date desc;");                        
    $stmt->execute();
    $stmt->bind_result($dId, $dName, $dDate, $dContent, $dActive);

    while($row = $stmt->fetch()) {
        $content[intval($dId)] = [
            "title"    => $dName,
            "date"     => $dDate,
            "content"  => $dContent,
            "active"  => $dActive
        ];
    }
    
    mysqli_close($mysqli);
?>