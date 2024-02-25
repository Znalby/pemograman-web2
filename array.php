<?php 

	$hewan = ["Kucing", "Ayam", "Ikan", "Burung"];
	echo $hewan[0]; // Output: Kucing
	echo "<br>";
	echo $hewan[2]; // Output: Ikan
	echo "<br>";
	foreach ($hewan as $key => $value) {
	echo $value	. "<br>";
	}

$hewan[2] = "kukang";
echo $hewan[2];