<?php
require_once __DIR__.'/vendor/autoload.php';

$endpoint = 'http://api.openweathermap.org/data/2.5/weather';
$city='Warszawa';
$apiKey='af319cd969dff7d8c42768f6f0d8c979';

$url = sprintf(
  '%s?q=%s&APPID=%s&units=metric',
  $endpoint,
  $city,
  $apiKey
);

echo $url;
echo "works \n";
