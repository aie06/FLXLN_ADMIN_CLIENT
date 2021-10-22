<?php
session_start();
include('dbcon.php');

if(isset($_POST['save_Sales'])){

    $Product_ID = $_POST['prodid'];
    $ProdUnit= $_POST['productunit'];
    $Carton = $_POST['carton'];
    $ProdName = $_POST['prodname'];
    $Price = $_POST['price'];
    $Quantity = $_POST['quantity'];
    $ProdDesc = $_POST['proddescription'];
   

    $postData = [
        'prodid'=>$Product_ID,
        'productunit'=>$ProdUnit,
        'carton'=>$Carton,
        'prodname'=>$ProdName,
        'price'=> $Price,
        'quantity'=> $Quantity,
        'proddescription'=>$ProdDesc,
        
    ];


    $ref_table = "salesOrder";
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