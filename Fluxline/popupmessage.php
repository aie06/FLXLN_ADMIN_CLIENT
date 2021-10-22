<script src ="./js/sweetalert.min.js"></script>

  <!-- Pop-up Message -->
  <div style="display: none;">
      <?php
      if($_SESSION['login'] == "LoginSuccessfully" && $_SESSION['login'] != ''){
      ?>
        <script>
          swal({
          title:"Sign In Successfully",
          text: "Thank you for signed in",
          icon: "success",
          dangerMode: "Ok",
        })
    
        </script>
      <?php
          unset($_SESSION['login']); 
      }
       
      if($_SESSION['itemadd'] == "ItemAdded" && $_SESSION['itemadd'] != ''){
        ?>
         <script>
          swal({
          title:"Item Added.",
          text: "Item added for quoation.",
          icon: "success",
          dangerMode: "Ok",
        })
        </script>
        <?php
        unset($_SESSION['itemadd']);
      }
      else if($_SESSION['itemadd'] == "AlreadyAdded" && $_SESSION['itemadd'] != ''){
        ?>
        <script>
          swal({
          title:"Already Added",
          text: "Item is already added in quote basket.",
          icon: "warning",
          dangerMode: "Ok",
        })
        </script>
        <?php
          unset($_SESSION['itemadd']);
      }
      else if($_SESSION['itemadd'] == "CostumerQuoteAdded" && $_SESSION['itemadd'] != ''){
        ?>
        <script>
          swal({
          title:"Quotation Submitted",
          text: "Your quotaion is submitted.",
          icon: "success",
          dangerMode: "Ok",
        })
        </script>
        <?php
          unset($_SESSION['itemadd']);
      }

      
      if($_SESSION['status'] == "Registered" && $_SESSION['status'] != ''){
      ?>
        <script>
          swal({
          title:"Registered Successfully",
          text: "You may now sign up",
          icon: "success",
          dangerMode: "Ok",
        })
        </script>
        
      <?php
        unset($_SESSION['status']);
      }
      else if($_SESSION['status'] == "AlreadyRegistered" && $_SESSION['status'] != ''){
        ?>
        <script>
          swal({
          title:"Already Registered",
          text: "You already have an account.",
          icon: "warning",
          dangerMode: "Ok",
        })
        </script>
        <?php
          unset($_SESSION['status']);
      }
      else if($_SESSION['status'] == "Invalid" && $_SESSION['status'] != ''){
        ?>
        <script>
          swal({
          title:"Invalid Registration",
          text: "Email must be verified and information must be corrected format.",
          icon: "error",
          dangerMode: "Ok",
        })
        </script>
        <?php
          unset($_SESSION['status']);
      }
      else if($_SESSION['status'] == "NotMatched" && $_SESSION['status'] != ''){
        ?>
        <script>
          swal({
          title:"Password not matched",
          text: "Please check your password carefully.",
          icon: "error",
          dangerMode: "Ok",
        })
        </script>
        <?php
          unset($_SESSION['status']);
      }
      else if($_SESSION['status'] == "InvalidPassword" && $_SESSION['status'] != ''){
        ?>
        <script>
          swal({
          title:"Wrong Password",
          text: "Try Again.",
          icon: "error",
          dangerMode: "Ok",
        })
        </script>
        <?php
          unset($_SESSION['status']);
      }
      else if($_SESSION['status'] == "InvalidEmail" && $_SESSION['status'] != ''){
        ?>
        <script>
          swal({
          title:"Invalid Email",
          text: "Please make sure you are registered!.",
          icon: "error",
          dangerMode: "Ok",
        })
        </script>
        <?php
          unset($_SESSION['status']);
      }
      
      ?>
      
  </div>