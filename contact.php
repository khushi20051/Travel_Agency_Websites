<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-hiking"></i> travel. </a>
    
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.php">home</a>
            <a href="contact.php">contact</a>
            
            <a href="canoeing.php">reviews</a>
            <a href="#blogs">blogs</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id="search-btn" class="fas fa-search"></div>
        </div>
    
    </header>

    <!-- header section ends -->

    <!-- search form  -->

    <div class="search-form">

        <div id="close-search" class="fas fa-times"></div>
    
        <form action="">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>


    <!-- search form  end-->


    <!-- Inner Page Header Starts -->
    
    <section class="inner-head">

        <div class="container">

            <div class="breadcumb">

                <ul>
                    <li><a href="#">Contact Us</a></li>
                </ul>

            </div>

        </div>
        
    </section>

    <!-- Inner Page Header Ends -->


    <section class="about" id="about">

        <div class="form-container">

            <h1 class="heading"> Book Own Appointment </h1>

            <form action="contactdb.php" method="post">

                <div class="form">
                    <input type="text" name="user" id="" placeholder="First Name" autocomplete>
                    <input type="text" name="last" id="" placeholder="Last Name" autocomplete>
                </div>
                <div class="form">
                    <input type="Email" name="email" id="" placeholder="Your Email" autocomplete>
                    <input type="tel" name="mobile" id="" placeholder="Your Phone Number" autocomplete>
                </div>
                <div class="form">
                    <select  id="" name="city" autocomplete>
                        <option  name="city" value="From City">From City</option>
                        <option  name="city" value="Jalandhar">Jalandhar</option>
                        <option  name="city" value="New Delhi">New Delhi</option>
                        <option  name="city" value="Rajsthan">Rajsthan</option>
                        <option name="city"  value="Mumbai">Mumbai</option>
                    </select>

                    <select name="citys" id="" autocomplete>
                    <option  name="city" value="From City">From City</option>
                        <option  name="city" value="Jalandhar">Jalandhar</option>
                        <option  name="city" value="New Delhi">New Delhi</option>
                        <option  name="city" value="Rajsthan">Rajsthan</option>
                        <option name="city"  value="Mumbai">Mumbai</option>
                    </select>
                </div>
                <div class="form">
                    <input type="date" name="date" id="" placeholder="Departing" autocomplete>
                    <input type="date" name="dates" id="" placeholder="Arriving" autocomplete>
                </div>

                <div class="form wt-form" name="people"   autocomplete>
                    <input type="number" name="people" id="" placeholder="Kids(0-14)" autocomplete>
                    <input type="number" name="people" id="" placeholder="Adults(15-64)" autocomplete>
                    <input type="number" name="people" id="" placeholder="Seniors(65+)" autocomplete>
                </div>

                <div class="form">
                    <textarea name="text" id="" cols="30" rows="10" placeholder="Your Message" autocomplete></textarea>
                </div>

                <div class="form" align="center">
                    <input type="submit"   name="submit" value="Send Message" class="btn">
                </div>
                
                

            </form>

        </div>

    
    </section>


    <section class="clients">

        <div class="swiper clients-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide silde"><img src="images/client-logo-1.png" alt=""></div>
                <div class="swiper-slide silde"><img src="images/client-logo-2.png" alt=""></div>
                <div class="swiper-slide silde"><img src="images/client-logo-3.png" alt=""></div>
                <div class="swiper-slide silde"><img src="images/client-logo-4.png" alt=""></div>
            </div>
        </div>
    
    </section>



    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>quick links</h3>
                <a href="index.html#home">home</a>
                <a href="index.html#about">about</a>
                <a href="index.html#shop">shop</a>
                <a href="index.html#packages">packages</a>
                <a href="index.html#reviews">reviews</a>
                <a href="index.html#blogs">blogs</a>
            </div>
    
            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my order</a>
                <a href="#">my wishlist</a>
                <a href="#">ask questions</a>
                <a href="#">terms of use</a>
                <a href="#">privacy policy</a>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91-732-2985-650 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91-7322985650 </a>
                <a href="#"> <i class="fas fa-envelope"></i> raghuveersharma7322@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
            </div>
    
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-github"></i> github </a>
            </div>
    
        </div>
    
        <div class="credit">created by <span>Anchal Kali</span></div>
    
    </section>

<!-- footer section ends -->



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    
</body>
</html>