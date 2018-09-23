<?php
	$stylepath = "env/stylesheet.css";

	if($css == "dark"){
		$stylepath = "env/styledark.css";
	}

	if($css == "light"){
		$stylepath = "env/stylelight.css";
	}

	if($css == "off"){
		$stylepath = "";
	}

	if($edit==3) {
        return;
    }
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf8">
		<meta http-equiv="Content-Style-Type" 	content="text/css">
		<meta name="author" content="Philipp Fonteyn">
		<meta name="date" content="2018-03-21">
		<meta name="description" lang ="en" content="Philipp's personal Homepage">
		<meta name="description" lang ="de" content="Philipps pers&ouml;nliche Homepage">
		<?php
			if(!empty($stylepath)) {
				echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$stylepath."\">\n";		
			}		
		?>		
		<title>Phi Fo Blog <?php echo $pagetitle; ?></title>
	</head>
	<body>

	<div id="header">
		Phi Fo Blog. Processing the queue.	
	</div>