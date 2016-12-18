<?php
require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;

$endpoint = 'http://api.openweathermap.org/data/2.5/weather';
$city='Krakow';
$apiKey='af319cd969dff7d8c42768f6f0d8c979';

$url = sprintf(
  '%s?q=%s&APPID=%s&units=metric',
  $endpoint,
  $city,
  $apiKey
);

$http = new Client();

$response = $http->request('GET', $url);
$rawData = $response->getBody();

$data = json_decode($rawData, true);

$temp = $data['main']['temp'];

echo sprintf("Temperature in %s is %s Celsious \n", $city, $temp);
