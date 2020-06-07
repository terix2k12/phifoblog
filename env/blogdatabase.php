<?php

include_once "database.php";

class BlogDatabase extends GenericDatabase {

    public function __construct(string $path) {
		parent::__construct($path);
    }

    public function getAllArticles() {
        $stmt = $this->mysqli->prepare("SELECT * FROM ARTICLES;");
        
        if (!$stmt->execute()) {

            return null;
        } else {
            $result = $stmt->get_result();
            $outp = $result->fetch_all(MYSQLI_ASSOC);
            return $outp;
        }
    }

    public function getArticle(
        $contentId
    ) {
        $stmt = $this->mysqli->prepare("SELECT * FROM ARTICLES WHERE ID = ?;");
        $stmt->bind_param("i", $contentId);

        if (!$stmt->execute()) {

            return null;
        } else {
            $result = $stmt->get_result();
            $outp = $result->fetch_all(MYSQLI_ASSOC);
            return $outp;
        }
    }

    public function putArticle(
        $id,
        $name,
        $created,
        $content,
        $active
    ) {
        // TODO 20000 length content check
        // TODO 500 title

        $stmt = $this->mysqli->prepare("INSERT INTO ARTICLES (id, name, created, content, active) VALUES (?, ?, ?, ?, ?);");
        $stmt->bind_param("issss", $id, $name, $created, $content, $active);

        $res = $stmt->execute();

        if(!$res) {
          echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error. "<br>\n";
        }

        return $res;
    }

}

?>