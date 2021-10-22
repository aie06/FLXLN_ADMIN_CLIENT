<?php
session_start();
include('dbcon.php');

//UPDATE PRODUCT//
if(isset($_POST['update_product'])){

    $key = $_POST['key'];

    $Product_ID = $_POST['prodid'];
    $ProdUnit= $_POST['productunit'];
    $Carton = $_POST['carton'];
    $ProdName = $_POST['prodname'];
    $Price = $_POST['price'];
    $Quantity = $_POST['quantity'];
    $ProdDesc = $_POST['proddescription'];
   

    $updateData = [
        'prodid'=>$Product_ID,
        'productunit'=>$ProdUnit, 
        'carton'=>$Carton,
        'prodname'=>$ProdName,
        'price'=> $Price,
        'quantity'=> $Quantity,
        'proddescription'=>$ProdDesc,
        
    ];
    $ref_table = 'products/'.$key;
    $updateQuery_result = $database->getReference($ref_table) ->update( $updateData);

    if($updateQuery_result){
        $_SESSION['status'] = "Updated Successfully!";
        header('Location: ProductsView.php');
    }
    else{
        $_SESSION['status'] = "Updated Failed!";
        header('Location: ProductsView.php');
    }
}



//SAVE PRODUCTS//
if(isset($_POST['save_product'])){

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


    $ref_table = "products";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result){
        $_SESSION['status'] = "Added Successfully!";
        header('Location: Products.php');
    }
    else{
        $_SESSION['status'] = "Added Failed!";
        header('Location: Products.php');
    }
}
?>