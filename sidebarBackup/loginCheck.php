
<?php
     session_start();   
        include('dbcon.php');
        $ref_table = 'Users';
        $fetchdata = $database->getReference( $ref_table)->getValue();
      

            if($fetchdata >0){
                foreach($fetchdata as $key => $row){
                    if($_POST['username'] ==  $row['username'] && $_POST['password'] ==  $row['password'])
                    {                 
                   
                       include('dashboard.php');
                        continue;

                    } 
                        
                }
            }
            else{
                $_SESSION['status'] = "No records found.";
                        header('Location: login.php');
            }     

?>
       
