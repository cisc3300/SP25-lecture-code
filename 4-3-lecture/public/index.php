<?php

//autoload
require_once "../app/vendor/autoload.php";
require_once "../app/controllers/RoadTripController.php";

use app\controllers\RoadTripController;

$env = parse_ini_file('../.env');
define('DBNAME', 'localhost');
define('DBHOST', $env['DBHOST']);
define('DBUSER', $env['DBUSER']);
define('DBPASS', $env['DBPASS']);
define('OPENAIKEY', $env['OPENAIKEY']);
define('GOOGLEMAPSAPIKEY', $env['GOOGLEMAPSAPIKEY']);

$uri = strtok($_SERVER["REQUEST_URI"], '?');
$uriArray = explode("/", $uri);


if ($uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $roadTripController = new RoadTripController();
    $roadTripController->getRoadTripView();
}

if ($uriArray[1] === 'road-trip' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $roadTripController = new RoadTripController();
    $roadTripController->getRoadTripData();
}
?>

