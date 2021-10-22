
<?php
include('includes/header.php');

?>
<div class ="container my-5">
    <form class="card">
        <h4 class="card-header">Company Details</h4>

            <div class="form-row mx-2">

                <div class="form-group col-md-5">
                    <label for="inputEmail4">Company Name</label>
                    <input type="text" class="form-control" name="companyname" placeholder="Lastname ">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>

            </div>
        
          

            <div class="form-row mx-2">

                <div class="form-group col-md-3">
                    <label for="inputCity">Street/Bldg Name</label>
                    <input type="text" class="form-control" name="street" placeholder="Street/House No">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Brgy</label>
                    <input type="text" class="form-control" name="brgy"placeholder="Brgy">
                </div> 
                <div class="form-group col-md-3">
                    <label for="inputCity">City/Region/District</label>
                    <input type="text" class="form-control" name="city" placeholder="City/Region/District">
                </div> 
                <div class="form-group col-md-3">
                    <label for="inputCity">Postal Code</label>
                    <input type="text" class="form-control" name="postalcode" placeholder="Postal code">
                </div> 
                  
            </div>

          
      
            <div class="form-row mx-2">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Contact No.1</label>
                        <input type="text" class="form-control" name="contactno1" placeholder="Contact No.1">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">Contact No.2</label>
                        <input type="text" class="form-control" name="contactno2" placeholder="Contact No.2">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">Contact No.3</label>
                        <input type="text" class="form-control" name="contactno3" placeholder="Contact No.3">
                    </div>
                              
            </div>
            <div class="form-row mx-2">
                    <div class="form-group col-md-4">
                        <label for="inputCity">TIN Number</label>
                        <input type="text" class="form-control" name="tin" placeholder="TIN Number">
                    </div>                
            </div>
            <br>

            <div class="form-row mx-2">

                    <div class="col-md-1">
                        <button type="button" class="btn btn-primary col-md-12">Cancel</button>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-primary  col-md-12">Clear</button>
                    </div>
                    <div class="col-md-1">
                        <button type="submit" name="save_users"class="btn btn-primary  col-md-12">Save</button>      
                    </div>
            </div>
            <br>          
      </form>
    </div>
    <?php
include('includes/footer.php');

?>