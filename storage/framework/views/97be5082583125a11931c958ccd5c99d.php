<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Special Task | Badruzzaman Nafiz</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class ="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="/"><img src="assets/images/ITS.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="">Home</a></li>
                         <li><a href="assets/products.html">Products</a></li>
                         <li><a href="">About</a></li>
                         <li><a href="assets/account.html">Account</a></li>
                         <li><a href="products">Sell</a></li>
                    </ul>
                </nav>
                <a href="belum-ada-apa-apa"><img src="assets/images/cart.png" width="30px" height="30px"></a>
                <img src="assets/images/menu.png" class="menu-icon" onClick="menutoggle()" >
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Special Task <br>Badruzzaman Nafiz!</h1>
                    <p>Ini adalah dummy website saya.<br>Menggunakan Laravel 11 dan mengimplementasikan blade!</p>
                <p>!DISCLAIMER! <br>Fitur Account belum bisa, yang bisa baru fitur Sell karena kurang waktu :(</p>
                    <a href="products" class="btn">Sell &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="assets/images/kny.png">
                </div>
            </div>
        </div>
    </div>
        
        <!------------------------------ featured categories------------------------------>
        <div class="categories">
            <div class="small-container">
                <div class="row">
                <div class="col-3">
                    <img src="assets/images/kanrojiC.jpg">
                </div>
                <div class="col-3">
                    <img src="assets/images/sanemiC.jpg">
                </div>
                <div class="col-3">
                    <img src="assets/images/obanaiC.jpg">
                </div>
            </div>
            </div>
        </div>
        
        <!------------------------------ featured Products------------------------------>
        <div class="small-container">
            <h2 class="title" >Featured Products</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/Tanjiro.jpg"></a>
                        <a href="products-details.html"><h4>Kamado Tanjiro's Katana</h4></a>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$50.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/Rengoku.jpg"></a>
                        <h4>Kyojuro Rengoku's Katana</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>$35.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/Shinobu.jpg"></a>
                        <h4>Kocho Shinobu's Katana</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$15.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/Zenitsu.jpg"></a>
                        <h4>Agatsuma Zenitsu's Katana</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$48.00</p>
                    </div>  
                </div>
            
            
             <h2 class="title" >Latest Products</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/TanjiroC.jpg"></a>
                        <h4>Kamado Tanjiro Cosplay</h4>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$50.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/RengokuC.jpg"></a>
                        <h4>Kyojuro Rengoku Cosplay</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>$21.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/ShinobuC.jpg"></a>
                        <h4>Kocho Shinobu Tie</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$09.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/ZenitsuC.jpg"></a>
                        <h4>Zenitsu Cosplay</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$35.00</p>
                    </div>  
                </div>
            <!--new row for the latest product-->
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/Nezuko.jpg"></a>
                        <h4>Kamado Nezuko Cosplay</h4>
                        <div class="rating">
                            <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$40.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/Kanao.jpg"></a>
                        <h4>Tsuyuri Kanao Cosplay</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>$48.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/Muzan.jpg"></a>
                        <h4>Kibutsuji Muzan Cosplay</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$15.00</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.html"><img src="assets/images/Yoriichi.jpg"></a>
                        <h4>Tsugikuni Yoriichi Cosplay</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>$51.00</p>
                    </div>  
                </div>
            </div>
        <!------------------------------Testimonial---------------------------------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="assets/images/gyomei.jpeg">
                        <h3>Himejima Gyomei</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam earum cumque, quia modi asperiores placeat sint ullam optio nisi, ab nulla voluptate magnam explicabo impedit saepe in, deleniti libero consequuntur.</p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="assets/images/Giyuu.jpeg">
                        <h3>Tomioka Giyuu</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="assets/images/Ubuyashiki.jpeg">
                        <h3>Ubuyashiki Kagaya</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <!----------------------------------Brands------------------------------------>
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="assets/images/logo-godrej.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/images/logo-oppo.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/images/logo-coca-cola.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/images/logo-paypal.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="assets/images/logo-philips.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        
        <!----------------------------------footer------------------------------------->
        <div class ="footer">
        <div class="container">
            
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="assets/images/play-store.png" alt="">
                        <img src="assets/images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <!-- <img src="assets/images/ITS.png"> -->
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Coupons</li>
                       <li>Blog Post</li>
                       <li>Return Policy</li>
                       <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>Instagram</li>
                       <li>Youtube</li>
                    </ul>
                </div>
                
            </div>
            
            <hr><!--horizontal line-->
            <p class="copyright">Special Task - Badruzzaman Nafiz</p>
            
        </div>
    </div>
        
        
        <!-----------------------------------js for toggle menu----------------------------------------------->
        <script>
            var menuItems=document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight="0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight="200px";
                }
                else{
                    MenuItems.style.maxHeight="0px";
                }
            }
        </script>
    </body>
</html><?php /**PATH D:\Nafiz\Kuliah\Tugas-Kuliah\Code\Antasena\SpecialTask\resources\views/welcome.blade.php ENDPATH**/ ?>