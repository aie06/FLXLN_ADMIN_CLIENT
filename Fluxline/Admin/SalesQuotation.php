<?php
include('includes/header.php');

?>
  <div class ="container my-5">
    <div class="card">
            <h4 class="card-header">Sales Quotation</h4>
            
          
            <h4 class=" mx-3 my-3">Information</h4>
            <div class="ml-auto mr-3 mb-2">
                    <a href="SalesQuotatioinView.php"   >
                    <span class="icon"><i class="fas fa-arrow-left"></i></span>
                    <span class="title">Back</span>
                    </a>
                </div>
            <div class="containerV2 ">
                <form class="card2 ">
                   
                    <div class="form-row mx-2">         
                        <div class="form-group col-md-4">
                            <label for="SalesCompanyName">Company Name</label>
                            <input type="text" class="form-control" name="salescompname" placeholder="Company Name">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="PaymentTerms">Payment Terms</label>
                            <select name="paymentterms" class="form-control">
                                <option selected>Cash</option>
                                <option>Bank</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="SalesOrder">Sales Quotation</label>
                            <input type="text" class="form-control" name="salesorder" placeholder="Order No">
                        </div>
                    </div>
                
                <div class="form-row mx-2">
                        <div class="form-group col-md-4">
                            <label for="BusType">Business Type</label>
                            <select name="businesstype" class="form-control">
                                <option selected>Sole Proprietor</option>
                                <option>Corporation</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="TIN">TIN No</label>
                            <input type="text" class="form-control"name="tinnumber" placeholder="TIN No">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="Date">Date</label>
                            <input type="date" class="form-control"name="date" placeholder="Date">
                        </div>
                </div>


                <div class="form-row mx-2">
                        <div class="form-group col-md-4">
                            <label for="SalesAdd">Address</label>
                            <input type="text" class="form-control"name="salesaddress"placeholder="Address">
                        </div> 

                        <div class="form-group col-md-4">
                            <label for="referral">Referral</label>
                            <input type="text" class="form-control" name="referral"placeholder="Referral">
                        </div> 
                </div>
            
        
                    
                        <?php

                include('productOrderView.php');

                ?>
            
                    <div class="form-row mx-2">
                        <div class="form-group col-md-4 ml-auto">
                            <input type="text" class="form-control" name="subtotal"placeholder="Subtotal">
                        </div> 
                </div>

                <div class="form-row mx-2">
                        <div class="form-group col-md-4 ml-auto">
                            <input type="text" class="form-control" name="tax"placeholder="Tax">
                        </div> 
                </div>

                <div class="form-row mx-2">
                        <div class="form-group col-md-4 ml-auto">
                        
                            <input type="text" class="form-control"name="total"placeholder="Total">
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
                            <button type="submit" name="save_Sales"class="btn btn-primary  col-md-12">Save</button>      
                        </div>
                </div>
                <br>
            </form>
        </div>
    </div>
    <?php
include('includes/footer.php');

?>