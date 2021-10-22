<?php

include('includes/header.php');

?>

<div class ="container my-5">  
<div class="card">
        <h4 class="card-header">Sales Reports</h4>
        
        <div class="containerV2 ">
              
    <div class="dropdown show ml-1 my-2">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Organize by date
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Monthly</a>
    <a class="dropdown-item" href="#">Quarterly</a>
    <a class="dropdown-item" href="#">Annually</a>
  </div>
</div>
             
<table class="table table-striped ">
    <thead>
        <tr>
        
            <th >Invoice No</th>
            <th >Customer Name</th>
            <th >Date</th>
            <th >Total</th>
            <th >Details</th>
          
        </tr>
    </thead>
        <tbody>
            
        <tr>
            <td>1</td>
            <td>ABC Company</td>
            <td>Mar. 30, 2021</td>
            <td>10000</td>

            <td>
                <a href="#" class="btn btn-primary btn-sm">View</a>
            </td>
        </tr>   

        <tr>
            <td>2</td>
            <td>ABC Company</td>
            <td>Mar. 30, 2021</td>
            <td>10000</td>

            <td>
                <a href="#" class="btn btn-primary btn-sm">View</a>
            </td>
        </tr>  
        
        <tr>
            <td>3</td>
            <td>ABC Company</td>
            <td>Mar. 30, 2021</td>
            <td>10000</td>

            <td>
                <a href="#" class="btn btn-primary btn-sm">View</a>
            </td>
        </tr> 
        
        <tr>
            <td>4</td>
            <td>ABC Company</td>
            <td>Mar. 30, 2021</td>
            <td>10000</td>

            <td>
                <a href="#" class="btn btn-primary btn-sm">View</a>
            </td>
        </tr>  
        
        <tr>
            <td>5</td>
            <td>ABC Company</td>
            <td>Mar. 30, 2021</td>
            <td>10000</td>

            <td>
                <a href="#" class="btn btn-primary btn-sm">View</a>
            </td>
        </tr>   
        
        
        </tbody>
</table>
</div>
</div>
</div>



<?php

include('includes/footer.php');

?>