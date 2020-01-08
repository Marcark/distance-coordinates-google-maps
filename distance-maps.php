<?php

// return distance between 2 point of google maps.
// return distance in meters or in km (if $u is!="m")
// the coords will be pass in google maps format (decimal degrees)
function dist($lat1,$lon1,$lat2,$lon2,$u) {

$lat1 = $lat1 * 3.14159265358979323846 /180;
$lat2 = $lat2 * 3.14159265358979323846 /180;
$lon1 = $lon1 * 3.14159265358979323846 /180;
$lon2 = $lon2 * 3.14159265358979323846 /180;

$dist = 6372.795477598 * acos(sin($lat1) * sin($lat2) + cos($lat1) * cos($lat2) * cos($lon1-$lon2));        

	if ($u=="m") {
	$dist = $dist * 1000;
	}
	
return round($dist,3);
	
}

?>
