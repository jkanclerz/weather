<?php
require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use Jkanclerz\Weather\CurrentWeather;

$city = $argv[1];
$apiKey = getenv('OPEN_WEATHER_API_KEY');
$http = new Client();

$weatherApi = new CurrentWeather($http, $apiKey);
$temp = $weatherApi->getTemperature($city);

echo sprintf("Temperature in %s is %s Celsious \n", $city, $temp);
