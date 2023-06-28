<?php

include "_server.php";
$conn = mysqli_connect($servername, $user, $pass, $database);

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

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
        <a href="index.html" class="header-title">Inputs</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html" class="active-nav"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
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
        <div class="card card-style">
            <div class="content mb-0">        
                <br><h3>Por favor, llena los campos</h3>
                <form action="_edit.php?id=<?php echo $id;?>" method="POST">
                <div class="input-style has-borders has-icon validate-field mb-4">
                    <i class="fa fa-user"></i>
                    <input type="name" class="form-control validate-name" name="name" placeholder="Nombre del Negocio">
                    <label for="form1" class="color-highlight">Name</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="email" class="form-control validate-text" name="email" placeholder="Email">
                    <label for="form2" class="color-highlight">Email</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="url" class="form-control validate-text" name="logo" placeholder="Link del Logo">
                    <label for="form3" class="color-highlight">Link del Logo</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="address" placeholder="Direccion">
                    <label for="form44" class="color-highlight">Direccion</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style has-borders no-icon validate-field mb-4">
                <div class="input-group">
                       <input type="text" class="form-control validate-text" name="phone" placeholder="Telefono">
                       <input type="text" class="form-control validate-text" name="whats" placeholder="WhatsApp">
                       <em>(required)</em>
                   </div>
                </div>

                <div class="input-style has-borders no-icon mb-4">
                    <label for="form5" class="color-highlight">Select A Value</label>
                    <select name="line">
                        <option value="default" disabled selected>Select a Value</option>
                        <option value="Restaurantes">Restaurantes</option>
                        <option value="Farmacias">Farmacias</option>
                        <option value="Carpinteria">Carpinterias</option>
                        <option value="Lavanderia">Lavanderias</option>
                        <option value="Taxi">Servicio de Taxi</option>
                        <option value="Tiendas">Tiendas de conveniencia</option>
                        <option value="Inmobiliarias">Inmobiliarias</option>
                    </select>
                    <span><i class="fa fa-chevron-down"></i></span>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <i class="fa fa-check disabled invalid color-red-dark"></i>
                    <em></em>
                </div>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="url" class="form-control validate-text" name="googleLink" placeholder="Ubicacion">
                    <label for="form44" class="color-highlight">Ubicacion</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <input style="width: 100%;" type="submit" value="Editar" placeholder="Guardar" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-orange-light">
                <form>
            </div>
        </div>
        <div class="card card-full-left card-style">
            <div class="content">
            <a href="_addProduct.php?id=<?php echo $id ?>" name="id">
                <h1 class="font-24 font-800 mb-0">Añadir mas Productos
                <i class="fa-solid fa-square-plus" style="padding-left: 90px;color: #e7820d;"></i>
                </h1></a>
            <?php 
                $query = "SELECT * FROM products WHERE businessNameID = $id";
                $res = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($res)): ?>

                <br><div class="d-flex">
                    <div class="me-3">
                        <img width="120" class="fluid-img rounded-m shadow-xl" src="<?php echo $row['linkImage'];?>">
                    </div>
                    <div>
                        <p class="color-highlight font-20 mb-n1"><?php echo $row['productName'];?></p>
                        <p class='mb-0 font-15 mt-2 line-height-s'>Precio:<?php echo $row['price']; ?> MXN.</p>
                        <p class='mb-0 font-15 mt-2 line-height-s'>Descripcion: <?php echo $row['descript']; ?></p>
                        <br><a href="_editBusiness.php?id=<?php echo $id;?>" class="btn btn-sm rounded-s font-13 font-600 bg-orange-light">Editar</a>
                    </div>
                </div>
                <div class="divider mt-4"></div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
    <!-- Page content ends here-->
    
    
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280" data-menu-active="nav-components"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div> 
     
    
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
