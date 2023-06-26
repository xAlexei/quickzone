<?php

include "_server.php";
$conn = mysqli_connect($servername, $user, $pass, $database);
$query = "SELECT * FROM business";
$res = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($res)){  
        
    echo "";
}
mysqli_close($conn);

?>
 <!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>AppKit Mobile</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="index.html" class="header-title">Quickzone</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html" class="active-nav"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span>Quickzone</span></a>
        <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
    
    <div class="page-title page-title-fixed">
        <h1>Quickzone</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
        
    <div class="page-content">
            
        <div class="content mt-n3 mb-4">
            <div class="search-box search-dark shadow-sm border-0 mt-4 bg-theme rounded-sm bottom-0">
                <i class="fa fa-search ms-1"></i>
                <input type="text" class="border-0" placeholder="¿Buscas algo en especial?" data-search>
            </div>   
            <div class="search-results disabled-search-list">
                <div>
                    <a href="#" data-filter-item data-filter-name="all food burger cheese ham bacon">
                        <div class="d-flex mt-4">
                            <div class="align-self-center">
                                <img src="images/avatars/10l.png" class="rounded-m me-3" width="80">
                            </div>
                            <div class="align-self-center">
                                <h2 class="font-15 line-height-s mt-1 mb-n1">Cheesy Hamburger <br> with Bacon and Ham</h2>
                                <p class="mb-0 font-11 mt-2 line-height-s">
                                    <i class="fa fa-truck color-brown-dark pe-2"></i>Ready in 20 Minutes
                                </p>
                            </div>
                            <div class="ms-auto ps-3 align-self-center text-center">
                                <h2 class="font-18 mb-n2">$14.75</h2>
                                <span class="color-highlight font-9">per serving</span>
                            </div>
                        </div>
                    </a>          
                    <a href="#" data-filter-item data-filter-name="all food fries chicken breast fried">
                        <div class="d-flex mt-4">
                            <div class="align-self-center">
                                <img src="images/food/pizza.png" class="rounded-m me-3" width="80">
                            </div>
                            <div class="align-self-center">
                                <h2 class="font-15 line-height-s mt-1 mb-n1">Chicken Crispy <br> Strips with Fries</h2>
                                <p class="mb-0 font-11 mt-2 line-height-s">
                                    <i class="fa fa-truck color-brown-dark pe-2"></i>Ready in 25 Minutes
                                </p>
                            </div>
                            <div class="ms-auto ps-3 align-self-center text-center">
                                <h2 class="font-18 mb-n2">$23.44</h2>
                                <span class="color-highlight font-9">per serving</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-filter-item data-filter-name="all food pizza special house">
                        <div class="d-flex mt-4">
                            <div class="align-self-center">
                                <img src="images/products/pizza.jpg" class="rounded-m me-3" width="80">
                            </div>
                            <div class="align-self-center">
                                <h2 class="font-15 line-height-s mt-1 mb-n1">House Special <br> Classic Crust Pizza</h2>
                                <p class="mb-0 font-11 mt-2 line-height-s">
                                    <i class="fa fa-truck color-brown-dark pe-2"></i>Ready in 43 Minutes
                                </p>
                            </div>
                            <div class="ms-auto align-self-center text-center">
                                <h2 class="font-18 mb-n2">$17.25</h2>
                                <span class="color-highlight font-9">per serving</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="search-no-results disabled mt-4">
            <div class="card card-style">
                <div class="content">
                    <h1>No Results</h1>
                    <p>
                        Your search brought up no results. Try using a different keyword. Or try typying all 
                        to see all items in the demo. These can be linked to anything you want.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="splide single-slider slider-no-arrows visible-slider slider-no-dots" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card card-style ms-3" style="background-image:url(images/products/cheesburger.jpg);" data-card-height="300">
                            <div class="card-top px-3 py-3">
                                <a href="#" data-menu="menu-heart" class="bg-white rounded-sm icon icon-xs float-end"><i class="fa fa-heart color-red-dark"></i></a>
                                <a href="#" class="bg-white color-black rounded-sm btn btn-xs float-start font-700 font-12">$12.99</a>
                            </div>
                            <div class="card-bottom px-3 py-3">
                                <h1 class="color-white">The Ham and Bacon<br>Double Cheeseburger</h1>
                            </div>
                            <div class="card-overlay bg-gradient opacity-30"></div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card card-style ms-3" style="background-image:url(https://theglutenfreeaustrian.com/wp-content/uploads/2021/08/gluten-free-chunky-chocolate-walnut-cookie-768x1024.jpg);" data-card-height="300">
                            <div class="card-top px-3 py-3">
                                <a href="#" data-menu="menu-heart" class="bg-white rounded-sm icon icon-xs float-end"><i class="fa fa-heart color-red-dark"></i></a>
                                <a href="#" class="bg-white color-black rounded-sm btn btn-xs float-start font-700 font-12">$12.99</a>
                            </div>
                            <div class="card-bottom px-3 py-3">
                                <h1 class="color-white">House Special<br>Crusted Pizza</h1>
                            </div>
                            <div class="card-overlay bg-gradient opacity-30"></div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card card-style ms-3" style="background-image:url(images/products/pizza.jpg);" data-card-height="300">
                            <div class="card-top px-3 py-3">
                                <a href="#" data-menu="menu-heart" class="bg-white rounded-sm icon icon-xs float-end"><i class="fa fa-heart color-red-dark"></i></a>
                                <a href="#" class="bg-white color-black rounded-sm btn btn-xs float-start font-700 font-12">$12.99</a>
                            </div>
                            <div class="card-bottom px-3 py-3">
                                <h1 class="color-white">Chocolate Cookies<br>With Wallnut Topping</h1>
                            </div>
                            <div class="card-overlay bg-gradient opacity-30"></div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content mt-0 mb-0">
            <div class="d-flex">
                <div class="align-self-center">
                    <h1 class="mb-0 font-18">Our Favorites</h1>
                </div>
                <div class="ms-auto align-self-center">
                    <a href="#" class="float-end font-12 font-400">See All</a>
                </div>
            </div>
        </div>
        
        <div class="splide double-slider visible-slider slider-no-arrows slider-no-dots" id="double-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card m-2 card-style">
                            <img src="https://royalpub.co.uk/wp-content/uploads/2021/04/The-Royal-Burger-Crop.jpg" class="img-fluid">
                            <div class="p-2 bg-theme rounded-sm">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-n1 font-14 line-height-xs pb-2">Royal <br>Burger</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <h4 class="font-16">$24</h4>
                                    </div>
                                </div>
                                <p class="font-10 mb-0"><i class="fa fa-star color-yellow-dark pe-2"></i>34 Recommend It</p>
                            </div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card m-2 card-style">
                            <img src="https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/35EDE7B7-C552-4E1E-8C2C-60185F67AB08/Derivates/CEF71B88-4FEB-4561-9951-94C45E8E5ABA.jpg" class="img-fluid">
                            <div class="p-2 bg-theme rounded-sm">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-n1 font-14 line-height-xs pb-2">Pizza <br>Prosciutto</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <h4 class="font-16">$24</h4>
                                    </div>
                                </div>
                                <p class="font-10 mb-0"><i class="fa fa-star color-yellow-dark pe-2"></i>34 Recommend It</p>
                            </div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card m-2 card-style">
                            <img src="https://www.foodandwine.com/thmb/lZqKp2anzFBHkMawgfxKjCnarcU=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/HD-fw200609_trufflecake-1f285ff1b07944d7ae5ceee94211bd9d.jpg" class="img-fluid">
                            <div class="p-2 bg-theme rounded-sm">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-n1 font-14 line-height-xs pb-2">Chocolate <br>Dessert</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <h4 class="font-16">$24</h4>
                                    </div>
                                </div>
                                <p class="font-10 mb-0"><i class="fa fa-star color-yellow-dark pe-2"></i>34 Recommend It</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="content mb-0">
            <div class="d-flex">
                <div class="align-self-center">
                    <h1 class="mb-0 font-18">Popular Choices</h1>
                </div>
                <div class="ms-auto align-self-center">
                    <a href="#" class="float-end font-12 font-400">See All</a>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-6 pe-1">
                    <div class="card card-style mx-0" style="background-image:url(images/products/desserts.png);" data-card-height="350">
                        <div class="card-bottom p-3">
                            <h2 class="color-white">Desserts</h2>
                            <p class="color-white opacity-60 line-height-s">
                                Chocolate or fruit. Whichever you preffer.
                            </p>
                        </div>
                        <div class="card-overlay bg-gradient opacity-30"></div>
                        <div class="card-overlay bg-gradient"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-style mx-0 mb-2" style="background-image:url(https://www.laespanolaaceites.com/wp-content/uploads/2019/06/pizza-con-chorizo-jamon-y-queso-1080x671.jpg);" data-card-height="170">
                        <div class="card-bottom p-3">
                            <h2 class="color-white">Pizza</h2>
                            <p class="color-white opacity-60 line-height-s font-12">
                                Over 50 options await.
                            </p>
                        </div>
                        <div class="card-overlay bg-gradient opacity-30"></div>
                        <div class="card-overlay bg-gradient"></div>
                    </div>
                    <div class="card card-style mx-0 mb-0" style="background-image:url(https://theviewfromgreatisland.com/wp-content/uploads/2020/01/new-york-strip-steak-sliced-500x375.jpg);" data-card-height="170">
                        <div class="card-bottom p-3">
                            <h2 class="color-white">Steaks</h2>
                            <p class="color-white opacity-60 line-height-s font-12">
                                A BBQ never tasted better
                            </p>
                        </div>
                        <div class="card-overlay bg-gradient opacity-30"></div>
                        <div class="card-overlay bg-gradient"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content mt-0 mb-0">
            <div class="d-flex">
                <div class="align-self-center">
                    <h1 class="mb-0 font-18">Fresh Recipes</h1>
                </div>
                <div class="ms-auto align-self-center">
                    <a href="#" class="float-end font-12 font-400">See All</a>
                </div>
            </div>
        </div>
        
        <div class="splide double-slider visible-slider slider-no-arrows slider-no-dots" id="double-slider-2">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card m-2 card-style">
                            <img src="images/food/regular/1.jpg" class="img-fluid">
                            <div class="p-2 bg-theme rounded-sm">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-n1 font-14 line-height-xs pb-2">Royal <br>Burger</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <h4 class="font-16">$24</h4>
                                    </div>
                                </div>
                                <p class="font-10 mb-0"><i class="fa fa-star color-yellow-dark pe-2"></i>34 Recommend It</p>
                            </div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card m-2 card-style">
                            <img src="images/food/regular/2.jpg" class="img-fluid">
                            <div class="p-2 bg-theme rounded-sm">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-n1 font-14 line-height-xs pb-2">Pizza <br>Prosciutto</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <h4 class="font-16">$24</h4>
                                    </div>
                                </div>
                                <p class="font-10 mb-0"><i class="fa fa-star color-yellow-dark pe-2"></i>34 Recommend It</p>
                            </div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card m-2 card-style">
                            <img src="images/food/regular/3.jpg" class="img-fluid">
                            <div class="p-2 bg-theme rounded-sm">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="mb-n1 font-14 line-height-xs pb-2">Chocolate <br>Dessert</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <h4 class="font-16">$24</h4>
                                    </div>
                                </div>
                                <p class="font-10 mb-0"><i class="fa fa-star color-yellow-dark pe-2"></i>34 Recommend It</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="content mb-0">
            <div class="d-flex">
                <div class="align-self-center">
                    <h1 class="mb-0 font-18">Best Rated Dishes</h1>
                </div>
                <div class="ms-auto align-self-center">
                    <a href="#" class="float-end font-12 font-400">See All</a>
                </div>
            </div>
        </div>	

        <div class="splide double-slider visible-slider slider-no-arrows slider-no-dots" id="double-slider-3">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div data-card-height="185" class="card rounded-m m-2 shadow-l" style="background-image:url(images/food/small/3s.jpg)">
                            <div class="card-top mt-2">
                                <p class="color-white"><i class="fa fa-star color-yellow-dark px-2"></i>4.9</p>
                            </div>
                            <div class="card-bottom mb-2">
                                <h5 class="color-white font-15 px-2">Chocolate Cookies</h5>
                                <p class="color-white mb-0 mt-n2 font-11 opacity-30 px-2">Loved by John Doe</p>
                            </div>
                            <div class="card-overlay bg-gradient opacity-30"></div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div data-card-height="185" class="card rounded-m m-2 shadow-l" style="background-image:url(images/food/small/4s.jpg)">
                            <div class="card-top mt-2">
                                <p class="color-white"><i class="fa fa-star color-yellow-dark px-2"></i>4.7</p>
                            </div>
                            <div class="card-bottom mb-2">
                                <h5 class="color-white font-15 px-2">Grilled Steak</h5>
                                <p class="color-white mb-0 mt-n2 font-11 opacity-30 px-2">Loved by John Doe</p>
                            </div>
                            <div class="card-overlay bg-gradien opacity-30t"></div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div data-card-height="185" class="card rounded-m m-2 shadow-l" style="background-image:url(images/food/small/1s.jpg)">
                            <div class="card-top mt-2">
                                <p class="color-white"><i class="fa fa-star color-yellow-dark px-2"></i>5.0</p>
                            </div>
                            <div class="card-bottom mb-2">
                                <h5 class="color-white font-15 px-2">The Royal Burger</h5>
                                <p class="color-white mb-0 mt-n2 font-11 opacity-30 px-2">Loved by John Doe</p>
                            </div>
                            <div class="card-overlay bg-gradient opacity-30"></div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div data-card-height="185" class="card rounded-m m-2 shadow-l" style="background-image:url(images/food/small/4s.jpg)">
                            <div class="card-top mt-2">
                                <p class="color-white"><i class="fa fa-star color-yellow-dark px-2"></i>5.0</p>
                            </div>
                            <div class="card-bottom mb-2">
                                <h5 class="color-white font-15 px-2">House Special Pizza</h5>
                                <p class="color-white mb-0 mt-n2 font-11 opacity-30 px-2">Loved by John Doe</p>
                            </div>
                            <div class="card-overlay bg-gradient opacity-30"></div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="mt-4" data-menu-load="menu-footer.html"></div>
    </div>
    <!-- Page content ends here-->
    
    <!-- Added to Bookmarks Menu-->
    <div id="menu-heart" 
         class="menu menu-box-modal rounded-m" 
         data-menu-hide="1000"
         data-menu-width="250"
         data-menu-height="170">
        
        <h1 class="text-center mt-3 pt-2">
            <i class="fa fa-heart color-red-dark fa-3x scale-icon"></i>
        </h1>
        <h3 class="text-center pt-2">Saved to Favorites</h3>
    </div>

    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280" data-menu-active="nav-pages"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div> 
     
    
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>