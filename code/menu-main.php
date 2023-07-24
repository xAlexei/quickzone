<?php 
session_start();
$username = $_SESSION['username'];
$id = $_SESSION['businessID'];
?>

<div class="card rounded-0 bg-6" data-card-height="150" style="background-image: url('images/products/quickzone.png');">
    <div class="card-top">
        <a href="#" class="close-menu float-end me-2 text-center mt-3 icon-40 notch-clear"><i class="fa fa-times color-white"></i></a>
    </div>
    <div class="card-bottom">
        <h1 class="color-white ps-3 mb-n1 font-28"></h1>
        <p class="mb-2 ps-3 font-12 color-white opacity-50"><?php echo $username;?></p>
    </div>
    <div class="card-overlay bg-gradient"></div>
</div>
<div class="mt-4"></div>
<h6 class="menu-divider">MENU</h6>
<div class="list-group list-custom-small list-menu">
    <a id="nav-welcome" href="_landingPage.php">
        <i class="fa-solid fa-house bg-orange-dark"></i>
        <span>Inicio</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a id="nav-homepages" href="_profile.php">
        <i class="fa-solid fa-briefcase bg-orange-dark" ></i>
        <span>Perfil</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a id="nav-pages" href="index-pages.html">
        <i class="fa fa-file bg-orange-dark"></i>
        <span>Pages</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <?php     
    if(!isset($_SESSION['username'])){    
    ?>
      <a id="nav-contact" href="_businessLogin.html">
        <i class="fa-solid fa-user bg-orange-dark" ></i>
        <span>Iniciar Sesion</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <?php }else{?>
        <a id="nav-components" href="_addproductsStaff.php">
        <i class="fa-solid fa-square-plus bg-orange-dark" ></i>
        <span>Añadir Productos</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a id="nav-contact" href="_logout.php">
        <i class="fa-solid fa-user bg-orange-dark" ></i>
        <span>Cerrar Sesion</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <?php }?>
</div>
<h6 class="menu-divider mt-4">Settings</h6>
<div class="list-group list-custom-small list-menu">
    <a href="#" data-menu="menu-colors">
        <i class="fa fa-brush gradient-highlight color-white"></i>
        <span>Highlights</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="#" data-toggle-theme="" data-trigger-switch="switch-dark-mode">
        <i class="fa fa-moon gradient-dark color-white"></i>
        <span>Dark Mode</span>
        <div class="custom-control small-switch ios-switch">
            <input data-toggle-theme type="checkbox" class="ios-input" id="toggle-dark-menu">
            <label class="custom-control-label" for="toggle-dark-menu"></label>
        </div>
    </a>
</div>
<h6 class="menu-divider mt-4">Contacts</h6>

