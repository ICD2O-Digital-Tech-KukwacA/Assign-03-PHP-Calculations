<?php
	// get the indexes of refraction from the textfields
    $indexDiamond = $_POST['indexRefDiamond'];
    $indexWater = $_POST['indexRefWater'];
	// calculate the speed of light in diamond and water
    $speedLightAir = 299792458;
    $speedLightDiamond = $speedLightAir / $indexDiamond;
    $speedLightWater = $speedLightAir / $indexWater;
    $speedLightDiamond = sprintf("%.2e",$speedLightDiamond);
    $speedLightWater = sprintf("%.2e",$speedLightWater);
	
	// display the results
    echo "<h3>Results:</h3>";
    echo "The speed of light in diamond is {$speedLightDiamond} m/s.<br>";
    echo "The speed of light in water is {$speedLightWater} m/s.";
?>