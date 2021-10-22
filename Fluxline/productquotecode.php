<?php
session_start();
    include('dbconfig.php');


    // SUBMIT COSTUMER QUOTATION
    if(isset($_POST['quotation_submit'])){

        $fullname = $_POST['full_name'];
        $email = $_POST['email'];
        $contact = $_POST['contact_no'];
        $companyname = $_POST['company_name'];
        $businesstype = $_POST['business_type'];
        $tinno = $_POST['tin_no'];
        $referral = $_POST['referral'];

    
        if(isset($_SESSION['verified_user_id']))
        {
            $uid = $_SESSION['verified_user_id'];
            $ref_table = 'products_quote/'.$uid;
            $fetch_quote_data = $database->getReference($ref_table)->getValue();

            $postData = [
                'full_name' => $fullname,
                'email' => $email,
                'contact' => $contact,
                'company_name' => $companyname,
                'business_type' => $businesstype,
                'tin_no' => $tinno,
                'referral' => $referral,
                'quotation_items' => $fetch_quote_data
            ];
           
        }
        if(isset($_SESSION['verified_user_id']))
        {
            //ADD COSTUMER QUOTATION
            $uid = $_SESSION['verified_user_id'];
            $ref_table_quote = 'costumer_quotation/'.$uid;
            $postRef_result = $database->getReference($ref_table_quote)->push($postData);
            if($postRef_result){
                //DELETE ALL QUOTE ITEMS
                $ref_table_delete = 'products_quote/'.$uid;
                $deletequery_result = $database->getReference($ref_table_delete)->remove();
                $_SESSION['itemadd'] = "CostumerQuoteAdded";
                header('Location: loginpage.php#category');
                
            }
        } 
    }   


    // PRODUCT ADD QUOTE
   
    if(isset($_GET['id'])){
        $key_child = $_GET['id']; 
    
        if(isset($_POST['add_to_quote'.$key_child])){
   
            if(isset($_SESSION['verified_user_id']))
            {
                $uid = $_SESSION['verified_user_id'];
                $ref_table = 'products';
                $get_child_data = $database->getReference($ref_table)->getChild($key_child)->getValue();
                if($get_child_data > 0)
                {
                    $ref_table_quote = 'products_quote/'.$uid;
                    $postRef_result = $database->getReference($ref_table_quote)->push($get_child_data);
                    if($postRef_result){
                        $_SESSION['itemadd'] = "ItemAdded";
                        header('Location: loginpage.php#category');

                    }
                    
                }
            }    
        }
    }

    // DELETE ALL PRODUCT QUOTE
    if(isset($_POST['quote_all_delete']))
    {
        if(isset($_SESSION['verified_user_id']))
        {
            $uid = $_SESSION['verified_user_id'];
            $ref_table_delete = 'products_quote/'.$uid;
            $deletequery_result = $database->getReference($ref_table_delete)->remove();
            if($deletequery_result){

                header('Location: quote.php');
            }
            else{
                // MAG MEMESSAGE TAYO DITO PAG WALANG NA DELETE

            }
        }
    }   
   

    // PRODUCT QUOTE DELETE
    if(isset($_POST['quote_delete']))
    {
        $del_id = $_POST['quote_delete'];
        if(isset($_SESSION['verified_user_id']))
        {
            $uid = $_SESSION['verified_user_id'];
            $ref_table_delete = 'products_quote/'.$uid.'/'.$del_id;
            $deletequery_result = $database->getReference($ref_table_delete)->remove();
            if($deletequery_result){
                header('Location: quote.php');
            }
            else{
                // MAG MEMESSAGE TAYO DITO PAG WALANG NA DELETE

            }
        }
    }      

?>