<?php
	if($nonHtml) {
        return;
    }
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf8">
		<meta http-equiv="content-style-type" content="text/css">
		<meta name="author" content="Philipp Fonteyn">
		<meta name="date" content="2018-10-06">
		<meta name="description" lang ="en" content="A developers Blog">
		<?php if(!empty($stylepath)) {
				echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"".$stylepath."\">\n";		
		} ?>		
		<title>First In, First Out</title>
	</head>
	<body>

	<div class="header">
		<h1>Phi-Fo developer blog</h1>	
	</div>