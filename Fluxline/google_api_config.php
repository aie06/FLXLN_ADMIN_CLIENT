<?php
    require_once('vendor/autoload.php');
    $google_client = new Google_Client();
    $google_client->setClientId('642237127732-h081lvg1imstspj7akufnepa2d8uu90p.apps.googleusercontent.com');
    $google_client->setClientSecret('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');
    $google_client->setApplicationName("Fluxline Industrial and Electrical Distribution System Inc.");
    $google_client->setRedirectUri('http://localhost/Fluxline%20Website/Fluxline/loginpage.php');
    $google_client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>