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
                            <a href="index.php">
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="page__title">Cart</li>
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
                                        <th>UNIT PRICE</th>
                                        <th>QUANTITY</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="./assests/Products/Circuit_Breaker/circuit_easypact_40.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Circuit breaker Easypact EZC100H - TMD - 40 A</a>
                                            <!-- <br><br>
                                            <small>White/6.25</small> -->
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
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
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="./assests/Products/Circuit_Breaker/schneider.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Schneider A9F74232 miniature circuit breaker - iC60N - 2 poles - 32 A - C curve</a>
                                            <!-- <br><br>
                                            <small>White/6.25</small> -->
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
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
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="./images/products/sumsung/samsung2.jpeg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Apple iPhone 11</a>
                                            <br><br>
                                            <small>White/6.25</small>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
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
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="./images/products/iPhone/iphone4.jpeg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Apple iPhone 11</a>
                                            <br><br>
                                            <small>White/6.25</small>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
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
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>

                        <!-- <div class="cart-btns">
                            <div class="continue__shopping">
                                <a href="/">Continue Shopping</a>
                            </div>
                             <div class="check__shipping">
                                <input type="checkbox">
                                <span>Shipping(+7$)</span>
                            </div> 
                        </div> -->

                        <div class="cart__totals">
                            <h3>Cart Totals</h3>
                            <ul>
                                <li>
                                    Subtotal
                                    <span class="new__price">501.98</span>
                                </li>
                                <li>
                                    Vat
                                    <span>0</span>
                                </li>
                                <li>
                                    Total
                                    <span class="new__price">501.98</span>
                                </li>
                            </ul>
                            <a href="">PROCEED TO CHECKOUT</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Facility Section
        <section class="facility__section section" id="facility">
            <div class="container">
                <div class="facility__contianer">
                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-airplane"></use>
                            </svg>
                        </div>
                        <p>FREE SHIPPING WORLD WIDE</p>
                    </div>

                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-credit-card-alt"></use>
                            </svg>
                        </div>
                        <p>100% MONEY BACK GUARANTEE</p>
                    </div>

                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                            </svg>
                        </div>
                        <p>MANY PAYMENT GATWAYS</p>
                    </div>

                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-headphones"></use>
                            </svg>
                        </div>
                        <p>24/7 ONLINE SUPPORT</p>
                    </div>
                </div>
            </div>
        </section>-->
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

    <!-- Animate On Scroll -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

    <!-- Custom JavaScript -->
    <!-- <script src="./js/products.js"></script>
    <script src="./js/popup.js"></script>
    <script src="./js/navigation.js"></script> -->
</body>

</html>