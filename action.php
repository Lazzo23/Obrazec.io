<html>
<head>
	<title>Obrazec</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="slike/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	 h2{
		font-size:80px; 
		font-family:Courier New;
		color:white;
		text-shadow: 2px 4px black; 
	 }
	</style>
</head>
<body>
	<div class="ozadje fade-in">
		<h2>HVALA!</h2>
		<?php
			$tip=$_POST["slika"];
			$ime=$_POST["ime"];
			$priimek=$_POST["priimek"];
			$enaslov=$_POST["enaslov"];
			$naslov=$_POST["naslov"];
			$posta=$_POST["posta"];
			$drzava=$_POST["drzava"];
		?>
	</div>
</body>
</html>
