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
        <?php
                include('dbcon.php');
                if(isset($_GET['id'])){
                    $key_child = $_GET['id'];
                    $ref_table = 'buss';
                    $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
                
                    if($getdata > 0){
                        ?>
            <form action="BusinessFunction.php" method="POST" class="card2" >
                <input type="hidden" name="key"value="<?= $key_child;?>">
                    <div class="form-row mx-2">
                    
                        <div class="form-group col-md-1 ">
                            <label for="Stakeholder">Stakeholder</label>
                            <select name="stakeholder" class="form-control" value ="<?=  $getdata['stakeholder']?>">
                                <option selected>Client</option>
                                <option>Suppliers</option>
                            </select>
                        </div>

                        <div class="form-group col-md-1">
                            <label for="ID">ID</label>
                            <input type="text" class="form-control" name="Id" value ="<?=  $getdata['Id']?>" placeholder="ID">
                        </div>

                        <div class="form-group col-md-4  ">
                            <label for="CompanyName">Company Name</label>
                            <input type="text" class="form-control" name="companyname" value ="<?=  $getdata['Compname']?>"placeholder="Company Name">
                        </div>

                        <div class="form-group col-md-3  ">
                            <label for="PropName">Proprietor Name</label>
                            <input type="text" class="form-control" name="propname" value ="<?=  $getdata['Proprietor_name']?>"placeholder="Proprietor Name">
                        </div>
                    </div>
                
                    <div class="form-row mx-2">
                            <div class="form-group col-md-4 ">
                                <label for="BussinessAdd">Address</label>
                                <input type="text" class="form-control" name="Businessaddress" value ="<?=  $getdata['Address']?>"placeholder="Address">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="email" value ="<?=  $getdata['Email']?>"placeholder="Email">
                            </div>
                    </div>


                    <div class="form-row mx-2">
                            <div class="form-group col-md-3 ">
                                <label for="BusinessContNo1">Contact No.1</label>
                                <input type="text" class="form-control" name="businessContNo1" value ="<?=  $getdata['Contact_1']?>"placeholder="Contact No.1">
                            </div>
                            <div class="form-group col-md-3 ">
                                <label for="BusinessContNo2">Contact No.2</label>
                                <input type="text" class="form-control" name="businessContNo2" value ="<?=  $getdata['Contact_2']?>"placeholder="Contact No.2">
                            </div>
                            <div class="form-group col-md-3  ">
                                <label for="BusinessContNo3">Contact No.2</label>
                                <input type="text" class="form-control" name="businessContNo3" value ="<?=  $getdata['Contact_3']?>"placeholder="Contact No.3">
                            </div> 
                    </div>
            
                    <div class="form-row mx-2">
                            <div class="form-group col-md-5 ">
                                <label for="TinNo">TIN No</label>
                                <input type="text" class="form-control" name="tin" value ="<?=  $getdata['Tin']?>"placeholder="TIN No">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="PostalCode">Postal Code</label>
                                <input type="text" class="form-control" name="postalcode" value ="<?=  $getdata['Postal_code']?>"placeholder="Postal Code">
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
                                <button type="submit" name="update_business" class="btn btn-primary  col-md-12">Update</button>      
                            </div>
                    </div>
            </form>
                <?php
                    }
                    else{
               
                        $_SESSION['status'] = "Invalid ID";
                        header('Location: BusinessAsso.php');
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
