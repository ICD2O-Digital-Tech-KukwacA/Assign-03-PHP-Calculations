<?php
	// get the base and height from the textfields
	$indexDiamond = $_POST['indexRefDiamond'];
	$indexWater = $_POST['indexRefWater'];

	// calculate the speed of light in diamond and water
	$speedLightAir = 299792458; // speed of light in air in m/s
	$speedLightDiamond = $speedLightAir / $indexDiamond;
	$speedLightWater = $speedLightAir / $indexWater;
	
	// round the speed of light to 2 decimal places
	$speedLightDiamond = sprintf("%.2f", $speedLightDiamond);
	$speedLightWater = sprintf("%.2f", $speedLightWater);
?>
	<h3>Results:</h3>
	The speed of light in diamond is <?php echo "$speedLightDiamond" ?>m/s.
	The speed of light in water is <?php echo "$speedLightWater" ?>m/s.