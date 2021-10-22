
<?php
include('includes/header.php');
?>
    <div class ="container my-5">
        <div class="card">
        <h4 class="card-header">Add User</h4>
        
        <h6 class="mx-3 my-3" >Please fill in the information below. The field labels marked with * are required fields.</h6>
            
        <h4 class=" mx-3 mb-3">User Information</h4>
        <div class="ml-auto mr-3 mb-2">
                    <a href="UsersView.php"   >
                    <span class="icon"><i class="fas fa-arrow-left"></i></span>
                    <span class="title">Back</span>
                    </a>
                </div>
        <div class="containerV2 ">
    
            <form class="card2" action="registerFunction.php" method="POST">
        
                    <div class="form-row mx-2">
                
                        <div class="form-group col-md-4">
                            <label for="inputAddress">Fullname*</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Firstname">
                        </div>
                      
                    </div>
                
                    <div class="form-row mx-2">
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Email Address*</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                      
                    </div>


                    <div class="form-row mx-2">
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Phone No*</label>
                            <input type="text" class="form-control" name="phone" placeholder="Contact No 1">
                        </div>
                       
                        <br>    
                    </div>
                    </div> 
                    <br>  
                    <h4 class="mx-3 mb-3">Create User Account</h4>
                    <div class="containerV2">
                        <div class="card2">
                

                  
                    <div class="form-row mx-2">
                            <div class="form-group col-md-5">
                                <label for="inputState">Password*</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                          
                            <br>
                    </div>      
                
                    </div>  
                    </div> 
                    <div class="form-row mx-2 my-4">
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary col-md-12">Cancel</button>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary  col-md-12">Clear</button>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" name="register_btn" class="btn btn-primary  col-md-12">Save</button>      
                        </div>
                    </div>  
            </form>
        </div>
    </div>
    <?php
include('includes/footer.php');

?>