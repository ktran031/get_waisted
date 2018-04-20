<?php require_once 'includes/csv.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travis Mathew | Get Waisted</title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <!-- Slick Slider CDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Nav Section -->
<nav>
    <div id="header-nav">
        <div class="header-nav-inner">
            <div class="navbar">
                <div class="logo">
                    <a href="#"><img src="./assets/images/logo.png" /></a></div>
                <div id="mobile-menu">
                    <ul class="mobile-menu">
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Login / Register</a></li>
                        <li><a href="#">Brand</a></li>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Cart</a></li>
                    </ul>
                </div>

                <div class="menu">
                    <ul class="menu">
                        <li class=""><a href=#>Shop</a></li>
                        <li class=""><a href=#>Login / Register</a></li>
                        <li class=nav-brand><a href=#>Brand</a></li>
                        <li class="nav-search"><a href=#>Search</a></li>
                        <li class="nav-cart"><a href=#>Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>

<!-- Header Section -->
<header>
    <img src="./assets/images/gw-main-header.jpg" alt="Get Waisted Header" class="header-img">
</header>

<!-- Content Section -->
<div class="container">

    <!-- Video Section -->
    <section id="video-section">
        <div class="row">
            <div class="video-wrapper">
                <img src="./assets/images/gw-video.jpg" alt="Video Image">
                <img src="./assets/images/gw-play.png" class="play-btn" alt="Play Button" onclick="revealVideo('video','youtube')" >
                <div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
                    <div class="lightbox-container">
                        <div class="lightbox-content">
                            <button onclick="hideVideo('video','youtube')" class="lightbox-close">
                                Close | ✕
                            </button>
                            <div class="video-container">
                                <iframe id="youtube" width="960" height="540" src="https://www.youtube.com/embed/VqYLYtucJy8?showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Video Section End -->

    <!-- Cuater Section -->
    <section id="cuater">
        <div class="row">
            <img src="./assets/images/gw-cuater-logo.png" alt="" class="cuater-logo">
            <p>Summer living is always here with Cuater and we’ve decided to celebrate that. There's nothing quite like that feeling you get when you wake up, throw on your Cuater piece, and then head straight to a pool party with your friends. Today, we've decided to share that feeling with you in hopes of you joining us. Here's to you, here's to us, and here's to<br />#GetWaisted.</p>
            <button class="btn shop-now">SHOP NOW</button>
        </div>
    </section> <!-- Cuater Section -->

    <!-- Contest Email Form Section -->
    <section id="contest">
        <div class="row">
        <div class="contest-wrapper">
            <div class="col-1-of-2 contest-left">
                <h2>Contest</h2>
                <p>Want to win the #GetWaisted package below? To win the featured items, all you have to do is subscribe to our list, which will keep you in the loop on all Cuater related things. <i>Five winners will be randomly selected November 1‌st, 2017.</i></p>
                <!-- Contest Form -->
                <form action="" id="contest-email" method="post">
                    <div class="row">
                        <!-- name input -->
                        <div class="col-1-of-2 newsletter-email-form-wrapper">
                            <div class="name-input">
                                <input required type="text" autocapitalize="off" autocorrect="off" spellcheck="false" placeholder="Enter Name" name="name" id="name" title="Sign up for our newsletter" class="newsletter-email-input-text">
                            </div>
                        </div> <!-- name input -->
                        <!-- email input -->
                        <div class="col-1-of-2 newsletter-email-form-wrapper">
                            <div class="email-input">
                                <input required type="email" autocapitalize="off" autocorrect="off" spellcheck="false" placeholder="Enter Email" name="email" id="contest-newsletter-email" title="Sign up for our newsletter" class="newsletter-email-input-text">
                            </div>
                            <div class="actions">
                                <button type="submit" title="Subscribe" class="btn contest-submit"><span>SUBMIT</span></button>
                            </div>
                        </div> <!-- email input -->
                    </div> <!-- row -->
                </form>
            </div>
            <div class="col-1-of-2 contest-right">
                <img class="contest-img" src="./assets/images/gw-contest-lifestyle.jpg" alt="">
            </div>
        </div>
        </div> <!-- Contest Wrapper -->
        <!-- Contest Belt Image -->
        <div class="row">
            <img src="./assets/images/gw-belts.png" alt="" class="contest-belt-img">
        </div>
    </section> <!-- Contest Email Form Section End -->

    <!-- Photo Gallery Section -->
    <section id="photo-gallery">
        <div class="row">
            <h2>Photo Gallery</h2>
            <p>Check out this gallery to see a few of our favorite activities from the pool party!</p>
            <div class="gallery-container">
                <div class="gw-slick">
                    <div>
                        <img src="./assets/images/gw-slide-1.jpg" alt="">

                    </div>
                    <div>
                        <img src="./assets/images/gw-slide-2.jpg" alt="">

                    </div>
                    <div>
                        <img src="./assets/images/gw-slide-3.jpg" alt="">

                    </div>
                    <div>
                        <img src="./assets/images/gw-slide-4.jpg" alt="">

                    </div>
                    <div>
                        <img src="./assets/images/gw-slide-5.jpg" alt="">

                    </div>
                    <div>
                        <img src="./assets/images/gw-slide-6.jpg" alt="">

                    </div>
                </div>
            </div>
            <!-- Slide Count -->
            <div class="slide-count-wrap">
                <span class="current-count"></span> /
                <span class="total-count"></span>
            </div>
            <button class="btn shop-now">SHOP NOW</button>
        </div>
    </section>  <!-- Photo Gallery Section End -->
</div> <!-- container -->



<!-- Footer Section -->
<footer>
    <!-- Top Footer Section -->
    <div class="top-footer">
        <h2>BE FIRST</h2>
        <p>Want exclusive offers and first access to products? Sign up for email alerts.</p>
        <form action="" id="newsletter-email">
            <div class="newsletter-email-form-wrapper">
                <div class="email-input">
                    <input required type="email" autocapitalize="off" autocorrect="off" spellcheck="false" placeholder="YOUR EMAIL ADDRESS" name="email" id="newsletter" title="Sign up for our newsletter" class="newsletter-email-input-text">
                </div>
                <div class="actions">
                    <button type="submit" title="Subscribe" class="btn"><span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
                </div>
            </div>
        </form>
        <div class="footer-social-media">
            <ul>
                <li><a href="//www.facebook.com/travismathew" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="//twitter.com/travismathew" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="//instagram.com/travismathew" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="//www.youtube.com/user/TheTRAVISMATHEW" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Footer Nav Section -->
    <div class="row footer-nav-list">
        <div class="col-1-of-4">
            <h2>Shop</h2>
            <ul>
                <li class="nav-sub-item">
                    <a href="#">New Arrivals</a>
                </li>
                <li class="nav-sub-item">
                    <a href="#">Tops</a>
                </li>
                <li class="nav-sub-item">
                    <a href="#">Bottoms</a>
                </li>
                <li class="nav-sub-item">
                    <a href="#">Accessories</a>
                </li>
                <li class="nav-sub-item">
                    <a href="#">Red Fitness</a>
                </li>
                <li class="nav-sub-item">
                    <a href="#">Classics</a>
                </li>
                <li class="nav-sub-item">
                    <a href="#">Sales Rack</a>
                </li>
            </ul>
        </div>
        <div class="col-1-of-4">
            <h2>Brand</h2>
            <li class="nav-sub-item">
                <a href="#">Video</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Blog</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Lookbook</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Team</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Retail</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Garage</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Corporate</a>
            </li>
        </div>
        <div class="col-1-of-4">
            <h2>Support</h2>
            <li class="nav-sub-item">
                <a href="#">Account</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Returns</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">FAQ</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Legal</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Contact</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Careers</a>
            </li>
        </div>
        <div class="col-1-of-4">
            <h2>Social Media</h2>
            <li class="nav-sub-item">
                <a href="#">Facebook</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Twitter</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">Instagram</a>
            </li>
            <li class="nav-sub-item">
                <a href="#">YouTube</a>
            </li>
        </div>
    </div>

    <!-- Footer Accordion Section -->
    <div class="row">
                <ul class="footer-mobile-nav-list">
                    <li class="footer-mobile-nav-item">
                        <div class="footer-mobile-nav-item-inner">
                            <a href="#" class="footer-mobile-nav-item-inner-heading plus">SHOP</a>
                            <ul class="nav-sub-list">
                                <div class="nav-sub-list-inner">
                                    <li class="nav-sub-item">
                                        <a href="#">New Arrivals</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Tops</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Bottoms</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Accessories</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Red Fitness</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Classics</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Sales Rack</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="footer-mobile-nav-item">
                        <div class="footer-mobile-nav-item-inner">
                            <a href="#" class="footer-mobile-nav-item-inner-heading plus">BRAND</a>
                            <ul class="nav-sub-list">
                                <div class="nav-sub-list-inner">
                                    <li class="nav-sub-item">
                                        <a href="#">Video</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Blog</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Lookbook</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Team</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Retail</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Garage</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Corporate</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="footer-mobile-nav-item">
                        <div class="footer-mobile-nav-item-inner">
                            <a href="#" class="footer-mobile-nav-item-inner-heading plus">SUPPORT</a>
                            <ul class="nav-sub-list">
                                <div class="nav-sub-list-inner">
                                    <li class="nav-sub-item">
                                        <a href="#">Account</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Returns</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">FAQ</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Legal</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Contact</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Careers</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="footer-mobile-nav-item">
                        <div class="footer-mobile-nav-item-inner">
                            <a href="#" class="footer-mobile-nav-item-inner-heading plus">SOCIAL media</a>
                            <ul class="nav-sub-list">
                                <div class="nav-sub-list-inner">
                                    <li class="nav-sub-item">
                                        <a href="#">Facebook</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Twitter</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">Instagram</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a href="#">YouTube</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                </ul>
    </div>

    <!-- Bottom Footer Section -->
    <img src="./assets/images/bottom_image.png" alt="" class="bottom-img">

</footer>

<script>

    //** Video Lightbox Functions **/
    // Reveal lightbox
    function revealVideo(div,video_id) {
        let video = document.getElementById(video_id).src;
        document.getElementById(video_id).src = video+'&autoplay=1'; // adding autoplay to the URL
        document.getElementById(div).style.display = 'block';
    }

    // Hide lightbox
    function hideVideo(div,video_id) {
        let video = document.getElementById(video_id).src;
        let cleaned = video.replace('&autoplay=1',''); // removing autoplay form url
        document.getElementById(video_id).src = cleaned;
        document.getElementById(div).style.display = 'none';
    }
</script>

<script src="assets/js/jquery.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->
<script type="text/javascript" src="assets/js/slick_slider.js" ></script>
<script src="assets/js/main.js"></script>
</body>
</html>