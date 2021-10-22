<?php
session_start();
include('includes/header.php');

?>
<div class ="container my-5"> 
<?php
        if(isset($_SESSION['status']))
        {
            echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
            unset($_SESSION['status']);
        }
    ?> 
<div class="card">
        <h4 class="card-header">Business Associate</h4>
        <h4 class=" mx-3 my-3">Business Associate List</h4>
        <div class="ml-auto mr-3 mb-2">
          
                        <a href="BusinessAsso.php"   >
                        <span class="icon"><i class="fas fa-plus-square"></i></span>
                        <span class="title">Add New</span>
                        </a>
                    
           
        </div>
        <div class="containerV2 ">
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th >Sl.no</th>
            <th >ID</th>
            <th >Company Name</th>
            <th >Proprietor Name</th>
            <th >Email</th>
            <th >TIN No</th>
            <th >Postal Code</th>
            <th >Edit</th>
            <th >Delete</th>     
        </tr>
    </thead>
    <tbody>
        <?php
        include('dbcon.php');
        $ref_table = 'buss';
        $fetchdata = $database->getReference( $ref_table)->getValue();
        $i=1;
      
        if($fetchdata >0){
            foreach($fetchdata as $key => $row){
    
                ?>
                
                    <tr>
                        
                        <td><?= $i++;?></td>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['Compname']?></td>
                        <td><?= $row['Proprietor_name'];?></td>
                        <td><?= $row['Email'];?></td>
                        <td><?= $row['Tin'];?></td>
                        <td><?= $row['Postal_code'];?></td>
                        <td>
                            <a href="edit-businessasso.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="BusinessFunction.php" method="POST">
                                <button type="submit" name="delete_business" value=<?= $key?> class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>

                    </tr>
                <?php
            }
        }
        else{
            ?>
            <tr>
                <td colspan="9">No Records Found</td>
            </tr>
            <?php
        }

        ?>
     
    </tbody>
</table>
</div>
</div>

<?php

include('includes/footer.php');

?>