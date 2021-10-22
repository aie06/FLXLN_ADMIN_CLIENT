<?php

include('includes/header.php');

?>

<div class ="container my-5">  
<div class="card">
        <h4 class="card-header">Sales Invoice</h4>
        <h4 class=" mx-3 my-3">Sales Invoice List</h4>
        <div class="ml-auto mr-3 mb-2">
          
                        <a href="SalesInvoice.php"   >
                        <span class="icon"><i class="fas fa-plus-square"></i></span>
                        <span class="title">Add New</span>
                        </a>
                    
           
        </div>
        <div class="containerV2 ">
<table class="table">
    <thead>
        <tr>
          
            <th >ID</th>
            <th >Item Name</th>
            <th >Price</th>
            <th >Quantity</th>
            <th >Total Amount</th>
            <th >Edit</th>
            <th >Delete</th>     
        </tr>
    </thead>
    <tbody>
        <?php
        include('dbcon.php');
        $ref_table = 'sampleOrder';
        $fetchdata = $database->getReference( $ref_table)->getValue();
        $i=1;
        if($fetchdata >0){
            foreach($fetchdata as $key => $row){
                ?>
                    <tr>
                       
                        <td><?= $row['prodID'];?></td>
                        <td><?= $row['itemname']?></td>
                        <td><?= $row['price'];?></td>
                        <td><?= $row['qty'];?></td>
                        <td><?= $row['tamount'];?></td>
                      

                        <td>
                            <a href="edit-BusinessAssoView.php" class="btn btn-primary btn-sm">Edit</a>
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
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>
</div>
</div>
    </div>

<?php

include('includes/footer.php');

?>