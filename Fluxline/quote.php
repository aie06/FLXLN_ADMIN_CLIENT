<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="./assests/logo.png" type="image/x-icon" />




  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="styles.css" />

  <title>Fluxline Industrial and Electrical Distribution System Inc</title>
</head>
<body>
<?php include('navbar.php')?>

        <div class="page__title-area">
            <div class="container">
                <div class="page__title-container">
                    <ul class="page__titles">
                        <li>
                            <a href="loginpage.php">
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="page__title">Quote</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main id="main">
        <section class="section cart__area">
            <div class="container">
                <div class="responsive__cart-area">
                    <form class="cart__form">
                        <div class="cart__table table-responsive">
                            <table width="100%" class="table">
                                <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th>NAME</th>
                                        <th>REMOVE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_SESSION['verified_user_id']))
                                        {
                                            $uid = $_SESSION['verified_user_id'];
                                            $ref_table = 'products_quote/'.$uid;
                                            $fetch_data = $database->getReference($ref_table)->getValue();
                                            if($fetch_data > 0)
                                            {
                                                foreach($fetch_data as $key => $row){
                                    ?>
                                                    <tr>
                                                        <td class="product__thumbnail">
                                                            <a href="#">
                                                                <img src="<?=$row['image']?>" alt="">
                                                            </a>
                                                        </td>
                                                        <td class="product__name">
                                                            <a href="#"><?=$row['title']?></a>
                                                            <br><br>
                                                            <small><?=$row['category']?></small>
                                                        </td>
                                                    
                                                        <td class="product__subtotal">
                                                            <form action="productquotecode.php" method="POST">
                                                                <button type="submit" name="quote_delete" value="<?=$key?>" class="remove__cart-item">
                                                                    <svg>
                                                                        <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                    <?php
                                                }
                                            }
                                            ?>
                                            <div class="empty_quote_table"></div>
                                            
                                            <?php
                                        }
                                    ?>
                                   
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-btns">
                            <div class="proceed_to_quote">
                                <a href="costumerquotation.php">PROCEED TO QUOTE</a>
                            </div>
                            <div class="proceed_to_quote">
                              <form action="productquotecode.php" method="POST">
                                  <button type="submit" name="quote_all_delete" class="proceed_to_quote remove__cart-item ">
                                    Delete All
                                      <svg>
                                          <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                      </svg>
                                  </button>
                              </form>
                            </div>
                           
                           
                        </div>

                       
                    </form>
                </div>
            </div>
        </section>
    </main>
        
              

     <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer__top">
        <!-- <div class="footer-top__box">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-top__box">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div> -->
        <div class="footer-top__box">
          <h3>Address</h3>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-location"></use>
              </svg>
            </span>
            25 Annapolis St. Brgy E. Rodriguez Senior, Quezon City
          </div>
        </div>
      
        <div class="footer-top__box">
          <h3>Email</h3>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-envelop"></use>
              </svg>
            </span>
            fluxline_96@yahoo.com
          </div>
        </div>
        <div class="footer-top__box">
          <h3>Phone</h3>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-phone"></use>
              </svg>
            </span>
              (02) 891933-276
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-phone"></use>
              </svg>
            </span>
              (02) 34398-356
          </div>
          <div>
            <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-phone"></use>
              </svg>
            </span>
              (0917) 709-2347
          </div>
        </div>
        <div class="footer-top__box">
          <h3></h3>
          <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=25 Annapolis St. Brgy E. Rodriguez Senior, Quezon City" allowfullscreen=""></iframe></div>
        </div> 
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer-bottom__box">
        
      </div>
      <div class="footer-bottom__box">

      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

    <!-- Go To -->

    <a href="#header" class="goto-top scroll-link">
        <svg>
            <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
        </svg>
    </a>

  <!-- <script src="./js/sweetalert.min.js"></script> -->

  <?php
      //include('popupmessage.php');
  ?> 

</body>

</html>