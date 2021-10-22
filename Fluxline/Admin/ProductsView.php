<?php

include('includes/header.php');

?>
<div class ="container my-5">  
<div class="card">
        <h4 class="card-header">Products</h4>
        <h4 class=" mx-3 my-3">Product Lists</h4>
            <div class="ml-auto mr-3 mb-2">           
                <a href="Products.php"   >
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
            <th >Product Name</th>
            <th >Price</th>
            <th >Qty</th>
            <th >Unit</th>
            <th >Package</th>
            <th >Description</th>
            <th >Edit</th>
            <th >Delete</th>     
        </tr>
    </thead>
    <tbody>
        <?php
        include('dbcon.php');
        $ref_table = 'products';
        $fetchdata = $database->getReference( $ref_table)->getValue();
        $i=1;
        if($fetchdata >0){
            foreach($fetchdata as $key => $row){
                ?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $row['prodid'];?></td>
                        <td><?= $row['prodname']?></td>
                        <td><?= $row['price'];?></td>
                        <td><?= $row['quantity'];?></td>
                        <td><?= $row['productunit'];?></td>
                        <td><?= $row['carton'];?></td>
                        <td><?= $row['proddescription'];?></td>

                        <td>
                            <a href="edit-products.php?id=<?=$key;?>" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="delete-BusinessAssoView.php" class="btn btn-danger btn-sm">Delete</a>
                        </td>

                    </tr>
                <?php
            }
        }
        else{
            ?>
            <tr>
                <td colspan="8">No Records Found</td>
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