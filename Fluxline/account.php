<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="./assests/logo.png" type="image/x-icon" />


    <!-- Animate On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="account_style.css" />


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
                        <li class="page__title">Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main id="main">
    <?php
        if(isset($_SESSION['verified_user_id'])){
            $uid = $_SESSION['verified_user_id'];
            $user = $auth->getUser($uid);
    ?>
        <div class="container">
            <div class="header_container">
                <div class="header_content">
                    <!-- <img src="=$_SESSION['user_image']?>" alt="profile picture"> -->
                    <?php
                        if($user->photoUrl != NULL){
                            ?>
                            <img src="<?=$user->photoUrl;?>" alt="user profile">
                            <?php
                        }else{
                            ?>
                            <img src="./assests/user-profile.jpg" alt="user profile">
                            <?php
                        }
                    ?>
                    <!-- <h1>=$_SESSION['user_first_name']?> =$_SESSION['user_last_name']?></h1> -->
                    <h1><?= $user->displayName;?></h1>
                </div>
            </div>
            <div class="body_container">
                <div class="body_header">
                    <ul>
                        <li> <a href="#" onclick="show('myaccount','myorder','quotation')">My Account</a></li>
                        <li> <a href="#" onclick="show('myorder','myaccount','quotation')"> My Order</a></li>
                        <li><a href="#" onclick="show('quotation','myaccount','myorder')"> Quotation</a></li>
                    </ul>
                </div>
                <div class="body_content" id = "myaccount">
                    <div class="body_content_header">
                        <div class="body_content_header_content">
                            <div>
                                <h1>My Account</h1>
                                <p>View and edit your profile info below.</p>
                            </div>
                            <div class = "update-button">
                                <button class="btn-update" onclick="edit_info('edit_info','fullname','phone','messagefname','messagephone')">Edit</button>
                            </div>
                        </div>
                        <div class="content_information">
                            
                             <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="form_content">
                                    <label for="#" >Full Name</label>
                                    <input type="text" value="<?= $user->displayName;?>" id= "fullname" name="full_name" class = "content_form " disabled >
                                    <p id="messagefname">*Lastname, Firstname</p>
                                    <label for="#">Email</label>
                                    <input type="email" value="<?=$user->email;?>" class = "content_form " disabled >
                                    <label for="#">Contact</label>
                                    <input type="text" value = "<?=$user->phoneNumber;?>" id="phone" name ="phonenumber" class = "content_form " disabled >
                                    <p id="messagephone">*Phone number must be 11-digits</p>
                                </div>
                                <div id ="edit_info" class="profile_content">
                                    <?php
                                        if($user->photoUrl != NULL){
                                            ?>
                                            <img src="<?=$user->photoUrl;?>" alt="user profile">
                                            <?php
                                        }else{
                                            ?>
                                            <img src="./assests/user-profile.jpg" alt="user profile">
                                            <?php
                                        }
                                    ?>
                                   
                                    <div class = "update-button">
                                        <label for="">Upload profile image</label>
                                        <input type="file" name="profile" class="btn-update btn_upload">
                                    </div>
                                    <div class = "update-cancel-button">
                                        <button type="submit" name="update_user_profile" class="btn-update">Update</button>
                                        <button class="btn-update btn_cancel">Cancel</button>
                                    </div>
                                </div>
                                
                            </form>
                           
                        </div>
                        
                    </div>
                </div>
        <?php
        }
    ?>  
                <div class="body_content" id = "myorder">
                    <div class="body_content_header">
                        <div class="body_content_header_content">
                            <div>
                                <h1>My Order</h1>
                                <p>Check the status of orders or browse through  your past purchases.</p>
                            </div>
                        </div>
                        <div class="form_content">
                           <p>No Order Yet!</p>

                        </div>
                    </div>
                </div>
                <div class="body_content" id = "quotation">
                    <div class="body_content_header">
                        <div class="body_content_header_content">
                            <div>
                                <h1>Quotation</h1>
                                <p>Quotation History.</p>
                            </div>
                        </div>
                        <div class="form_content">
                           <p>No Quotation Yet!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div> 
       
    </main> 
    
    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script src = "./js/account.js"></script>
</body>

</html>