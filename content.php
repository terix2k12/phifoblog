<?php
    $content = [];

    $mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
 
    // TODO select only specific content based on filters (date, categories, range etc.)

    $stmt = $mysqli->prepare("SELECT id, name, date, content FROM ARTICLES;");                        
    $stmt->execute();
    $stmt->bind_result($dId, $dName, $dDate, $dContent);

    while($row = $stmt->fetch()) {
        $content[intval($dId)] = [
            "title"    => $dName,
            "date"     => $dDate,
            "content"  => $dContent
        ];
    }
    
    mysqli_close($mysqli);
?>