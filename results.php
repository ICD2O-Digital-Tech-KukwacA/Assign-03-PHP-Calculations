<?php
	// get the indexes of refraction from the textfields
	$indexDiamond = $_POST['indexRefDiamond'];
	$indexWater = $_POST['indexRefWater'];

	// calculate the speed of light in diamond and water
	$speedLightAir = 299792458; // speed of light in air in m/s
	$speedLightDiamond = $speedLightAir / $indexDiamond;
	$speedLightWater = $speedLightAir / $indexWater;
	
	// round the speed of light to 2 decimal places
	$speedLightDiamond = sprintf("%.2f", $speedLightDiamond);
	$speedLightWater = sprintf("%.2f", $speedLightWater);

	echo "<h3>Results:</h3>";
    echo "The speed of light in diamond is {$speedLightDiamond} m/s.<br>";
    echo "The speed of light in water is {$speedLightWater} m/s.";
?>