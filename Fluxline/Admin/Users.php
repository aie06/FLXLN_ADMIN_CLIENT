
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
    
            <form class="card2" action="UsersFunction.php" method="POST">
        
                    <div class="form-row mx-2">
                
                        <div class="form-group col-md-2 ">
                            <label for="Position">Position*</label>
                            <select name="position" class="form-control">
                                <option selected>Administrator</option>
                                <option>Employee</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Lastname*</label>
                            <input type="text" class="form-control" name="lname" placeholder="Lastname ">
                        </div>
                    
                        <div class="form-group col-md-4">
                            <label for="inputAddress">Firstname*</label>
                            <input type="text" class="form-control" name="fname" placeholder="Firstname">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState"> Gender*</label><br>
                            <input type="radio"   name="gender" value="Male"placeholder="Gender"> Male  
                            <input type="radio"   name="gender" value="Female"placeholder="Gender"> Female
                        
                        </div> 
                    </div>
                
                    <div class="form-row mx-2">
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Email*</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputAddress2">Address*</label>
                            <input type="text" class="form-control" name="address" placeholder="">
                        </div>
                    </div>


                    <div class="form-row mx-2">
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Contact No.1*</label>
                            <input type="text" class="form-control" name="contactno1" placeholder="Contact No 1">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Contact No.2</label>
                            <input type="text" class="form-control" name="contactno2" placeholder="Contact No 2">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">Contact No.3</label>
                            <input type="text" class="form-control" name="contactno3" placeholder="Contact No 3">
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
                                <label for="inputCity">Username*</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputCity">Re-type Username*</label>
                                <input type="text" class="form-control" name="confirmusername" placeholder="Re-type username">
                            </div>                   
                    </div>
                    <div class="form-row mx-2">
                            <div class="form-group col-md-5">
                                <label for="inputState">Password*</label>
                                <input type="password" class="form-control" name="password"placeholder="Password">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputState">Confirm Password*</label>
                                <input type="password" class="form-control" name="confirmpassword"placeholder="Password">       
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
                            <button type="submit" name="save_users"class="btn btn-primary  col-md-12">Save</button>      
                        </div>
                    </div>  
            </form>
        </div>
    </div>
    <?php
include('includes/footer.php');

?>