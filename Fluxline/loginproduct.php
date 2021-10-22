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
  
 <?php
  include('navbar.php');
 ?>

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
                          <li>


                          <div class="product-details__btn">
                          <a  href="#"><form action="productquotecode.php?id=<?=$key_child?>" method ="POST"><button type="submit" name = "add_to_quote<?=$key_child?>" class="product__btn"  >Add To Quote </button></form></a>
                          </div>

                        </li>
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
  <!-- <script src="./js/products.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/slider.js"></script> -->
</body>

</html>