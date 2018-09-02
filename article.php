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


</div>

<?php
	include("env/footer.php");
	mysqli_close($conn);
?>
