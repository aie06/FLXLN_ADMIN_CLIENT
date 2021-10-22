
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
  
        <h4 class="card-header">Add Users</h4>
        <h4 class=" mx-3 my-3">Users</h4>
        <div class="ml-auto mr-3 mb-2">
          
                        <a href="Users.php"   >
                        <span class="icon"><i class="fas fa-plus-square"></i></span>
                        <span class="title">Add New</span>
                        </a>
                    
           
        </div>
        <div class="containerV2 ">
        
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
             <th>Sl.No</th>
            <th >User ID</th>
            <th >Name</th>
            <th >Email</th>
            <th >Contact</th>
            <th >Edit</th>
            <th >Delete</th>     
        </tr>
    </thead>
    <tbody>
        <?php
        include('dbcon.php');
        $ref_table = 'Users';
        $fetchdata = $database->getReference( $ref_table)->getValue();
        $i=1;
        if($fetchdata >0){
            foreach($fetchdata as $key => $row){
                ?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $row['username'];?></td>
                        <td><?= $row['fname']?></td>
                        <td><?= $row['email'];?></td>
                        <td><?= $row['contactno1'];?></td>
                       
                      

                        <td>
                            <a href="edit-users.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <!--<a href="delete-users.php" class="btn btn-danger btn-sm">Delete</a>-->
                            <form action="UsersFunction.php" method="POST">
                                <button type="submit" name="delete_users" value=<?= $key?> class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>

                    </tr>
                <?php
            }
        }
        else{
            ?>
            <tr>
                <td>No Records Found</td>
            </tr>
            <?php
        }

        ?>
        
    </tbody>
</table>
</div>
</div>
    </div>



<?php
include('includes/footer.php');
?>