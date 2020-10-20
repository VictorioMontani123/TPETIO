<?php
require_once /* agregar los controladores, modelos, vistas */
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
/*     define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout'); */

 
 
 $r = new Router();

    
// "ruta", "VERBO", "Controlador", "metodo"


// llamamos al home
    $r->addRoute("home", "GET", "AbmController", "Home");

// FORM ALTA
    $r->addRoute("formAlta", "POST", "AbmController", "formAlta");

 // ALTA
    $r->addRoute("alta", "GET", "AbmController", "Alta");

 // MODIFICAR CON ID
    $r->addRoute("modificar/:ID", "GET", "AbmController", "Modificar");
  
// BORRAR
    $r->addRoute("eliminar/:ID", "GET", "PropertiesController", "delete");

 



    /* $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("verificarUsuario", "POST", "UserController", "VerifyUser");
    $r->addRoute("logout", "GET", "UserController", "LogOut");
  */



    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
    
?>