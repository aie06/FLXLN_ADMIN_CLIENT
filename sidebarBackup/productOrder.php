<?php
session_start();
include('dbcon.php');

if(isset($_POST['add_order'])){

    $Product_ID = $_POST['prodID'];
    $ItemName= $_POST['itemname'];
    $Price = $_POST['price'];
    $Quantity = $_POST['qty'];
    $Tamount = $_POST['tamount'];
    
   

    $postData = [
        'prodID'=>$Product_ID,
        'itemname'=>$ItemName,
        'price'=> $Price,
        'qty'=>$Quantity,
        'tamount'=> $Price,

    ];


    $ref_table = "sampleOrder";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result){
        $_SESSION['status'] = "Added Successfully!";
        header('Location: Sales.php');
    }
    else{
        $_SESSION['status'] = "Added Failed!";
        header('Location: Sales.php');
    }
}
?>