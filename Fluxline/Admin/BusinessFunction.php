<?php
session_start();
include('dbcon.php');


//DELETE BUSINESS ASSOCIATE//
if(isset($_POST['delete_business'])){
    $del_id = $_POST['delete_business'];


    $ref_table = 'buss/'.$del_id;
    $deleteQuery_result = $database->getReference($ref_table)->remove();

    if( $deleteQuery_result){
        $_SESSION['status'] = "Deleted Successfully!";
        header('Location: BusinessAssoView.php');
    }
    else{
        $_SESSION['status'] = "Delete Failed";
        header('Location: BusinessAssoView.php');
    }

}





//UPDATE BUSINESS ASSOCIATE//
if(isset($_POST['update_business'])){

    $key = $_POST['key'];

    $Stake_holder = $_POST['stakeholder'];
    $Id= $_POST['Id'];
    $Company_Name = $_POST['companyname'];
    $Proprietor_name = $_POST['propname'];
    $Address = $_POST['Businessaddress'];
    $Email = $_POST['email'];
    $Contact_1 = $_POST['businessContNo1'];
    $Contact_2 = $_POST['businessContNo2'];
    $Contact_3 = $_POST['businessContNo3'];
    $Tin = $_POST['tin'];
    $Postal_code = $_POST['postalcode'];

    $updateData = [
        'stakeholder'=>$Stake_holder,
        'Id'=>$Id,
        'Compname'=>$Company_Name,
        'Proprietor_name'=>$Proprietor_name,
        'Address'=>  $Address,
        'Email'=>$Email,
        'Contact_1'=>$Contact_1,
        'Contact_2'=>$Contact_2,
        'Contact_3'=>$Contact_3,
        'Tin'=> $Tin,
        'Postal_code'=>$Postal_code,
    ];
    $ref_table = 'buss/'.$key;
    $updateQuery_result = $database->getReference($ref_table) ->update( $updateData);

    if($updateQuery_result){
        $_SESSION['status'] = "Updated Successfully!";
        header('Location: BusinessAssoView.php');
    }
    else{
        $_SESSION['status'] = "Updated Failed!";
        header('Location: BusinessAssoView.php');
    }
}




//SAVE BUSINESS ASSOCIATE//
if(isset($_POST['save'])){

    $Stake_holder = $_POST['stakeholder'];
    $Id= $_POST['id'];
    $Company_Name = $_POST['companyname'];
    $Proprietor_name = $_POST['propname'];
    $Address = $_POST['Businessaddress'];
    $Email = $_POST['email'];
    $Contact_1 = $_POST['businessContNo1'];
    $Contact_2 = $_POST['businessContNo2'];
    $Contact_3 = $_POST['businessContNo3'];
    $Tin = $_POST['tin'];
    $Postal_code = $_POST['postalcode'];

    $postData = [
        'stakeholder'=>$Stake_holder,
        'id'=>$Id,
        'Compname'=>$Company_Name,
        'Proprietor_name'=>$Proprietor_name,
        'Address'=>  $Address,
        'Email'=>$Email,
        'Contact_1'=>$Contact_1,
        'Contact_2'=>$Contact_2,
        'Contact_3'=>$Contact_3,
        'Tin'=> $Tin,
        'Postal_code'=>$Postal_code,
    ];


    $ref_table = "buss";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result){
        $_SESSION['status'] = "Added Successfully!";
        header('Location: BusinessAsso.php');
    }
    else{
        $_SESSION['status'] = "Added Failed!";
        header('Location: BusinessAsso.php');
    }
}
?>