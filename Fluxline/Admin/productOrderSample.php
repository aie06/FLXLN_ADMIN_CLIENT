
  <form action="productOrder.php" method="POST" class="card">
                    <div class="form-row mx-2">
                            <div class="form-group col-md-2">
                                <label for="Product ID">Product ID</label>
                                <input type="text" class="form-control"name="prodID" placeholder="Product ID">
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Item Name">Item Name</label>
                                <input type="text" class="form-control"name="itemname" placeholder="Item Name">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Price">Price</label>
                                <input type="text" class="form-control"name="price" placeholder="Price">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Quantity">Quantity</label>
                                <input type="text" class="form-control"name="qty" placeholder="Quantity">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Total Amount">Total Amount</label>
                                <input type="text" class="form-control"name="tamount" placeholder="Total Amount">  
                            </div>

                            <div class="form-group col-md-1">
                            <label for="Total Amount" style="color:transparent">Browse</label>
                                <button type="button" name="browse"class="btn btn-primary col-md-12 form-control" >Browse</button>
                            </div>

                            <div class="form-group col-md-1">
                            <label for="Total Amount" style="color:transparent">Add</label>
                                <button type="submit" name="add_order" class="btn btn-primary col-md-12 form-control" >Add</button>
                            </div>
                            
                    </div>   
        </form>

