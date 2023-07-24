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
        <a href="index.html" class="header-title">Product List</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main-admin" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html" class="active-nav"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main-admin"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
    
    <div class="page-title page-title-fixed">
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme me-0 ms-3" data-back-button><i class="fa fa-arrow-left"></i></a>
        <h1>Menu</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main-admin"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
        
    <div class="page-content">

        
        <div class="card card-style">
            <div class="content mb-0 mt-3" id="tab-group-1">
                <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-orange-dark">
                    <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1ab">Restaurantes</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2ab">Tiendas</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3ab">Farmacias</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-4ab">Servicios</a>
                </div>

                <div class="clearfix mb-4"></div>
                <!-- RESTAURANTES -->
                <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1ab">
                    <?php 
                    
                    require_once "_server.php";
                    $conn;
                    $query = "SELECT * FROM business WHERE typeOf = 'Restaurantes'";
                    $res = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($res)):
                    ?>
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="<?php echo $row['businessLogo']?>" class="rounded-sm me-3" width="40">
                        </div>
                        <div class="align-self-center">
                            <p class="color-highlight font-11 mb-n2"><?php echo $row['businessName']?></p>
                            <h2 class="font-15 line-height-s mt-1 mb-1"><?php echo $row['businessName']?></h2>
                        </div>
                        <div class="ms-auto ps-3 align-self-center text-center">
                            <a href="_editBusiness.php?id=<?php echo $row['_id']?>" class="btn btn-m rounded bg-orange-dark font-900 btn-full">Editar</a>
                        </div>
                    </div>
                    <?php endwhile; ?>                                        
                    
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2ab">
                   <!-- Tiendas de conveniencia -->
                   <?php 
                    
                    require_once "_server.php";
                    $conn;
                    $query = "SELECT * FROM business WHERE typeOf = 'Tiendas'";
                    $res = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($res)):
                    ?>
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="<?php echo $row['businessLogo']?>" class="rounded-sm me-3" width="40">
                        </div>
                        <div class="align-self-center">
                            <p class="color-highlight font-11 mb-n2"><?php echo $row['businessName']?></p>
                            <h2 class="font-15 line-height-s mt-1 mb-1"><?php echo $row['businessName']?></h2>
                        </div>
                        <div class="ms-auto ps-3 align-self-center text-center">
                            <a href="" class="btn btn-m rounded bg-orange-dark font-900 btn-full">Editar</a>
                        </div>
                    </div>
                    <?php endwhile; ?> 
                   
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3ab">
                    <!-- Farmacias -->
                    <?php 
                    
                    require_once "_server.php";
                    $conn;
                    $query = "SELECT * FROM business WHERE typeOf = 'Farmacias'";
                    $res = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($res)):
                    ?>
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="<?php echo $row['businessLogo']?>" class="rounded-sm me-3" width="40">
                        </div>
                        <div class="align-self-center">
                            <p class="color-highlight font-11 mb-n2"><?php echo $row['businessName']?></p>
                            <h2 class="font-15 line-height-s mt-1 mb-1"><?php echo $row['businessName']?></h2>
                        </div>
                        <div class="ms-auto ps-3 align-self-center text-center">
                            <a href="" class="btn btn-m rounded bg-orange-dark font-900 btn-full">Editar</a>
                        </div>
                    </div>
                    <?php endwhile; ?> 
                </div>
                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-4ab">
                    <!-- Lavanderias -->
                    <?php 
                    
                    require_once "_server.php";
                    $conn;
                    $query = "SELECT * FROM business WHERE typeOf = 'Carpinterias' OR typeOf = 'Inmobiliarias'";
                    $res = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($res)):
                    ?>
                    <div class="d-flex mb-4">
                        <div class="align-self-center">
                            <img src="<?php echo $row['businessLogo']?>" class="rounded-sm me-3" width="40">
                        </div>
                        <div class="align-self-center">
                            <p class="color-highlight font-11 mb-n2"><?php echo $row['businessName']?></p>
                            <h2 class="font-15 line-height-s mt-1 mb-1"><?php echo $row['businessName']?></h2>
                        </div>
                        <div class="ms-auto ps-3 align-self-center text-center">
                            <a href="" class="btn btn-m rounded bg-orange-dark font-900 btn-full">Editar</a>
                        </div>
                    </div>
                    <?php endwhile; ?> 
                </div>
            </div>
        </div>
 
            
        <div data-menu-load="menu-footer.html"></div>
    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main-admin" class="menu menu-box-left rounded-0" data-menu-load="menu-main-admin.php" data-menu-width="280" data-menu-active="nav-components"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div> 
     
    
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
