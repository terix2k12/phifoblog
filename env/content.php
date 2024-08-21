<?php
    $content = [];

    $mysqli = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($mysqli->connect_error) {
        die($mysqli->connect_error);
    }

    $stmt = $mysqli->prepare("SELECT id, name, created, content, active FROM ARTICLES order by created desc");
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