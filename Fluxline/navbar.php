<?php
 session_start();
 include('dbconfig.php');
?>
 <!-- Header -->
 <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <img src="./assests/logo.png" alt="logo">
            <a href="loginpage.php" class="scroll-link"><span>F</span>LUX<span>LINE</span></a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">FLUXLINE</span>
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="loginpage.php#header" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="loginpage.php#product" class="nav__link scroll-link">Brands</a>
              </li>
              <li class="nav__item">
                <a href="loginpage.php#category" class="nav__link scroll-link">Shop</a>
              </li>
              <li class="nav__item">
                <a href="loginpage.php#about-us" class="nav__link scroll-link">About</a>
              </li>
              <li class="nav__item">
                <a href="loginpage.php#footer" class="nav__link scroll-link">Contact</a>
              </li>
              <li>
                <div class="logout">
                     <button class="btn_logout">Log Out</button>
                </div>
              </li>
              
            </ul>
            
          </div>

          <div class="nav__icons">

          <a href="cart.php" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-cart-plus"></use>
              </svg>
              <!-- <span id="cart_total_cart">0</span> -->
            </a>
            
            <a href="quote.php" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <?php
                  include('dbconfig.php');
                  if(isset($_SESSION['verified_user_id']))
                  {
                    $uid = $_SESSION['verified_user_id'];
                    $ref_table = 'products_quote/'.$uid;
                    $total = $database->getReference($ref_table)->getSnapshot()->numChildren();
                    
                    if($total > 0)
                    {
                      ?>
                      <span id="cart_total_basket">
                      <?php
                          echo($total);
                      ?>
                      </span>
                      <?php
                    }
                  }
               ?>
            </a>
          
            

            <a href="cart.html" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-envelope-o"></use>
              </svg>
              <!-- <span id="cart_total_envelope">0</span> -->
            </a>

            <a href="account.php" class="icon_user-profile">
              <div class="icon__user">
                <!-- <img src="=$_SESSION['user_image']?>" alt="profile"></img> -->
                <?php
                    if(isset($_SESSION['verified_user_id'])){

                      $uid = $_SESSION['verified_user_id'];
                      $user = $auth->getUser($uid);
  
                      if($user->photoUrl != NULL){
                          ?>
                          <img src="<?=$user->photoUrl;?>" alt="user profile">
                         
                          <?php
                      }else{
                          ?>
                          <img src="./assests/user-profile.jpg" alt="user profile">
                          <?php
                      }
                    }
                ?>
              </div>
            </a>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"></button>
                <div id="myDropdown" class="dropdown-content" >
                    <a href="account.php"><p> My Account</p></a>
                    <a href="logout.php"><p> Log Out</p></a>
                </div>
            </div>

          </div>
        </nav>
      </div>
    </div>

    <script src="./js/products.js"></script>
    <script src="./js/navigation.js"></script>
    <script src="./js/dropdown.js"></script>
