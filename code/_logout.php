<?php

session_start();

// Destruye la sesión
session_unset();
session_destroy();



// Redirecciona a la página de inicio de sesión o a otra página que desees
header("Location: _businessLogin.html");

?>
