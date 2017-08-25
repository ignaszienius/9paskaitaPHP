<?php

function getPrice($savikaina) {
	$price = $savikaina * 2 * 1.21 + 5;
	return $price;
}

function getVolume($ilgis,$plotis,$gylis) {
	$volume = $ilgis * $plotis * $gylis;
	return $volume;
}

function getArea($ilgis,$plotis,$gylis) {
	$area = 2 * $gylis * $ilgis + 2 * $gylis * $plotis + $ilgis * $plotis ;
	return $area;
	}

function getPlyt($area,$plytarea = 0.5 ) {
	$sveikplyt = ceil($area / $plytarea);
	return $sveikplyt;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>9 paskaita</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row bg-warning">
		<h1>9 paskaita</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col bg-danger lang">
			<?php
			echo "Prekės pardavimo kaina yra " . getPrice(50) . "Eur";
			?>
		</div>
		<div class="col bg-danger lang">
			<?php
			echo "Reikes " . getPlyt(42.9) . " sveiku plyteliu";
			?>
		</div>
	</div>	
</div>
</body>
</html>
