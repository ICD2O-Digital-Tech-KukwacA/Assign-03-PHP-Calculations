<?php
    $indexDiamond = $_POST['indexRefDiamond'];
    $indexWater = $_POST['indexRefWater'];

    $speedLightAir = 299792458;

    $speedLightDiamond = $speedLightAir / $indexDiamond;
    $speedLightWater = $speedLightAir / $indexWater;

    $speedLightDiamond = number_format($speedLightDiamond, 2);
    $speedLightWater = number_format($speedLightWater, 2);

    echo "<h3>Results:</h3>";
    echo "The speed of light in diamond is {$speedLightDiamond} m/s.<br>";
    echo "The speed of light in water is {$speedLightWater} m/s.";

?>