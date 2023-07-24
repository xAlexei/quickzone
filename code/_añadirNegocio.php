
<?php 

session_start();
require_once "_server.php";
$conn;

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
        <a href="#" data-menu="menu-main-admin" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html" class="active-nav"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main-admin"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
    
    <div class="page-title page-title-fixed">
        <h1> Nuevo negocio </h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main-admin"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
        
    <div class="page-content">
                
    

        <div class="card card-style">
            <div class="content mb-0">        
                <h3 class="text-center">Por favor, completa los campos</h3>
                <form action="_register.php" method="post">           
               <!-- Nombre del negocio -->
               <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="name" id="name" placeholder= "Nombre del Negocio" required>
                    <label for="form1" class="color-highlight">Nombre del Negocio</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!-- Email  -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="email" class="form-control validate-text" name="email" id="email" placeholder="Correo Electronico" required>
                    <label for="form2" class="color-highlight">Correo Electronico</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!-- Link de imagen  -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="logo" id="logo" placeholder="Link de imagen" required>
                    <label for="form2" class="color-highlight">Business Logo</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!--  Direccion -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="address" id="address" placeholder="Direccion" required>
                    <label for="form3" class="color-highlight">Direccion</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!-- Telefono y Whatsapp  -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                   <div class="input-group">
                       <input type="tel" class="form-control validate-text" name="phone" id="phone" placeholder="Telefono" required>
                       <input type="tel" class="form-control validate-text" name="whats" id="whats" placeholder="WhatsApp" required>
                       <em>(required)</em>
                   </div>
                </div>
                <!-- Categoria -->
                <div class="col-12">
                    <div class="input-style input-style-always-active has-borders no-icon mb-4">
                        <label for="form51" class="color-highlight"></label>
                        <select id="line" name="line" required>
                            <option value="default">Selecciona una opcion</option>
                            <option value="Carpinteria">Carpinteria</option>
                            <option value="Lavanderia">Lavanderia</option>
                            <option value="Taxi">Servicios de taxi</option>
                            <option value="Restaurantes">Restaurantes</option>
                            <option value="Farmacias">Farmacias</option>
                            <option value="Tiendas">Tiendas de conveniencia</option>
                            <option value="Inmobiliarias">Inmobiliarias</option>
                        
                        </select>
                        <span><i class="fa fa-chevron-down"></i></span>
                    </div>
                </div>
                <!-- Ubicacion  -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                   <div class="input-group">
                       <input type="text" class="form-control validate-text" name="googleLink" placeholder="Google Link" required>
                       <em>(required)</em>
                   </div>
                </div>
                <button class="btn btn-m rounded bg-orange-dark" style="width: 100%;">
                    AÑADIR
                </button>
            </form>
            <br></div>
        </div>
        
        <div class="card card-style">
            <div class="content mb-0">
                <p class="mb-n1 color-orange-dark font-600">Lista de Productos</p>
                <h1 class="font-24 font-800 mb-0">Carga tu producto
                </h1>
                <p>
                    
                </p>
                <?php 
                $query = "SELECT * FROM products LIMIT 5";
                $res = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($res)):
                ?>
                <div class="d-flex mb-4">
                    <div class="align-self-center">
                        <img src="<?php echo $row['linkImage']?>" class="rounded-sm me-3" width="100">
                    </div>
                    <div class="align-self-center">
                        <p class="color-orange-dark font-11 mb-n2"><?php echo $row['productName']?></p>
                        <h2 class="font-15 line-height-s mt-1 mb-1"><?php echo $row['productName']?></h2>
                        <p> <?php echo $row['descript']?></p>
                    </div>
                    <div class="ms-auto ps-3 align-self-center text-center">
                        <p class="color-orange-dark font-10 mb-n2">Precio</p>
                        <h2 class="font-15 mb-0">$<?php echo $row['price']?>.00</h2>
                    </div>
                </div>
                <?php endwhile; $conn->close();?>
            </div>
        </div>
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
