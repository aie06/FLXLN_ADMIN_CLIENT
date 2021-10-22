<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
    ->withServiceAccount('fluxline-527ff-firebase-adminsdk-az162-a44f8cde49.json')
    ->withDatabaseUri('https://fluxline-527ff-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();

?>