<?php
$city_name='Madrid,Spain';
$api_key = '25e7b1850cb410cc4fa8a388c31007d0';

$ex = 'http://api.openweathermap.org/data/2.5/weather?lat=40.4378698&lon=-3.8196207&appid='.$api_key;
$weather_data = json_decode(file_get_contents($ex),true);

$temperature = $weather_data['main']['temp'];

//echo $temperature;

$temperature_inC = $temperature - 273.15;
$temp_weather = $weather_data['weather'][0]['main'];

//echo "the temp in spain is : " .round($temperature_inC);


?>
