<!DOCTYPE HTML>
<html>
	
	<head>
		<meta charset="UTF-8" />	
	</head>
	<body>
<?php
	require("dataconf.php");
	require("config.php");
	$page = 1;
	$nombreProduit = 96; //48 ou 96	
	
	$saq = new SAQ();

	while(true) {
		echo "<h2>page ". $page ."</h2>";
		$nombre = $saq->getProduits($nombreProduit, $page);
		echo $nombre;
		if($nombre == 0) {
			break; // plus de page à crawler, on sort du loop.
		}
		echo "importation : ". $nombre. "<br>";
		$page++;
	}
	
	
	

?>
</body>
</html>