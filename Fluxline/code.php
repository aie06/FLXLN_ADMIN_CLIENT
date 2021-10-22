<?php
    session_start();
    include('dbconfig.php');

    // PROFILE UPDATE
    
    if(isset($_POST['update_user_profile'])){

        $fullname = $_POST['full_name'];
        $phonenumber = $_POST['phonenumber'];
        $profile = $_FILES['profile']['name'];
        $random_no = rand(1111,9999);

        $uid = $_SESSION['verified_user_id'];
        $user = $auth->getUser($uid);

        $new_image = $random_no.$profile;
        $old_image = $user->photoUrl;

        if($profile != NULL) {
            $filename = 'uploads/'.$new_image;
        }
        else{
            $filename = $old_image;
        }

        $properties = [
            'displayName' => $fullname,
            'phoneNumber' => $phonenumber,
            'photoUrl' => $filename,
        ];

        $updatedUser = $auth->updateUser($uid, $properties);

        if($updatedUser){

            if($profile != NULL){

                move_uploaded_file($_FILES['profile']['tmp_name'], "uploads/".$new_image);
                if($old_image != NULL){
                    unlink($old_image);
                }
            }
            // UPDATE SUCCESSFULLY
            header('Location: account.php');
        }
        else{
             // NOT UPDATE 
            header('Location: account.php');
        }

    }


    try{
        if(isset($_POST['btn_sign_up'])){

            $fullname = $_POST['full_name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password1'];
            $repassword = $_POST['password2'];

            $userProperties = [
                'email' => $email,
                'emailVerified' => true,
                'phoneNumber' => '+63'.$phone,
                'password' => $password,
                'displayName' => $fullname,
            ];

            if($repassword == $password){
                $createdUser = $auth->createUser($userProperties);
            } 
            if($createdUser){

                $_SESSION['status'] = "Registered";
                header('Location: index.php');
            }else{
        
                $_SESSION['status'] = "NotMatched";
                header('Location: index.php');
            }         
        }
    }
    catch(Exception $e){
        try{
            $user = $auth->getUserByEmail("$email");
            if($user){
                $_SESSION['status'] = "AlreadyRegistered";
                header('Location: index.php');
            }
        }catch(Exception $e){
            $_SESSION['status'] = "Invalid";
            header('Location: index.php');
        }
    }
    


?>