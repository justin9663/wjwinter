<?php

$city = $_GET["city"];

$city = str_replace(" ", "", $city);

$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

//<\/b><span class="read-more-small"><span class="read-more-content"><span class="phrase">

preg_match('/3 Day Weather Forecast Summary:(.*?)<\/span>/s', $contents, $matches);

echo($matches[1]);

?>