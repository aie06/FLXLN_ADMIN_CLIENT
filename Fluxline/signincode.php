<?php
    session_start();
    include('dbconfig.php');

    if(isset($_POST['sign_in_btn'])){

        $email = $_POST['email'];
        $clearTextPassword = $_POST['password'];

        try {

            $user = $auth->getUserByEmail("$email");
            try{

                $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
                $idTokenString =  $signInResult->idToken();

                try {
                    $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                    $uid = $verifiedIdToken->claims()->get('sub');

                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    
                    // LOG IN SUCCESSFULLY
                    $_SESSION['login'] = "LoginSuccessfully";
                    header('Location: loginpage.php');

                } catch (InvalidToken $e) {
                    echo 'The token is invalid: '.$e->getMessage();
                } catch (\InvalidArgumentException $e) {
                    echo 'The token could not be parsed: '.$e->getMessage();
                }
            }
            catch(Exception $e){
                // Invalid Password
                $_SESSION['status'] = "InvalidPassword";
                header('Location: index.php');
                        
            }

        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
           
            // Invalid Email
            $_SESSION['status'] = "InvalidEmail";
                header('Location: index.php');
            header('Location: index.php');

        }
    }
    else{

        header('Location: index.php');
    }



?>