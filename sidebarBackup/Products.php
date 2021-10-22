
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
                <form class="card2" method="POST" action="ProductsFunction2.php" enctype="multipart/form-data">
            
                    <div class="form-row mx-2">        
                        <div class="form-group col-md-2">
                            <label for="prodID">Product ID</label>
                            <input type="text" class="form-control" name="prodid" placeholder="Product ID">
                        </div>

                        <div class="form-group col-md-5">
                            <label for="ProdUnit">Category</label>
                            <select name="category" class="form-control">
                                <option selected>Circuit Breakers</option>
                                <option>Electrical Conduit</option>
                                <option>Electrical Distribution Panel</option>
                                <option>Electrical Switches and Outlets</option>
                                <option>Electrical Wires and Cables</option>
                                <option>Meter Center</option>
                                <option>Other Products</option>
                            </select>
                        </div>

                      
                       
                    </div>
                

                    <div class="form-row mx-2">

                        <div class="form-group col-md-4">
                            <label for="ProdName">Product Name</label>
                            <input type="text" class="form-control" name="prodname" placeholder="Product Name">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="Price">Price</label>
                            <input type="text" class="form-control" name="price" placeholder="Price">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="Quantity">Quantity</label>
                            <input type="text" class="form-control"name="quantity" placeholder="Quantity">
                        </div>
                    </div>
                    
                    <div class="col-md-10">
                        <div class="form-group col-md-5">     
                                <!-- <img src="" class="user"alt="">           -->
                        </div>
                        
                        <div class="form-group col-md-5">
                            <label for="Profile">Upload Profile Image</label>
                            <input type="file" name="profile" class="form-control">
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
                            <button type="submit" name="save_product" class="btn btn-primary  col-md-12">Save</button>      
                        </div>
                    </div>
                <br>       
            </form>
        </div>
    </div>
    <?php
include('includes/footer.php');

?>