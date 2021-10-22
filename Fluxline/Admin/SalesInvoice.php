<?php
include('includes/header.php');

?>
   <div class ="container my-5">
        <div class="card">
            <h4 class="card-header">Sales Invoice</h4>
            
          
            <h4 class=" mx-3 my-3">Information</h4>
            <div class="ml-auto mr-3 mb-2">
                    <a href="SalesInvoiceView.php"   >
                    <span class="icon"><i class="fas fa-arrow-left"></i></span>
                    <span class="title">Back</span>
                    </a>
                </div>
            <div class="containerV2 ">
                <form class="card2 ">
        

                    
                    <div class="form-row mx-2 my-2">
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="invoiceno" placeholder="Invoice No">
                            </div>
                            <div class="form-group col-md-3 ml-auto">
                                <input type="date" class="form-control" id="Cdate" placeholder="CDate">
                            </div>
                        </div>

                        <div class="form-row mx-2 my-0">
                            <div class="form-group col-md-3 ">
                                <input type="text" class="form-control" id="salesorder" placeholder="Order No">
                            </div>
                        </div>

                    <div class="form-row mx-2">
                    
                        <div class="form-group col-md-4">
                            <label for="Customer">Customer</label>
                            <input type="text" class="form-control" id="SalesInvoicecustomer" placeholder="Customer">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="PaymentTerms">Payment Terms</label>
                            <select id="SalesInvoicepaymentterms" class="form-control">
                                <option selected>Cash</option>
                                <option>Bank</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="Ship">Mode of Payments</label>
                            <select id="SalesInvoicepaymentterms" class="form-control">
                                <option selected>Full Payment</option>
                                <option>Partial Payment</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="Ship">Percent</label>
                            <select id="SalesInvoicepaymentterms" class="form-control">
                                <option selected>10%</option>
                                <option>20%</option>
                                <option ></option>30%</option>
                                <option>40%</option>
                            </select>
                        </div>      
                    </div>
                    
                    <div class="form-row mx-2">

                            <div class="form-group col-md-4">
                                <label for="BusType">Business Type</label>
                                <select id="businesstype" class="form-control">
                                    <option selected>Sole Proprietor</option>
                                    <option>Corporation</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="TIN">TIN No</label>
                                <input type="text" class="form-control" id="salesIntinnumber" placeholder="TIN No">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="SDate">Shipment Date</label>
                                <input type="date" class="form-control" id="Sdate" placeholder="SDate">
                            </div>
                    </div>


                    <div class="form-row mx-2">
                            <div class="form-group col-md-4">
                                <label for="SalesAdd">Address</label>
                                <input type="text" class="form-control" id="salesaddress"placeholder="Address">
                            </div> 

                            <div class="form-group col-md-4">
                                <label for="referral">Referral</label>
                                <input type="text" class="form-control" id="referral"placeholder="Referral">
                            </div> 
                    </div>


                    <div class="form-row mx-2">
                            <div class="form-group col-md-3 ml-auto">
                            
                                <input type="text" class="form-control" id="subtotal"placeholder="Subtotal">
                            </div> 
                    </div>

            

                    <div class="form-row mx-2">
                            <div class="form-group col-md-3  ml-auto">
                            
                                <input type="text" class="form-control" id="tax"placeholder="Tax">
                            </div> 
                    </div>

                    <div class="form-row mx-2">
                            <div class="form-group col-md-3  ml-auto">
                            
                                <input type="text" class="form-control" id="total"placeholder="Total">
                            </div> 
                    </div>

        </div>

                    <div class="form-row mx-2 my-3"> 
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary col-md-12">Cancel</button>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary  col-md-12">Clear</button>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary  col-md-12">Save</button>      
                        </div>
                        </div>
                    <br>     
            </form>
    </div>
</div>


    <?php
include('includes/footer.php');

?>