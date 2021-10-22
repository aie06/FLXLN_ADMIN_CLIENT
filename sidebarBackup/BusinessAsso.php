<?php

include('includes/header.php');

?>

<div class ="container my-5">
    <div class="card">
        <h4 class="card-header">Business Associate</h4>
        <h4 class=" mx-3 my-3">Associate Information</h4>
        <div class="ml-auto mr-3 mb-2">
                    <a href="BusinessAssoView.php"   >
                    <span class="icon"><i class="fas fa-arrow-left"></i></span>
                    <span class="title">Back</span>
                    </a>
                </div>
        <div class="containerV2 ">
            <form action="BusinessFunction.php" method="POST" class="card2" >
            
                    <div class="form-row mx-2">
                    
                        <div class="form-group col-md-1 ">
                            <label for="Stakeholder">Stakeholder</label>
                            <select name="stakeholder" class="form-control">
                                <option selected>Client</option>
                                <option>Suppliers</option>
                            </select>
                        </div>

                        <div class="form-group col-md-1">
                            <label for="ID">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="ID">
                        </div>

                        <div class="form-group col-md-4  ">
                            <label for="CompanyName">Company Name</label>
                            <input type="text" class="form-control" name="companyname" placeholder="Company Name">
                        </div>

                        <div class="form-group col-md-3  ">
                            <label for="PropName">Proprietor Name</label>
                            <input type="text" class="form-control" name="propname" placeholder="Proprietor Name">
                        </div>
                    </div>
                
                    <div class="form-row mx-2">
                            <div class="form-group col-md-4 ">
                                <label for="BussinessAdd">Address</label>
                                <input type="text" class="form-control" name="Businessaddress" placeholder="Address">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                    </div>


                    <div class="form-row mx-2">
                            <div class="form-group col-md-3 ">
                                <label for="BusinessContNo1">Contact No.1</label>
                                <input type="text" class="form-control" name="businessContNo1" placeholder="Contact No.1">
                            </div>
                            <div class="form-group col-md-3 ">
                                <label for="BusinessContNo2">Contact No.2</label>
                                <input type="text" class="form-control" name="businessContNo2" placeholder="Contact No.2">
                            </div>
                            <div class="form-group col-md-3  ">
                                <label for="BusinessContNo3">Contact No.2</label>
                                <input type="text" class="form-control" name="businessContNo3" placeholder="Contact No.3">
                            </div> 
                    </div>
            
                    <div class="form-row mx-2">
                            <div class="form-group col-md-5 ">
                                <label for="TinNo">TIN No</label>
                                <input type="text" class="form-control" name="tin" placeholder="TIN No">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="PostalCode">Postal Code</label>
                                <input type="text" class="form-control" name="postalcode"placeholder="Postal Code">
                            </select>
                            </div>
                        
                    </div>
                    

                   
        </div>
                    <div class="form-row  mx-2  my-3">
                            <div class="col-md-1 ">
                                <button type="button" class="btn btn-primary col-md-12">Cancel</button>
                            </div>
                            <div class="col-md-1 ">
                                <button type="button" class="btn btn-primary col-md-12">Clear</button>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" name="save" class="btn btn-primary  col-md-12">Save</button>      
                            </div>
                    </div>
                </form>
          
        </div>
    </div>


    <?php
include('includes/footer.php');

?>
