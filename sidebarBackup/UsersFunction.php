<?php
session_start();
include('dbcon.php');



//REGISTER USERS//
if(isset($_POST['save_users']))
{

    $FirstName = $_POST['fname'];
    $ContactNo1 = $_POST['contactno1'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];



    $userProperties = [
        'email' => $Email,
        'emailVerified' => false,
        'phoneNumber' => '+63'.$ContactNo1,
        'password' => $Password,
        'displayName' =>$FirstName,
       
    ];
    
    $createdUser = $auth->createUser($userProperties);
    
    if($createdUser)
    {
        $_SESSION['status'] = "User Created/Registered Successfully!";
        header('Location: UsersView.php');
        exit();
    }
    else
    {
        $_SESSION['status'] = "User Not Created/Registered";
        header('Location: UsersView.php');
        exit();
    }
}




//DELETE USERS//
if(isset($_POST['delete_users'])){
    $del_id = $_POST['delete_users'];


    $ref_table = 'Users/'.$del_id;
    $deleteQuery_result = $database->getReference($ref_table)->remove();

    if( $deleteQuery_result){
        $_SESSION['status'] = "Deleted Successfully!";
        header('Location: UsersView.php');
    }
    else{
        $_SESSION['status'] = "Delete Failed";
        header('Location: UsersView.php');
    }

}



//UPDATE USERS//
if(isset($_POST['update_users'])){

    $key = $_POST['key'];

    $Position = $_POST['position'];
    $Lname = $_POST['lname'];
    $Email= $_POST['email'];
    $Fname = $_POST['fname'];
    $ContactNo1 = $_POST['contactno1'];
    $ContactNo2 = $_POST['contactno2'];
    $ContactNo3 = $_POST['contactno3'];
    $Gender = $_POST['gender'];
    $Address = $_POST['address'];
    $Username = $_POST['username'];
    $CUsername = $_POST['confirmusername'];
    $Password = $_POST['password'];
    $Cpassword = $_POST['confirmpassword'];

   

    $updateData = [
        'position'=>$Position,
        'lname'=>$Lname,
        'email'=>$Email,
        'fname'=> $Fname,
        'contactno1'=> $ContactNo1,
        'contactno2'=> $ContactNo2,
        'contactno3'=> $ContactNo3,   
        'gender'=> $Gender,
        'address'=>  $Address,
        'username'=>  $Username,
        'confirmusername'=>$CUsername,
        'password'=>$Password,
        'confirmpassword'=>$Cpassword,     
    ];
    $ref_table = 'Users/'.$key;
    $updateQuery_result = $database->getReference($ref_table) ->update( $updateData);

    if($updateQuery_result){
        $_SESSION['status'] = "Updated Successfully!";
        header('Location: UsersView.php');
    }
    else{
        $_SESSION['status'] = "Updated Failed!";
        header('Location: UsersView.php');
    }
}








//SAVE USERS//


if(isset($_POST['save_users'])){
    $Position = $_POST['position'];
    $Lname = $_POST['lname'];
    $Email= $_POST['email'];
    $Fname = $_POST['fname'];
    $ContactNo1 = $_POST['contactno1'];
    $ContactNo2 = $_POST['contactno2'];
    $ContactNo3 = $_POST['contactno3'];
    $Gender = $_POST['gender'];
    $Address = $_POST['address'];
    $Username = $_POST['username'];
    $CUsername = $_POST['confirmusername'];
    $Password = $_POST['password'];
    $Cpassword = $_POST['confirmpassword'];

   

    $postData = [
        'position'=>$Position,
        'lname'=>$Lname,
        'email'=>$Email,
        'fname'=> $Fname,
        'contactno1'=> $ContactNo1,
        'contactno2'=> $ContactNo2,
        'contactno3'=> $ContactNo3,   
        'gender'=> $Gender,
        'address'=>  $Address,
        'username'=>  $Username,
        'confirmusername'=>$CUsername,
        'password'=>$Password,
        'confirmpassword'=>$Cpassword,     
    ];


    $ref_table = "Users";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result){
        $_SESSION['status'] = "Added Successfully!";
        header('Location: Users.php');
    }
    else{
        $_SESSION['status'] = "Added Failed!";
        header('Location: Users.php');
    }
}

?>