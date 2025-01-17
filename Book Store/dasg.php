<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit;
}

echo "Welcome, " . $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Books</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/dashboard.css">

</head>
<body>
    
<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> Tom Books </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="cart.html" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#Bridgetton">Bridgerton</a>
            <a href="#arrivals">arrivals</a>
        </nav>
    </div>

</header>


<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#Bridgetton" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
</nav>


<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Welcome to Tombooks</h3>
            <p>This is your one stop shop for any books</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p>0 min spend</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100 secure payment</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p>10 days returns</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div>

</section>

<section class="Bridgetton" id="Bridgetton">
    <h1 class="heading"><span>Bridgetton Books</span></h1>

    <div class="swiper Bridgetton-slider">
        <div id="notification-area"></div>
        <div class="swiper-wrapper">
            <!-- Each Slide -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-1.png" alt="Book Title 1 - Front Cover">
                </div>
                <div class="content">
                    <h3>The Duke and I </h3>
                    <div class="price">$15.00 <span>$20.99</span></div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-2.jpg" alt="Book Title 2 - Front Cover">
                </div>
                <div class="content">
                    <h3>The Viscount Who Loved Me</h3>
                    <div class="price">$12.00 <span>$19.99</span></div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-3.png" alt="Book Title 3 - Front Cover">
                </div>
                <div class="content">
                    <h3>Romancing Mr. Bridgerton</h3>
                    <div class="price">$13.00 <span>$19.99</span></div>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-4.jpg" alt="Book Title 4 - Front Cover">
                </div>
                <div class="content">
                    <h3>An Offer from a Gentleman</h3>
                    <div class="price">$14.00<span>$19.99</span></div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>



<section class="newsletter">

    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>new arrivals</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-1.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$15.00 <span>$20.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book3.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>
        </div>

    </div>

</section>

</section>


<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Manila </a>
            <img src="image/phmap.png" class="map" alt="">
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-envelope"></i> alyzacorine.corcino@tup.edu.ph </a>
            <a href="#"> <i class="fas fa-envelope"></i> alyzacorine.corcino@tup.edu.ph </a>
            <a href="#"> <i class="fas fa-envelope"></i> alyzacorine.corcino@tup.edu.ph </a>
            <a href="#"> <i class="fas fa-envelope"></i> alyzacorine.corcino@tup.edu.ph </a>
        </div>
        
    </div>

</section>



<script src="js/script.js"></script>

</body>
</html>