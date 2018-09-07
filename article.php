<?php
	include("env/header.php");
	
	include("dbcredentials.php");	

	// $conn = mysqli_connect();

	$mysqli = new mysqli($servername, $username, $password, $dbname);
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
?>

<div id="contentcontainer">

<?php
	$password = $_POST['pass'];
	$name = $_POST['name'];
	$content = $_POST['content'];

	if(!empty($password) && $password == $submissionpwd){

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
	}

?>

<form action="https://www.philippfonteyn.de/content/article.php" method="post">
	<p>Passphrase: <input type="text" name="pass" /></p>
	<p>Article: <input type="text" name="name" /></p>
 	<textarea name="content" rows="20" cols="50"></textarea>
 	<p><input type="submit" /></p>
</form>

</div>

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
</div>

<?php
	include("env/footer.php");
	mysqli_close($mysqli);
?>
