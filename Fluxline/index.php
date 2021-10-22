<?php
  include('dbconfig.php');
  include('google_api_code.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="./assests/logo.png" type="image/x-icon" />


  <!-- Carousel -->
  <link rel="stylesheet" href="carousel.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
                <a href="#header" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="#product" class="nav__link scroll-link">Brands</a>
              </li>
              <li class="nav__item">
                <a href="#category" class="nav__link scroll-link">Shop</a>
              </li>
              <li class="nav__item">
                <a href="#about-us" class="nav__link scroll-link">About</a>
              </li>
              <li class="nav__item">
                <a href="#footer" class="nav__link scroll-link">Contact</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">

            <a href="#"  class="icon__item sign_upThree">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a>

          </div>
        </nav>
      </div>
    </div>

    <!-- Hero -->
    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <h1 class="">FOR INQUIRIES CALL</h1>
                  <h2>(02)913-3276 </h2>
                  <h2>(02)439-8356 </h2>
                  <a href="#"  ><button class="hero__btn sign_upOne">Sign In</button></a>
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <h1 class="">FOR INQUIRIES EMAIL</h1>
                  <h2>fluxline_96@yahoo.com</h2>
                  <a href="#" ><button class="hero__btn sign_upTwo">Sign In</button></a>
                </div>
              </div>
            </li>
          </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
            </svg>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Main -->
  <main id="main">
    <div class="container">
      <!-- Collection -->
      <div class="company-quote-text"><h1><span class="brands">"To</span> Exceed Our Customer's <span class="brands">Expectation</span> Profitability - Through <span class="brands">Quality</span> , Innovation and Warranted <span class="brands">Services"</span></h1></div>
      <!-- Collection -->
      <section id="collection" class="section collection">
        <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="collection__box">

            <div class="collection__content">
              <div class="collection__data">
                <span><h3>We are committed to be the highest quality distributor of electrical and industrial equipment and components that meet the business need of our customer.</h3></span>
                
              </div>
            </div>
          </div>
          <div class="collection__box">
            <div class="collection__content">
              <div class="collection__data">
                <span><h3>Provide outstanding customer service, market information and other services that may help our business grow and become preferred channel for industrial products and solutions.</h3></span>
              </div>
            </div>
          </div>
      </section>


       <!--Our Major Brands -->
       <section class="section latest__products" id="product">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <h1 class="primary__title-brands">OUR MAJOR <span class="brands">BRANDS</span></h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/ge.webp" alt="product">
                      <h3>Get</h3>
                      <p>Circuit Breakers</p>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/duraflex.webp" alt="product">
                      <h3>Duraflex</h3>
                      <p>Wires & Cables</p>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/schneider.webp" alt="product">
                      <h3>Schneider</h3>
                      <p>Circuit Breakers</p>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/fuji.webp" alt="product">
                      <h3>Fuji Electric</h3>
                      <p>Magnetic Starters</p>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/abb.webp" alt="product">
                      <h3>ABB</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/3m.webp" alt="product">
                      <h3>3M</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/wego.webp" alt="product">
                      <h3>WEGO</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/yokohama.webp" alt="product">
                      <h3>Yokohama</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/phiflex.webp" alt="product">
                      <h3>Philflex</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/panasonic.webp" alt="product">
                      <h3>Panasonic</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/omro.webp" alt="product">
                      <h3>Omron</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/neltex.webp" alt="product">
                      <h3>Neltex</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/Royu.webp" alt="product">
                      <h3>Royu</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/omni.webp" alt="product">
                      <h3>Omni</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/mitsubishi electric.webp" alt="product">
                      <h3>Mitsubishi Electric</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/himel.webp" alt="product">
                      <h3>Himel</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/kdk.webp" alt="product">
                      <h3>KDK</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/kss-electric.webp" alt="product">
                      <h3>KSS Electric</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/fujikiden.webp" alt="product">
                      <h3>Fujikiden</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/firefly.webp" alt="product">
                      <h3>Firefly</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/columbia.webp" alt="product">
                      <h3>Columbia</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/chint-electric.webp" alt="product">
                      <h3>Chint Electric</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/cea-electric.webp" alt="product">
                      <h3>CEA Electric</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/anly.webp" alt="product">
                      <h3>Anly</h3>
                    </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./assests/Brands icons/camsco.webp" alt="product">
                      <h3>Camsco</h3>
                    </div>
                </li>
              </ul>
            </div>

            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
                </svg>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- Show Now -->
      <form action="">
      <section class="category__section section" id="category">
        
        <div class="tab__list">
          <div class="title__container tabs">
            <div class="section__titles category__titles ">
              <div class="section__title filter-btn active" data-id="All Products">
                <span class="dot"></span>
                <h1 class="primary__title">All Products</h1>
              </div>
            </div>
            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Circuit Breakers">
                <span class="dot"></span>
                <h1 class="primary__title">Circuit Breakers</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Electrical Conduit">
                <span class="dot"></span>
                <h1 class="primary__title">Electrical Conduit</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Electrical Distribution Panel">
                <span class="dot"></span>
                <h1 class="primary__title">Electrical Distribution Panel</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Electric Switches and Outlets">
                <span class="dot"></span>
                <h1 class="primary__title">Electric Switches and Outlets</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Electrical Wires and Cables">
                <span class="dot"></span>
                <h1 class="primary__title">Electrical Wires and Cables</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Meter Center">
                <span class="dot"></span>
                <h1 class="primary__title">Meter Center</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title filter-btn" data-id="Other Products">
                <span class="dot"></span>
                <h1 class="primary__title">Other Products</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="category__content">
          <?php 
            $ref_table = 'products';
            $fetchdata = $database->getReference($ref_table)->getValue();
            if($fetchdata > 0)
            {
                foreach($fetchdata as $key => $row)
                {
                    ?>
                    <div class="product category__products">
                        <div class="product__header">
                            <img src="<?=$row['image']?>" alt="">
                        </div>
                        <div class="product__footer">
                            <h3><?=$row['title']?></h3>
                        </div>
                        <ul>
                            <li>
                              <a data-tip="Quick View" data-place="left" href="product.php?id=<?=$key?>">
                                <h1>  Quick View</h1>
                              </a>
                            </li>
                        </ul>
                    </div>
                        
                    <?php
                }
            }
            ?>

          </div>
        </div>
    </div>
    </section>
    </form>

    
   <!-- About Us Section -->
   <section class="section about-us" id ="about-us">
    <div class="about-us__container">
      <div class="who-we-are">
        <h1>WO WE ARE</h1>
          <p>FLUXLINE by nature is an infant organization of young and dynamic entrepreneurs whose dream is to venture into the world of engineering and industrial.</p>
          <p>The concept of organization is to strive to the best in the industry by providing quality products, Innovations and Services to best satisfy its customer and general clientele.</p>
          <p>Since its inception , FLUXLINE have focused on meeting the customer's need for quality products that represent top manufacturer's warranty for high and error-free performance. As young organization engaged  in the competitive world of engineering, innovations and technology, it has the chance to open wide the avenue for advancement by adapting new knowledge on business, management , industry development and meeting customer's expectation for prompt and invaluable services.</p>
      </div>
    </div>
  </section>


    <!-- NewsLetter
    <section class="section quote" id="contact">
      <div class="container">
        <div class="quote-content">
          <div class="quote__content">
            <div class="quote__title">
              <h1>GET A FREE QUOTE!</h1>
              <p>Short message about free quote</p>
            </div>
            <form action="#">
              <div class="quote-form">
  
                <div class="quote-layout">
  
                  <div class="quote-input">
                    <label for="#">Last Name</label>
                    <input type="text" placeholder="Enter your last name" class="quote-input-field">
                  </div>
                  <div class="quote-input">
                    <label for="#">First Name</label>
                    <input type="text" placeholder="Enter your firts name" class="quote-input-field">
                  </div>
  
                </div>
                <div class="quote-layout">
  
                  <div class="quote-input">
                    <label for="#">Email</label>
                    <input type="email" placeholder="Enter your email address" class="quote-input-field">
                  </div>
                  <div class="quote-input">
                    <label for="#">Phone</label>
                    <input type="tel" placeholder="Enter your phone number" class="quote-input-field">
                  </div>
                </div>
  
                <div class="quote-layout">
  
                  <div class="quote-input">
                    <label for="#">Date</label>
                    <input type="date" placeholder="Enter your email address" class="quote-input-field">
                  </div>
                  <div class="quote-input">
                    <label for="#">Message</label>
                    <textarea name="message" id="quote-mesage" placeholder="Message..."  class="quote-input-field"></textarea>
                  </div>
                </div>
                
              </div>
               <a class="newsletter__link" href="#">subscribe</a> 
            </form>
          </div>
          <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=25 Annapolis St. Brgy E. Rodriguez Senior, Quezon City" allowfullscreen=""></iframe></div>
        </div>
      </div>
    </section> -->

  </main>

  <!-- End Main -->

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

  <!-- PopUp Sign In -->
  <div class="popup hide__popup">
    <div class="popup__content">
      <div class="popup__close">
        <svg>
          <use xlink:href="./images/sprite.svg#icon-cross"></use>
        </svg>
      </div>
      <div class="popup__left">
        <div class="popup-img__container">
          <iframe class="popup__img" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=25 Annapolis St. Brgy E. Rodriguez Senior, Quezon City" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="popup__right">
        <div class="right__content">
          <h1>Sign In <span>Now</span>!</h1>
          <p>Log In to our website for ease of communication
          </p>
          <form action="signincode.php" method="POST">
            <input type="email" placeholder="Enter your email..." name="email" class="popup__form" required>
            <input type="password" placeholder="Enter your password..." name="password" class="popup__form" required>
            <div class="forgot-sign-up">
            <a href="#">Forgot password?</a>
            <a href="#" onclick="show('pop-up-sign-up')">Sign Up?</a>
            </div>
            <input type="submit" value="Sign In" name="sign_in_btn" class="popup__btn-signin">
          </form>
          <div class="google-icon">
              <div class="separation-or">
                  <hr>
                  <p>or</p>
                  <hr>
              </div>
              <a href="<?=$google_client->createAuthURL()?>"><img src="./assests/g-icon.png" alt="google icon"></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- PopUp Sign Up -->
  <div class="popup" id="pop-up-sign-up">
    <div class="popup__content">
      <div class="popup__close">
        <a href="" onclick="<script>document.getElementById('pop-up-sign-up').style.display = 'none';</script>"><svg><use xlink:href="./images/sprite.svg#icon-cross"></use></svg></a>
      </div>
      <div class="popup__left">
      <div class="popup-img__container">
          <iframe class="popup__img" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=25 Annapolis St. Brgy E. Rodriguez Senior, Quezon City" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="popup__right">
        <div class="right__content">
          <h1>Sign Up <span>Now</span>!</h1>
          <form action="code.php" method="POST">
            <input type="text" placeholder="Enter full name..." name="full_name" class="popup__form" required >
            <p>*Lastname, Firstname</p>
            <input type="number" placeholder="Enter phone number..." name="phone" class="popup__form" required >
            <p>*Phone number must be 11-digits</p>
            <input type="email" placeholder="Enter email..." name="email" class="popup__form" required>
            <p>*Email must be verified</p>
            <input type="password" placeholder="Enter password..." name="password1" class="popup__form" required >
            <p>*Password must be atleast 6-digits</p>
            <input type="password" placeholder="Re-type password..." name="password2" class="popup__form" required >
          
            <input type="submit" value="Sign Up" name="btn_sign_up" class="popup__btn-signin">
          </form>
        </div>
      </div>
    </div>
  </div>

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
  <script src="./js/products.js"></script>
  <script src="./js/loginnavigation.js"></script>
  <script src="./js/slider.js"></script>
  
  <!-- POP UP MESSAGE -->
  <?php
    include('popupmessage.php');
  ?>
</body>

</html>