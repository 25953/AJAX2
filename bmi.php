<?php
	$gewicht = $_GET["gewicht"];
	$lengte = $_GET["lengte_cm"];
	BMIcalc($gewicht,$lengte);
	function BMIcalc($gewicht,$lengte){
		$lengte = $lengte / 100;
		$BMI = $gewicht / ($lengte * $lengte);
		echo "uw BMI is: " . $BMI . "<br>";
		if($BMI > 40){
			echo "U heeft obesitas type 3.";
		}
		if($BMI > 35){
			echo "U heeft obesitas type 2.";
		}
		if($BMI > 30){
			echo "U heeft obesitas type 1.";
		}
		if ($BMI > 25) {
			echo "U heeft overgewicht.";
		}
		if ($BMI  > 18) {
			echo "U heeft een gezond gewicht.";
		}
		if ($BMI < 18) {
			echo "U heeft ondergewicht.";
		}
	}
?>
