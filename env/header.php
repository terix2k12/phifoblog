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
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta name="author" content="Philipp Fonteyn">
		<meta name="date" content="2018-09-23">
		<meta name="description" lang ="en" content="A developers Blog">
		<?php if(!empty($stylepath)) {
				echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"".$stylepath."\">\n";		
		} ?>		
		<title>First In, First Out</title>
	</head>
	<body>

	<div class="header">
		<p>Phi-Fo developer blog</p>	
	</div>