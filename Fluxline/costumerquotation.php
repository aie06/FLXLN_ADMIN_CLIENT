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
  <link rel="stylesheet" href="account_style.css" />

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
            <li class="page__title">Request Quotation</li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  

  <main id="main">
    <div class="container">
    <div class="content_information_quote">
        <div class="content_header">
            <h2> <span class="brands">R</span>equest <span class="brands">Quotation</span></h2><br><hr>
            <p>Please fill in the information below. The field labels marked with <span class="brands">*</span> are required fields.</p>
            <h2>Information</h2>
        </div>
      
        <form action="productquotecode.php" method="POST">
           <div class="form">
           <?php
                if(isset($_SESSION['verified_user_id'])){
                    $uid = $_SESSION['verified_user_id'];
                    $user = $auth->getUser($uid);
            ?>
                <div class="form_content">
                    <label for="#" ><span class="brands">*</span> Full Name</label>
                    <input type="text" value="<?=$user->displayName;?>"  name="full_name" class = "content_form "  >
                    <label for="#"><span class="brands">*</span> Email Address</label>
                    <input type="email" value="<?=$user->email;?>" name = "email" class = "content_form " >
                    <label for="#"><span class="brands">*</span> Company Name</label>
                    <input type="text" value = ""  name ="company_name" class = "content_form company_name " >
                </div>
                <div class="form_content">
                    <label for="#"><span class="brands">*</span> Contact No</label>
                    <input type="text" value="<?=$user->phoneNumber;?>" name = "contact_no" class = "content_form " >
                    <label for="#"><span class="brands">*</span> TIN No</label>
                    <input type="number" value = "" name ="tin_no" class = "content_form " >
                </div>
                <div class="form_content">
                    <label for="BusType"><span class="brands">*</span> Business Type</label>
                    <select name="businesstype" name = "business_type" class="content_form">
                        <option selected>Sole Proprietor</option>
                        <option>Corporation</option>
                    </select>
                    <label for="#"> Referral</label>
                    <input type="text" value = ""  name ="referral" class = "content_form " >
                </div>
            </div>
            <?php
                }
            ?>
 
            <div class="content_information_quote">
                <h1>Items</h1>
                <div class="responsive__cart-area">
                    <div class="cart__table table-responsive" style = "height: 300px;">
                        <table width="100%" class="table">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th>NAME</th>
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
                </div>
            </div>
            <div class="submit_btn">
            <a href="#"><button type="submit" name = "quotation_submit" class="product__btn" >Submit</button></a>
            </div>
        </form>
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