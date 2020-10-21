<?php
require_once "Controller/ClienteController.php";
require_once "RouterClass.php";
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
/*     define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout'); */

 
 
 $r = new Router();

    
    // "ruta", "VERBO", "Controlador", "metodo"

    // llamamos al home
    $r->addRoute("home", "GET", "ClienteController", "Home");   /* listo */

    // FORM ALTA

    $r->addRoute("altaform", "POST", "ClienteController", "alta"); /* listo */

    // BORRAR
    $r->addRoute("darDeBaja", "GET", "ClienteController", "delete"); /* en la tabla */

    // MODIFICAR CON ID
    $r->addRoute("modificar/:ID", "GET", "ClienteController", "Modificar"); /* en la tabla tmb */
  

    $r->addRoute("form", "GET", "ClienteController", "ShowForm"); // muestra el form

    $r->addRoute("tabla", "GET", "ClienteController", "ShowAll");

    /* $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("verificarUsuario", "POST", "UserController", "VerifyUser");
    $r->addRoute("logout", "GET", "UserController", "LogOut");
  */



    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
    
?>