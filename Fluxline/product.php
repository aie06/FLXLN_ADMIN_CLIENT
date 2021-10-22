<?php
  session_start();
  include('dbconfig.php');
?>
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
            <a href="/" class="scroll-link"><span>F</span>LUX<span>LINE</span></a>
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
                <a href="index.php#header" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="index.php#product" class="nav__link scroll-link">Brands</a>
              </li>
              <li class="nav__item">
                <a href="index.php#category" class="nav__link scroll-link">Shop</a>
              </li>
              <li class="nav__item">
                <a href="index.php#about-us" class="nav__link scroll-link">About</a>
              </li>
              <li class="nav__item">
                <a href="#footer" class="nav__link scroll-link">Contact</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">

            <a href="index.php"  class="icon__item sign_upThree">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a>

          </div>
        </nav>
      </div>
    </div>


    <div class="page__title-area">
      <div class="container">
        <div class="page__title-container">
          <ul class="page__titles">
            <li>
              <a href="index.php">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-home"></use>
                </svg>
              </a>
            </li>
            <li class="page__title">Product</li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main id="main">
    <div class="container">
      <!-- Products Details -->
      <section class="section product-details__section">
      <?php 
            if(isset($_GET['id'])){
              $key_child = $_GET['id'];
            }
            $ref_table = 'products';
            $get_child_data = $database->getReference($ref_table)->getChild($key_child)->getValue();
            if($get_child_data > 0)
            {
               
              ?>
              <div class="product-detail__container">
                <div class="product-detail__left">
                  <div class="details__container--left">
                    <div class="product__picture" id="product__picture">
                      <div class="picture__container">
                        <img src="<?=$get_child_data['image']?>" id="pic" />
                      </div>
                    </div>
                    <div class="zoom" id="zoom"></div>
                  </div>
                </div>
                <div class="product-detail__right">
                    <div class="product-detail__content">
                      <h3><?=$get_child_data['title']?></h3>
                      <div class="product__review"><div class="rating"></div></div>
                      
                      <div class="product__info-container">
                        <ul class="product__info">
                          
                          <li>
                            <span>Product Type:</span>
                            <a href="#"><?=$get_child_data['category']?></a>
                          </li>
                          <li>
                            <span>Availability:</span>
                            <a href="#" class="in-stock">In Stock (<?=$get_child_data['qty']?> Items)</a>
                          </li>
                          <!-- <li>

                            <div class="input-counter">
                              <span>Quantity:</span>
                              <div>
                                <span class="minus-btn">
                                  <svg>
                                    <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                  </svg>
                                </span>
                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                <span class="plus-btn">
                                  <svg>
                                    <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                  </svg>
                                </span>
                              </div>
                            </div>
                          </li> -->
                          <!-- <li>

                          <div class="product-details__btn">
                            <a class="add" href="quote.php">
                              <span>
                                <svg>
                                  <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                                </svg>
                              </span>
                              ADD TO QUOTE</a>
                          </div>

                        </li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
              </div>
              <?php
              
            }
            ?>  
      </section>
    </div>
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

  <!-- Glide Carousel Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->
  <script src="./js/navigation.js"></script>
 
</body>

</html>