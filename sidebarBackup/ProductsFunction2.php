<?php
session_start();
include('dbcon.php');



if(isset($_POST['save_product'])){

    $id = $_POST['prodid'];
    $category = $_POST['category'];
    $productname = $_POST['prodname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $profile = $_FILES['profile']['name'];
    $randon_no = rand(1111,9999);


    $new_image =  $randon_no.$profile;
    $filename = 'uploads/'.$new_image;

    $postData = [
        'id'=>$id,
        'category'=>$category,
        'image'=>$filename,
        'title'=>$productname,
        'price'=> $price,
        'qty'=> $quantity,
        
    ];

    $ref_table = "products";
    $postRef_result = $database->getReference($ref_table)->push($postData);

   if($postRef_result){
       move_uploaded_file($_FILES['profile']['tmp_name'], "uploads/".$new_image);

   }

}




?>