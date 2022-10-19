<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sweet Temptation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/mobyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/slick.css" rel="stylesheet" type="text/css"/>
        <link href="css/slick-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.min.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Topbar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="container">
                    <div class="top-bar-container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="top-bar-phone">
                                    <i class="fa fa-phone-alt"></i>
                                    +012-345-6789
                                </div>    
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="top-bar-logo">
                                    <a href="index.html">
                                        <h1><span class="text-secondary">Sweet</span>Temptation</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="top-bar-social">
                                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a class="btn btn-primary btn-square rounded-circle" href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>    
            </div>
        </div>            
        <!-- Topbar End -->

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">                   
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12">
                            <div class="bottom-bar-left">
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle login" data-bs-toggle="dropdown">Login / Register</a>
                                    <div class="dropdown-menu login">
                                        <a href="login-register.html" class="dropdown-item login">Login</a>
                                        <a href="login-register.html" class="dropdown-item login">Register</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-12">
                            <div class="search">
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12">
                            <div class="user">
                                <a href="wishlist.html" class="btn wishlist">
                                    <i class="fa fa-heart"></i>
                                    <span>(0)</span>
                                </a>
                                <a href="cart.html" class="btn cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>(0)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <!-- Bottom Bar End -->

        <!--Navbar Start-->
        <div class="container-fluid">
            <header id="header">
                <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
                    <div class="container-fluid">
                        <div class="navbar-logo">
                            <a href="index.html" class="navbar-brand d-flex d-lg-none">
                                <h2 class="m-0 display-4 text-secondary"><span class="text-white">Sweet</span>Temptation</h2>
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mx-auto py-0">
                                <li><a href="index.html" class="nav-item nav-link active">Home</a></li>
                                <li><a href="icecream.html" class="nav-item nav-link">Ice Cream</a></li>
                                <li><a href="cake.html" class="nav-item nav-link">Cake</a></li>
                                <li class="nav-item dropdown">
                                    <a href="#" id="menu" data-bs-toggle="dropdown" class="nav-link dropdown-toggle" data-bs-display="static">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" data-bs-toggle="dropdown" class="dropdown-item dropdown-toggle">Ice Cream</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="category-icecream.html" class="dropdown-item">Ice Cream in Portions</a></li>
                                                <li><a href="category-icecream.html" class="dropdown-item">Family ice cream</a></li>
                                                <li><a href="category-icecream.html" class="dropdown-item">For cafes, restaurants</a></li>
                                                <li><a href="category-icecream.html" class="dropdown-item">Vegan Ice Cream</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#" data-bs-toggle="dropdown" class="dropdown-item dropdown-toggle">Cake</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="category-cake.html" class="dropdown-item">Special Occasion Cakes</a></li>
                                                <li><a href="category-cake.html" class="dropdown-item">Birthday Cakes</a></li>
                                                <li><a href="category-cake.html" class="dropdown-item">Wedding Cakes</a></li>
                                                <li><a href="category-cake.html" class="dropdown-item">Corporate Cakes</a></li>
                                                <li><a href="category-cake.html" class="dropdown-item">Quick Cakes</a></li>
                                                <li><a href="category-cake.html" class="dropdown-item">Photo Cakes</a></li>
                                                <li><a href="category-cake.html" class="dropdown-item">Vegan Cakes</a></li>
                                                <li><a href="category-cake.html" class="dropdown-item">Ice Cakes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>                            
                                <li><a href="about.html" class="nav-item nav-link">About Us</a></li>
                                <li><a href="contact.html" class="nav-item nav-link">Contact</a></li>
                                <li class="nav-item dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="dropdown-item dropdown-toggle nav-item nav-link">My Account</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="my-account.html" class="dropdown-item">My Account</a></li>
                                        <li><a href="cart.html" class="dropdown-item">Cart</a></li>
                                        <li><a href="checkout.html" class="dropdown-item">Checkout</a></li>
                                    </ul>
                                </li>        
                            </ul>
                        </div>      
                    </div>
                </nav>
            </header>
        </div>
        <!--Navbar End-->
        
        
        <div class="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="message">
                            <?php $name = $_POST['name'];
                                $email = $_POST['email'];
                                $message = $_POST['message'];
                                $formcontent="From: $name \n Message: $message";
                                $recipient = "coffeeshop@coffeeshop.lanams.eu";
                                $subject = "Contact Form";
                                $mailheader = "From: $email \r\n";
                                mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
                                echo "<p class='msgp'>Thank you for your contact<br>
                                        Please continue shopping</p>";
                                ?> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Strawberry Vanilla Chocolate Cake</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/cake/strawberry.png" alt="Strawberry Vanilla Chocolate Cake">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Woodland Dream</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/cake/woodland-dream.png" alt="Woodland Dream">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Kapiti Ice Cream Vanilla Bean</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/icecream/vanila.jpg" alt="Kapiti Ice Cream Vanilla Bean">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Much Moore Premium Ice Cream Boysenberry Stracciatella</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/icecream/boysenberry.png" alt="Much Moore Premium Ice Cream Boysenberry Stracciatella">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Tip Top Ice Cream Boysenberry Ripple</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/icecream/tip-top.png" alt="Tip Top Ice Cream Boysenberry Ripple">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Chocolate Truffle Cake - Eggless</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/cake/truffle.png" alt="Chocolate Truffle Cake">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Lite Chocolate Cake - Eggless</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/cake/lite.jpg" alt="Chocolate Truffle Cake">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Blueberry and Lavender ice cream</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/icecream/Ekselence-3.png" alt="Blueberry and lavender ice cream">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="product.html">Choco Hazelnut Cake - Eggless</a>
                                            </div>
                                            <div class="product-image">
                                                <a href="product.html">
                                                    <img src="image/product/cake/hazelnut.jpg" alt="Choco Hazelnut Cake">
                                                </a>
                                                <div class="product-action">
                                                    <a href="cart.html"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span> 25.95</h3>
                                                <a class="btn" href="product.html"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <!-- Pagination Start -->
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Pagination Start -->
                            </div>                                                         
                        </div>    
                    </div>
                </div>    
            </div>
        </div>    


        <!-- Footer Start -->
        <footer>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-container-left">
                                        <h4>Get In Touch</h4>
                                        <div class="contact-info">
                                            <p><i class="fa fa-map-marker"></i>203 Fake St. Mountain View, <br> 11378 New York</p>
                                            <p><i class="fa fa-envelope"></i>sweettemptation@example.com</p>
                                            <p><i class="fa fa-phone"></i>+012-345-6789</p>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a class="btn btn-secondary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-container-left">
                                        <h4>Quick Links</h4>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="terms.html">Terms & Condition</a></li>
                                            <li><a href="shipping-policy.html">Shipping Policy</a></li>
                                            <li><a href="return-policy.html">Return Policy</a></li>
                                        </ul>     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-container-right">
                                <h4>Newsletter</h4>
                                <h6>Subscribe Our Newsletter</h6>
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                        <button class="btn btn-primary btn-signup">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 copyright">
                        <p>Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            <a>Sweet Temptation</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 template-by">				
                        <p>Designed By </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
                
        <script src="jquery/jquery-3.6.0.min.js"></script>
        <script src="js/scroll.js"></script>
        <script src="js/slick.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>