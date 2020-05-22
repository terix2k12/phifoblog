<?php
	if($edit!=1 && $edit!=2 && $edit!=3) {
		return;
	}

	/*
    // TODO import json file
  if($edit = 4)

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

        mysqli_close($mysqli);
 */

	echo "\n\t<div class=\"contentcontainer\">\n";
	echo "\n\t<div class=\"content\">\n";

	if($edit==2) {
		echo "Processing...<br>";

		$password = $_POST['pass'];
		
		if(!empty($password)){
			$mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
			if ($mysqli->connect_errno) {
	    		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}

		    // First make a brute force check:
			$sqlGet = "SELECT COUNT(*) FROM LOGINREGISTER;";
			$response = mysqli_query($mysqli, $sqlGet);
			$anzahl = mysqli_fetch_row($response)[0];
			if($anzahl < 6) {
 	 			if($password == $submissionpwd){

 	 				$nid = intval($_POST['newId']);
 	 				$ndate = $_POST['ndate'];	
					$nname = $_POST['name'];
					$ncontent = $_POST['content'];
					$nDelete = $_POST['delete'];
					$nactive = $_POST['active']=="on"?1:0;

			 		if($nid==-1){
						$stmt = $mysqli->prepare("INSERT INTO ARTICLES (date, name, content, active) VALUE (?,?,?,?)");
						$stmt->bind_param("sssi", $ndate, $nname, $ncontent, $nactive);		
			 		} else {
						if($nDelete=="on") {
							$stmt = $mysqli->prepare("DELETE FROM ARTICLES where id = ?");
			 				$stmt->bind_param("i", $nid);	
						}else{
			 				$stmt = $mysqli->prepare("UPDATE ARTICLES set date = ?, name = ?, content = ?, active = ? where id = ?");
			 				$stmt->bind_param("sssii", $ndate, $nname, $ncontent, $nactive, $nid);
						}
			 		}	

					if (!$stmt->execute()) {
					    // echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
					     echo "Data failure.<br>\n";
					}else{
						 echo "Data processed.<br>\n";

						if($nid==-1){
						  	$nid = mysqli_insert_id($mysqli);
						}

	$categories = explode(",",htmlspecialchars($_POST['categories']));
	$stmt = $mysqli->prepare("INSERT INTO ART_CAT (article, category) VALUE (?,?)");
	$stmt->bind_param("ii", $nid, $catId);
	
	$selectCategoryId = $mysqli->prepare("SELECT ID FROM CATEGORY WHERE NAME = ?");
	$selectCategoryId->bind_param("s", $ncat);
	
	$stmt2 = $mysqli->prepare("INSERT INTO CATEGORY (name) VALUE (?)");
	$stmt2->bind_param("s", $ncat);

	echo "SCHLEIFE ".var_dump($categories);

	foreach($categories as $item) {
		$ncat = trim($item);
		$selectCategoryId->execute();

		$res77 = $selectCategoryId->get_result();
		$catId = $res77->fetch_row()[0];

		echo "Process category ".$ncat."<br>\n";

		if(empty($catId)){
			$stmt2->execute();
			$catId = mysqli_insert_id($mysqli);
			echo "Category ".$ncat." created with Id ".$catId."<br>\n";
		} else { 
			echo "Category ".$ncat." found with Id ".$catId."<br>\n";
		}

		if (!$stmt->execute()) {
			// echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
			echo "Category ".$ncat." failure.<br>\n";
		} 
	}

					}
				}else{
					echo "Wrong password!";

					$sqlGet = 'INSERT INTO LOGINREGISTER (ATTEMPT) VALUES (1);';
					mysqli_query($mysqli, $sqlGet);
				}
			}else{
				echo "Maxi reached.";
			}		
		}
		echo "\n\t</div></div>\n";
		return;
	}
?>
		<form action="https://www.philippfonteyn.de/content/index.php?edit=2" method="post">
			<p>Id: <input type="text" name="newId" value="<?php 
			if(!array_key_exists($contentId,$content)){
				echo "-1";
			}else{
				echo htmlspecialchars($contentId); 
			}
			?>" />
			Article: <input type="text" name="name" value="
<?php
	if(!array_key_exists($contentId,$content)){
		echo "New article";
	}else{
		echo htmlspecialchars($content[$contentId]["title"]);
	}
?>				
			" /></p>
			<p>Date: <input type="text" name="ndate" value="
<?php
	if(!array_key_exists($contentId,$content)){
		echo "-today-";
	}else{
		echo htmlspecialchars($content[$contentId]["date"]);
	}
?>
			" /></p>
			<p>Categories: <input type="text" name="categories" /></p>
 			<textarea name="content" rows="20" cols="100">
<?php
	if(!array_key_exists($contentId,$content)){
		echo "Here goes the <i>new</i> text";
	}else{
		echo $content[$contentId]["content"];
	}

	mysqli_close($mysqli);
?>
 			</textarea>
 			<p>Delete:<input type="checkbox" name="delete"/>
 			Active:<input type="checkbox" name="active" <?php 
				if(!array_key_exists($contentId,$content)){
					echo "checked";
				}else{
					echo $content[$contentId]["active"]==1?"checked":"";
				}
 			?>/></p>
 			<p>Passphrase: <input type="password" name="pass"/></p>
 			<p><input type="submit" value="Update article"/></p>
		</form>

		<a href="env/export.php">Export all articles.</a>

	</div>
</div>