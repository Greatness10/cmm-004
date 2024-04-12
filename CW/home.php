<?php
include 'conn.php';
session_start();

?> 
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Mane Event</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/min.css"> 
    <link rel="stylesheet" href="css/mane.css">
    <link rel="stylesheet" href="css/the-mane.css">

</head>
<body>    
    <div id="Home" class="parallax-window" data-parallax="scroll" data-image-src="Images/p2.jpg">
        <nav id="tm-nav" class="fixed w-full">
            <div class="tm-container mx-auto px-2 md:py-6 text-right">
                <button class="md:hidden py-2 px-2" id="services-toggle"><i class="fas fa-2x fa-bars tm-text-gold"></i></button>
                <ul class="mb-3 md:mb-0 text-2xl font-normal flex justify-end flex-col md:flex-row">
                    <li class="inline-block mb-4 mx-4"><a href="#Home" class="tm-text-gold py-1 md:py-3 px-4">Home</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#services" class="tm-text-gold py-1 md:py-3 px-4">Services</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#contact" class="tm-text-gold py-1 md:py-3 px-4">Contact</a></li>
                    <?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                        echo '<li class="inline-block mb-4 mx-4"><a href="" class="tm-text-gold py-1 md:py-3 px-4">welcome '.$_SESSION['name'].'</a></li>';
                    } 
                    ?> 
                    <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!='true'){
                        echo '<li class="inline-block mb-4 mx-4"><a class="navlink tm-text-gold py-1 md:py-3 px-4" href="login.php">Sign Up</a></li>';
                    } 
                    ?>     
                    <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!='true'){
                        echo '<li class="inline-block mb-4 mx-4"><a href="login.php" class="tm-text-gold py-1 md:py-3 px-4">Login</a></li>';
                    }
                    ?>
                    <?php if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']=='true'){
                        echo '<li class="inline-block mb-4 mx-4"><a href="logout.php" class="tm-text-gold py-1 md:py-3 px-4">Log Out</a></li>';
                    } 
                    ?>
                    <li class="inline-block mb-4 mx-4 book"><a href="#book-now" class="tm-text-gold py-1 md:py-3 px-4">Book now</a></li>

                </ul>
            </div>            
        </nav>
        <div class="container mx-auto px-2 tm-intro-width">
            <div class="sm:pb-60 sm:pt-48 py-20">
                <div class="bg-black bg-opacity-70 p-12 mb-5 text-center">
                    <h1 class="text-white text-5xl tm-logo-font mb-5">The Mane Event</h1>
                    <p class="tm-text-gold tm-text-2xl">we are part of your symphony</p>
                </div>    
                <div class="bg-black bg-opacity-70 p-10 mb-5">
                    <p class="text-white leading-8 text-sm font-light">
                    A user-friendly web application facilitating hair salon appointments, service exploration, and efficient management, enhancing both customer experience and salon operations seamlessly.
                        If you have any question, please <a rel="nofollow" href="mailto:oyinkansolagreatness@gmail.com"> send us a message</a>. </p>
                </div>
                <div class="text-center">
                    <div class="inline-block">
                        <a href="#services" class="flex justify-center items-center bg-black bg-opacity-70 py-6 px-8 rounded-lg font-semibold tm-text-2xl tm-text-gold hover:text-gray-200 transition">
                            <i class="fas fa-cut mr-3"></i>
                            <span>Let's cut...</span>                        
                        </a>
                    </div>                    
                </div>                
            </div>
        </div>        
    </div>
    
    <div id="services" class="parallax-window" data-parallax="scroll" data-image-src="Images\p1.jpg">
        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="text-center mb-16">
                <h2 class="bg-white tm-text-brown py-6 px-12 text-4xl font-medium inline-block rounded-md">Our Styling list</h2>
            </div>            
            <div class="flex flex-col lg:flex-row justify-around items-center">
                <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="Images\faded.jpg" alt="Image" class="cut_thumbnail">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Faded</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">Children £5.50</div>
                            <div class="text-white text-md sm:text-lg font-light">Adult £10.50</div>
                        </div>                    
                    </div>
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="Images\buzz.jpeg" alt="Image" class="cut_thumbnail">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Buzz cut</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">Children £5.50</div>
                            <div class="text-white text-md sm:text-lg font-light">Adult £10.50</div>
                        </div>                    
                    </div>
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="Images\blow.webp" alt="Image" class="cut_thumbnail">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Blowout</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">Children £5.50</div>
                            <div class="text-white text-md sm:text-lg font-light">Adult £10.50</div>
                        </div>                    
                    </div>
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="Images\bald.jpeg" alt="Image" class="cut_thumbnail">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Bald</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">Children £5.50</div>
                            <div class="text-white text-md sm:text-lg font-light">Adult £10.50</div>
                        </div>                    
                    </div>
                </div>
                <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
                    <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                        <div class="text-right mr-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Wolfcut</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">Children £5.50</div>
                            <div class="text-white text-md sm:text-lg font-light">Adult £10.50</div>
                        </div>
                        <img src="Images\wolf.webp" alt="Image" class="cut_thumbnail">                   
                    </div>
                    <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                        <div class="text-right mr-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Pixiecut</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">Children £5.50</div>
                            <div class="text-white text-md sm:text-lg font-light">Adult £10.50</div>
                        </div>
                        <img src="Images\pixie.jpg" alt="Image" class="cut_thumbnail">                    
                    </div>
                    <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                        <div class="text-right mr-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Dutch braid</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">Children £5.50</div>
                            <div class="text-white text-md sm:text-lg font-light">Adult £10.50</div>
                        </div>   
                        <img src="Images\db.jpg" alt="Image" class="cut_thumbnail">                 
                    </div> <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                        <div class="text-right mr-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Curtain Bangs</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">Children £5.50</div>
                            <div class="text-white text-md sm:text-lg font-light">Adult £10.50</div>
                        </div>   
                        <img src="Images\cb.webp" alt="Image" class="cut_thumbnail">                   
                    </div>
                </div>
            </div>
        </div>        
    </div>
    
 <div id="book-now" class="parallax-window" data-parallax="scroll" data-image-src="Images\p1.jpg">

        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="tm-item-container sm:ml-auto sm:mr-12 mx-auto sm:px-0 px-4">
                <div class="bg-white bg-opacity-80 p-12 pb-14 rounded-xl mb-5">
                    <h2 class="mb-6 tm-text-green text-4xl font-medium">Book Now</h2>
                    <p class="mb-6 text-base leading-8">
                    Easily schedule appointments via our intuitive hair salon web app. Browse services, select preferred stylists, choose convenient time slots, and receive instant confirmations, streamlining the booking process for seamless convenience.
                    </p>
                    <p class="text-base leading-8">
                        Please use the form below to make your reservation or contact us directly for any inquiries or special requests.
                    </p>
                </div>
                <a href="reserve.php" class="inline-block tm-bg-green transition text-white text-xl pt-3 pb-4 px-8 rounded-md">
                    <i class="far fa-calendar-alt mr-4"></i>
                    Reserve Now
                </a>
            </div>           
        </div>        
    </div>
    
    <div id="contact" class="parallax-window" data-parallax="scroll" data-image-src="Images\p1.jpg">
        <div class="container mx-auto tm-container pt-24 pb-48 sm:py-48">
            <div class="flex flex-col lg:flex-row justify-around items-center lg:items-stretch">
                <div class="flex-1 rounded-xl px-10 py-12 m-5 bg-white bg-opacity-80 tm-item-container">
                    <h2 class="text-3xl mb-6 tm-text-green">Contact Us</h2>
                    <p class="mb-6 text-lg leading-8">
                    Connect effortlessly with our hair salon through our "Contact Us" feature on the web app. Reach out for inquiries, feedback, or assistance, ensuring prompt and personalized communication for an exceptional experience. 
                    </p>
                    <p class="mb-10 text-lg">
                        <span class="block mb-2">Tel: <a href="tel:+44 (0) 7909430418" class="hover:text-yellow-600 transition">+44 (0) 7909430418</a></span>
                        <span class="block">Email: <a href="mailto:oyinkansolagreatness@gmail.com">oyinkansolagreatness@gmail.com</a></span>                        
                    </p>
                    <div class="text-center">
                        <a href="https://www.bing.com/maps?osid=83e4289d-8880-4adc-b651-0b4f2be184ba&cp=57.118408~-2.14596&lvl=16&pi=0&imgid=e7cd4a01-89d9-4bff-866a-01e2d7008da8&v=2&sV=2&form=S00027" class="inline-block text-white text-2xl pl-10 pr-12 py-6 rounded-lg transition tm-bg-green">
                            <i class="fas fa-map-marked-alt mr-8"></i>
                            Open Maps
                        </a>
                    </div>                    
                </div>
                <div class="flex-1 rounded-xl p-12 pb-14 m-5 bg-black bg-opacity-50 tm-item-container">
                    <form action="" method="POST" class="text-lg">
                        <input type="text" name="name" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Name" required="" />
                        <input type="email" name="email" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Email" required="" />
                        <textarea rows="6" name="message" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Message..." required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="text-white hover:text-yellow-500 transition">Send it</button>
                        </div>                        
                      </form>
                </div>
            </div>
            <div id="contact" class="parallax-window relative" data-parallax="scroll" data-image-src="Images\p1.jpg">
    <div class="container mx-auto tm-container pt-24 pb-48 sm:py-48">
        <div class="flex flex-col lg:flex-row justify-around items-center lg:items-stretch">
            <div class="flex-1 rounded-xl px-10 py-12 m-5 bg-white bg-opacity-80 tm-item-container">
                <h2 class="text-3xl mb-6 tm-text-green">Get in Touch</h2>
                
                <form action="/subscribe" method="post" class="mb-6">
                    <label for="email" class="block mb-2">Subscribe to our Newsletter:</label>
                    <input type="email" id="email" name="email" required class="border border-gray-300 rounded px-4 py-2 w-full" placeholder="Your email address">
                    <button type="submit" class="mt-2 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Subscribe</button>
                </form>
                
                <div class="mb-6">
                    <h3 class="text-xl mb-2">Location:</h3>
                    <p>AB10 7AQ Garthdee House, Aberdeen, Scotland, United Kingdom</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-xl mb-2">Follow Us:</h3>
                    <ul class="flex">
                        <li class="mr-4"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li class="mr-4"><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- Phone Number -->
                <div>
                    <h3 class="text-xl mb-2">Phone:</h3>
                    <p>+44 (0) 7909430418</p>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- <div id="contact" class="parallax-window relative" data-parallax="scroll" data-image-src="img/antique-cafe-bg-04.jpg">
                <div class="container mx-auto tm-container pt-24 pb-48 sm:py-48">
                    <div class="flex flex-col lg:flex-row justify-around items-center lg:items-stretch">
                        <div class="flex-1 rounded-xl px-10 py-12 m-5 bg-white bg-opacity-80 tm-item-container">
                            <h2 class="text-3xl mb-6 tm-text-green">Login</h2>
                            <form action="/login" method="post">
                                <div class="mb-6">
                                    <label for="username" class="block mb-2">Username:</label>
                                    <input type="text" id="username" name="username" required class="border border-gray-300 rounded px-4 py-2 w-full">
                                </div>
                                <div class="mb-6">
                                    <label for="password" class="block mb-2">Password:</label>
                                    <input type="password" id="password" name="password" required class="border border-gray-300 rounded px-4 py-2 w-full">
                                </div>
                                <div class="mb-10">
                                    <input type="submit" value="Login" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                                </div>
                            </form>
                            <a href="#register" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded cursor-pointer">Register</a>
                        </div> 
                    </div>
                </div>
            </div> -->
            
            <!-- <div id="register" class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
                <div class="bg-white rounded-lg p-10">
                    <h2 class="text-3xl mb-6 tm-text-green">Register</h2>
                    <form action="/register" method="post">
                        <div class="mb-6">
                            <label for="username" class="block mb-2">Username:</label>
                            <input type="text" id="username" name="username" required class="border border-gray-300 rounded px-4 py-2 w-full">
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block mb-2">Password:</label>
                            <input type="password" id="password" name="password" required class="border border-gray-300 rounded px-4 py-2 w-full">
                        </div>
                        <div class="mb-6">
                            <label for="confirm-password" class="block mb-2">Confirm Password:</label>
                            <input type="password" id="confirm-password" name="confirm-password" required class="border border-gray-300 rounded px-4 py-2 w-full">
                        </div>
                        <div class="mb-10">
                            <input type="submit" value="Register" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                        </div>
                    </form>
                    <a href="#" id="close-register-modal" class="text-red-500">Close</a>
                </div>
            </div>
        </div>        
    </div> -->    
    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container mx-auto text-center">
            <div class="text-sm">
                <p class="mb-0">
                    &copy; 2023 The Mane Event. Designed by Group G
                </p>
            </div>
        </div>        
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js"></script>
    <script>
        
        $(document).ready(function() {
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
</body>
</html>
