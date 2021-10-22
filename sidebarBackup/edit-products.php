
<?php
include('includes/header.php');

?>
   <div class ="container my-5">
   <div class="card">
        <h4 class="card-header">Products</h4>
        <h4 class=" mx-3 my-3">Product Information</h4>
        <div class="ml-auto mr-3 mb-2">
                    <a href="ProductsView.php"   >
                    <span class="icon"><i class="fas fa-arrow-left"></i></span>
                    <span class="title">Back</span>
                    </a>
                </div>
        <div class="containerV2 ">
        <?php
                include('dbcon.php');
                if(isset($_GET['id'])){
                    $key_child = $_GET['id'];
                    $ref_table = 'products';
                    $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
                
                    if($getdata > 0){
                        ?>
            <form class="card2" method="POST" action="ProductsFunction.php">
                <input type="hidden" name="key"value="<?= $key_child;?>">
                    <div class="form-row mx-2">        
                        <div class="form-group col-md-2">
                            <label for="prodID">Product ID</label>
                            <input type="text" class="form-control" name="prodid" value ="<?=  $getdata['prodid']?>"placeholder="Product ID">
                        </div>

                        <div class="form-group col-md-5">
                            <label for="ProdUnit">Product Unit</label>
                            <select name="productunit" class="form-control"value ="<?=  $getdata['productunit']?>">
                                <option selected>AC</option>
                                <option>AC</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="Carton">Carton</label>
                            <select name="carton" class="form-control"value ="<?=  $getdata['carton']?>">
                                <option selected>pc</option>
                                <option>pc</option>
                            </select>
                        </div>  
                    </div>
                

                    <div class="form-row mx-2">

                        <div class="form-group col-md-4">
                            <label for="ProdName">Product Name</label>
                            <input type="text" class="form-control" name="prodname" value ="<?=  $getdata['prodname']?>"placeholder="Product Name">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="Price">Price</label>
                            <input type="text" class="form-control" name="price" value ="<?=  $getdata['price']?>"placeholder="Price">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="Quantity">Quantity</label>
                            <input type="text" class="form-control"name="quantity" value ="<?=  $getdata['quantity']?>"placeholder="Quantity">
                        </div>
                    </div>

                    <div class="form-row mx-2">
                        <div class="form-group col-md-6">
                            <label for="proddesc">Product Description</label>
                            <input type="text" class="form-control" name="proddescription" value ="<?=  $getdata['proddescription']?>"placeholder="Product Description">
                        </div> 
                    </div>
                    </div>
                    <div class="form-row mx-2 my-3">
                        <div class="col-md-1">
                            <button type="button" name="cancel"class="btn btn-primary col-md-12">Cancel</button>
                        </div>
                        <div class="col-md-1">
                            <button type="button" name="clear"class="btn btn-primary  col-md-12">Clear</button>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" name="update_product" class="btn btn-primary  col-md-12">Update</button>      
                        </div>
                    </div>
                <br>       
            </form>
            <?php
                    }
                    else{
               
                        $_SESSION['status'] = "Invalid ID";
                        header('Location: Products.php');
                        exit();
                    }
                }
                else{
               echo $getdata;
               echo $key_child;
            echo $_GET['id'];
                  
                }
              
            ?>
        </div>
    </div>
    <?php
include('includes/footer.php');

?>