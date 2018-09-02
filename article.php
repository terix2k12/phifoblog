<?php
	include("env/header.php");
	
	include("dbcredentials.php");	

	$conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<div class="menucontainer">
	<ul>
	<?php
		$sqlGet = 'SELECT * FROM ARTICLES;';
		$response = mysqli_query($conn, $sqlGet);
		    if (mysqli_num_rows($response) > 0) {	
		    	while($row = mysqli_fetch_assoc($response)) {
	 				echo "<li>".$row["name"].$row["date"];
		    	}	 
		     }  else{
           		echo "Keine Einträge.";
           }
	?>
	</ul>
</div>

<div id="contentcontainer">

<?php
	$password = htmlspecialchars($_POST['pass']);
	$name = htmlspecialchars($_POST['name']);
	$content = htmlspecialchars($_POST['content']);

	if(!empty($password)){
		if($password == $submissionpwd){

			if(!empty($name) && !empty($content)){

				$sqlPut = "INSERT INTO ARTICLES (id, name, content) VALUE (0,'".$name."','".$content."');";
				$response = mysqli_query($conn, $sqlPut);
			

				if ($response === TRUE) {
					 echo "Data processed.\n";
				} else {
					echo "Data failure.";  
				}
			}

		}else{
			echo "Wrong password!";
		}
	}
?>

<form action="https://www.philippfonteyn.de/content/article.php" method="post">
	<p>Passphrase: <input type="text" name="pass" /></p>
	<p>Article: <input type="text" name="name" /></p>
 	<textarea name="content" rows="20" cols="50"></textarea>
 	<p><input type="submit" /></p>
</form>

</div>

<?php
	include("env/footer.php");
	mysqli_close($conn);
?>
