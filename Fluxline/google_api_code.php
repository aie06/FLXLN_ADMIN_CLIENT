<?php
  session_start();
    include('google_api_config.php');

    if(isset($_GET["code"])){

        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        if(!isset($token["error"])){
            $google_client->setAccessToken($token['access_token']);
            $_SESSION['access_token']=$token['access_token'];

            $google_service = new Google_Service_Oauth2($google_client);
            $data = $google_service->userinfo->get(); 
            $_SESSION['user_email_address'] = $data['email'];
            $_SESSION['user_last_name'] = $data['family_name'];
            $_SESSION['user_first_name'] = $data['given_name'];
            $_SESSION['user_image'] = $data['picture'];
            $_SESSION['login_btn'] = false;
        }
    }
    if(isset($_SESSION['login_btn'])){
        $login_btn = $_SESSION['login_btn'];
    }else{
        $login_btn = true;
    }
    
?>