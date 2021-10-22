
<?php
    
    unset($_SESSION['verified_user_id']);
    unset( $_SESSION['idTokenString']);
    unset($_SESSION['user_fullname']);
    unset( $_SESSION['user_email']);
    unset( $_SESSION['user_phonenumber']);
   

    include('google_api_config.php');
    $google_client->revokeToken();

    header('Location:index.php');
?>







