<!DOCTYPE HTML>


<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Panel Administrador</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body class="theme-light" data-highlight="highlight-red">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <div class="header header-auto-show header-fixed header-logo-center">
        <a href="index.html" class="header-title">AppKit</a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
    </div>


    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="index.html" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="index-projects.html"><i class="fa fa-image"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>

    <div class="page-title page-title-fixed">
        <h1>Bienvenido</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>

    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-width="280" data-menu-active="nav-welcome" data-menu-load="menu-main.html"></div>
    <div id="menu-share" class="menu menu-box-bottom rounded-m"  data-menu-load="menu-share.html" data-menu-height="370"> </div>
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div>


    <div class="page-content">
        <!-- Servicios de Taxi -->
       
         <div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600">Lista de</p>
                <h1 class="font-24 font-800 mb-0">Servicios de taxi</h1>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
    <?php 
    include "_server.php";
    $conn = mysqli_connect($servername, $user, $pass, $database);

    $query = "SELECT * FROM business where typeOf='Taxi'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){  
        
        echo "<div class='d-flex mb-4'>
        <div class='align-self-center'>
            <img src='".$row['businessLogo']."' class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'>".$row['businessName']."</h2>
            <p class='mb-0 font-11 mt-2 line-height-s'>Direccion: ".$row['businessAddress']."</p>
            <p class='mb-0 font-11 mt-2 line-height-s'>Telefono: ".$row['phone']."</p>

        </div>
        <div class='ms-auto ps-3 align-self-center text-center'>
        <a href='_editBusiness.php?id=".$row['_id']."'><i style='font-size: 35px;' class='uil uil-edit'></i></a>
        <br><a href='_deleteBusiness.php?id=".$row['_id']."'><i class='fa-solid fa-trash' style='color: #d51010;font-size: 35px;'></i></a>
        </div>
    </div>";
    }
  mysqli_close($conn);
      ?>
    </div>
        </div>
         <div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600">Lista de</p>
                <h1 class="font-24 font-800 mb-0">Caripenterias</h1>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
    <?php 
    include "_server.php";
    $conn = mysqli_connect($servername, $user, $pass, $database);

    $query = "SELECT * FROM business where typeOf='Carpinteria'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){  
        
        echo "<div class='d-flex mb-4'>
        <div class='align-self-center'>
            <img src='".$row['businessLogo']."' class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'>".$row['businessName']."</h2>
            <p class='mb-0 font-11 mt-2 line-height-s'>Direccion: ".$row['businessAddress']."</p>
            <p class='mb-0 font-11 mt-2 line-height-s'>Telefono: ".$row['phone']."</p>

        </div>
        <div class='ms-auto ps-3 align-self-center text-center'>
       <a href='_editBusiness.php?id=".$row['_id']."'><i style='font-size: 35px;' class='uil uil-edit'></i></a>
       <br><a href='_deleteBusiness.php?id=".$row['_id']."'><i class='fa-solid fa-trash' style='color: #d51010;font-size: 35px;'></i></a>
        </div>
    </div>";
    }

      ?>

    </div>
    
        </div>
        <!-- Servicios de Lavanderias -->
         <div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600">Lista de</p>
                <h1 class="font-24 font-800 mb-0">Lavanderias</h1>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
    <?php 
    include "_server.php";
    $conn = mysqli_connect($servername, $user, $pass, $database);

    $query = "SELECT * FROM business where typeOf='Lavanderia'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){  
        
        echo "<div class='d-flex mb-4'>
        <div class='align-self-center'>
            <img src='".$row['businessLogo']."' class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'>".$row['businessName']."</h2>
            <p class='mb-0 font-11 mt-2 line-height-s'>Direccion: ".$row['businessAddress']."</p>
            <p class='mb-0 font-11 mt-2 line-height-s'>Telefono: ".$row['phone']."</p>

        </div>
        <div class='ms-auto ps-3 align-self-center text-center'>
       <a href='_editBusiness.php?id=".$row['_id']."'><i style='font-size: 35px;' class='uil uil-edit'></i></a>
       <br><a href='_deleteBusiness.php?id=".$row['_id']."'><i class='fa-solid fa-trash' style='color: #d51010;font-size: 35px;'></i></a>
        </div>
    </div>";
    }
  mysqli_close($conn);

      ?>
    </div>
    <!-- Servicios de Restaurantes -->
        </div>
        <div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600">Lista de</p>
                <h1 class="font-24 font-800 mb-0">Restaurantes</h1>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
    <?php 
    include "_server.php";
    $conn = mysqli_connect($servername, $user, $pass, $database);

    $query = "SELECT * FROM business where typeOf='Restaurantes'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){  
        
        echo "<div class='d-flex mb-4'>
        <div class='align-self-center'>
            <img src='".$row['businessLogo']."' class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'>".$row['businessName']."</h2>
            <p class='mb-0 font-11 mt-2 line-height-s'>Direccion: ".$row['businessAddress']."</p>
            <p class='mb-0 font-11 mt-2 line-height-s'>Telefono: ".$row['phone']."</p>

             </div>
             <div class='ms-auto ps-3 align-self-center text-center'>
            <a href='_editBusiness.php?id=".$row['_id']."'><i style='font-size: 35px;' class='uil uil-edit'></i></a>
            <br><a href='_deleteBusiness.php?id=".$row['_id']."'><i class='fa-solid fa-trash' style='color: #d51010;font-size: 35px;'></i></a>
             </div>
         </div>";
         }
         mysqli_close($conn);

         ?>

            </div>
        </div>
        <!-- Farmacias -->
        <div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600">Lista de</p>
                <h1 class="font-24 font-800 mb-0">Farmacias</h1>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
    <?php 
    include "_server.php";
    $conn = mysqli_connect($servername, $user, $pass, $database);

    $query = "SELECT * FROM business where typeOf='Farmacias'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){  
        
        echo "<div class='d-flex mb-4'>
        <div class='align-self-center'>
            <img src='".$row['businessLogo']."' class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'>".$row['businessName']."</h2>
            <p class='mb-0 font-11 mt-2 line-height-s'>Direccion: ".$row['businessAddress']."</p>
            <p class='mb-0 font-11 mt-2 line-height-s'>Telefono: ".$row['phone']."</p>

        </div>
        <div class='ms-auto ps-3 align-self-center text-center'>
       <a href='_editBusiness.php?id=".$row['_id']."'><i style='font-size: 35px;' class='uil uil-edit'></i></a>
       <br><a href='_deleteBusiness.php?id=".$row['_id']."'><i class='fa-solid fa-trash' style='color: #d51010;font-size: 35px;'></i></a>
        </div>
    </div>";
    }
  mysqli_close($conn);

      ?>
    </div>
        </div>
        <!-- Inmobiliarias -->
        <div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600">Lista de</p>
                <h1 class="font-24 font-800 mb-0">Inmobiliarias</h1>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
    <?php 
    include "_server.php";
    $conn = mysqli_connect($servername, $user, $pass, $database);

    $query = "SELECT * FROM business where typeOf='Inmobiliarias'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){  
        
        echo "<div class='d-flex mb-4'>
        <div class='align-self-center'>
            <img src='".$row['businessLogo']."' class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'>".$row['businessName']."</h2>
            <p class='mb-0 font-11 mt-2 line-height-s'>Direccion: ".$row['businessAddress']."</p>
            <p class='mb-0 font-11 mt-2 line-height-s'>Telefono: ".$row['phone']."</p>

             </div>
             <div class='ms-auto ps-3 align-self-center text-center'>
            <a href='_editBusiness.php?id=".$row['_id']."'><i style='font-size: 35px;' class='uil uil-edit'></i></a>
            <br><a href='_deleteBusiness.php?id=".$row['_id']."'><i class='fa-solid fa-trash' style='color: #d51010;font-size: 35px;'></i></a>
             </div>
         </div>";
         }
         mysqli_close($conn);

         ?>

            </div>
        </div>
        <!--Tiendas de conveniencia-->
        <div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600">Lista de</p>
                <h1 class="font-24 font-800 mb-0">Tiendas de Conveniencia</h1>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
    <?php 
    include "_server.php";
    $conn = mysqli_connect($servername, $user, $pass, $database);

    $query = "SELECT * FROM business where typeOf='Tiendas'";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){  
        
        echo "<div class='d-flex mb-4'>
        <div class='align-self-center'>
            <img src='".$row['businessLogo']."' class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'>".$row['businessName']."</h2>
            <p class='mb-0 font-11 mt-2 line-height-s'>Direccion: ".$row['businessAddress']."</p>
            <p class='mb-0 font-11 mt-2 line-height-s'>Telefono: ".$row['phone']."</p>

        </div>
        <div class='ms-auto ps-3 align-self-center text-center'>
       <a href='_editBusiness.php?id=".$row['_id']."'><i style='font-size: 35px;' class='uil uil-edit'></i></a>
       <br><a href='_deleteBusiness.php?id=".$row['_id']."'><i class='fa-solid fa-trash' style='color: #d51010;font-size: 35px;'></i></a>
        </div>
    </div>";
    }
  mysqli_close($conn);

      ?>
    </div>
        </div>

    </div>
    <!-- Neogcios de lavaderia -->
         

    <!-- End of Page Content-->
    <!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->

    <!-- Menu Share -->
    <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
        <div class="menu-title mt-n1"><h1>Share the Love</h1><p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="content mb-0">
            <div class="divider mb-0"></div>
            <div class="list-group list-custom-small list-icon-0">
                <a href="auto_generated" class="shareToFacebook external-link">
                    <i class="font-18 fab fa-facebook-square color-facebook"></i>
                    <span class="font-13">Facebook</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="auto_generated" class="shareToTwitter external-link">
                    <i class="font-18 fab fa-twitter-square color-twitter"></i>
                    <span class="font-13">Twitter</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="auto_generated" class="shareToLinkedIn external-link">
                    <i class="font-18 fab fa-linkedin color-linkedin"></i>
                    <span class="font-13">LinkedIn</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="auto_generated" class="shareToWhatsApp external-link">
                    <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                    <span class="font-13">WhatsApp</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="auto_generated" class="shareToMail external-link border-0">
                    <i class="font-18 fa fa-envelope-square color-mail"></i>
                    <span class="font-13">Email</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Be sure this is on your main visiting page, for example, the index.html page-->
    <!-- Install Prompt for Android -->
    <div id="menu-install-pwa-android" class="menu menu-box-bottom rounded-m">
        <img class="mx-auto mt-4 rounded-m" src="app/icons/icon-128x128.png" alt="img" width="90">
        <h4 class="text-center mt-4 mb-2">Appkit on your Home Screen</h4>
        <p class="text-center boxed-text-xl">
            Install Appkit on your home screen, and access it just like a regular app. It really is that simple!
        </p>
        <div class="boxed-text-l">
            <a href="#" class="pwa-install mx-auto btn btn-m font-600 bg-highlight">Add to Home Screen</a>
            <a href="#" class="pwa-dismiss close-menu btn-full mt-3 pt-2 text-center text-uppercase font-600 color-red-light font-12 pb-4 mb-3">Maybe later</a>
        </div>
    </div>

    <!-- Install instructions for iOS -->
    <div id="menu-install-pwa-ios" class="menu menu-box-bottom rounded-m">
        <div class="boxed-text-xl top-25">
            <img class="mx-auto mt-4 rounded-m" src="app/icons/icon-128x128.png" alt="img" width="90">
            <h4 class="text-center mt-4 mb-2">Appkit on your Home Screen</h4>
            <p class="text-center ms-3 me-3">
                Install Appkit on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
            </p>
            <a class="pwa-dismiss close-menu btn-full mt-3 text-center text-uppercase font-700 color-red-light opacity-90 font-110 pb-5">Maybe later</a>
        </div>
    </div>

</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
