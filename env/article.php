<?php
	if($edit!=1 && $edit!=2 && $edit!=3) {
		return;
	}

	// Download articles
	if($edit==3) {
		$mysqli = new mysqli($servername, $username, $dbpassword, $dbname);
	
		if($contentId==0){
			$stmt = $mysqli->prepare("SELECT * FROM ARTICLES;");
		}else{
			$stmt = $mysqli->prepare("SELECT * FROM ARTICLES WHERE ID = ?;");
			$stmt->bind_param("i", $contentId);
		}		
						
		if (!$stmt->execute()) {
		      echo "<h1>404 Not Found</h1>\n</body>\n</html>\n";
	    	header("HTTP/1.0 404 Not Found");
		}else{		 
			 $result = $stmt->get_result();
			 $outp = $result->fetch_all(MYSQLI_ASSOC);

			header("Content-Type: application/json; charset=UTF-8");
			echo json_encode($outp);		     
		}

		mysqli_close($mysqli);
		
		return;
	}

	echo "\n\t<div id=\"contentcontainer\">\n";

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

					$name = $_POST['name'];
					$content = $_POST['content'];
			 	
			 		if(!empty($name) && !empty($content)){
	
						if (!($stmt = $mysqli->prepare("INSERT INTO ARTICLES (id, name, content) VALUE (0,?,?)"))) {
						    // echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
						}
	
						if (!$stmt->bind_param("ss", $name, $content)) {
						    // echo "Binding parameters 1 failed: (" . $stmt->errno . ") " . $stmt->error;
						}
						
						if (!$stmt->execute()) {
						    // echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
						     echo "Data failure.\n";
						}else{
							 echo "Data processed.\n";
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
		echo "\n\t</div>\n";
		return;
	}
?>
		<form action="https://www.philippfonteyn.de/content/index.php?edit=2" method="post">
			<p>Id: <input type="text" name="newId" value="<?php echo htmlspecialchars($contentId); ?>" /></p>
			<p>Article: <input type="text" name="name" value="
<?php
	if(empty($contentId) || $contentId==0){
		echo "New article";
	}else{
		echo htmlspecialchars($content[$contentId]["title"]);
	}
?>				
			" /></p>
			<p>Date: <input type="text" name="date" value="
<?php
	if(empty($contentId) || $contentId==0){
		echo "-today-";
	}else{
		echo htmlspecialchars($content[$contentId]["date"]);
	}
?>
			" /></p>
			<!--<p>Category: <input type="text" name="category" /></p>-->
 			<textarea name="content" rows="20" cols="100">
<?php
	if(empty($contentId) || $contentId==0){
		echo "Here goes the <i>new</i> text";
	}else{
		include($content[$contentId]["href"]);
	}
?>
 			</textarea>
 			<p><input type="submit" />Passphrase: <input type="password" name="pass" /></p>
		</form>
	</div>
<?php  /*
<div class="menucontainer">
	<ul>
	<?php
		$sqlGet = 'SELECT * FROM ARTICLES;';
		$response = mysqli_query($mysqli, $sqlGet);
		    if (mysqli_num_rows($response) > 0) {	
		    	while($row = mysqli_fetch_assoc($response)) {
		    		$rowname = htmlspecialchars($row["name"]);
		    		$rowdate = htmlspecialchars($row["date"]);
	 				echo "<li>".$rowname.$rowdate;
		    	}	 
		     }  else{
           		echo "Keine Einträge.";
           }
	?>
	</ul>
</div>*/
	mysqli_close($mysqli);
?>