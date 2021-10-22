<?php
include('includes/header.php');

?>


    <div class="cardBox">
        <div class="cardB">
            <div>
                <div class="numbers">1,500</div>
                <div class="cardName">Sales</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>

        <div class="cardB">
            <div>
                <div class="numbers">12,500</div>
                <div class="cardName">Expenses</div>
            </div>
            <div class="iconBx">
                <ion-icon name="card-outline"></ion-icon>
            </div>
        </div>

        <div class="cardB">
            <div>
                <div class="numbers">1,500</div>
                <div class="cardName">Profit</div>
            </div>
            <div class="iconBx">
                <ion-icon name="pricetags-outline"></ion-icon>
            </div>
        </div>
    </div>

    <div class="graphBox">
            <div class="box">
                <canvas id="myChart"></canvas>
            </div>
            <div class="box">
                <canvas id="earning"></canvas>
            </div>
    </div>

    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>
                    Recent Orders
                </h2>
            </div>
            <table class="table">
    <thead>
        <tr>
            <th >Sl.no</th>
            <th >ID</th>
            <th >Product Name</th>
            <th >Price</th>
            <th >Qty</th>
           
             
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
        <!--TOP 5 PRODUCTS-->
        <div class="topProducts">
        <div class="cardHeader">
                <h2>
                    Top 5 Products
                </h2>
            </div>
            <table class="table">
    <thead>
        <tr>
         
            <th >Product Name</th>
            <th >Qty</th>
           
             
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
                        <td><?= $row['prodname']?></td>                    
                        <td><?= $row['quantity'];?></td>
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



 
<?php
include('includes/footer.php');

?>