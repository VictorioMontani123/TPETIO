<?php
class ClienteView
{

    function ShowHome(){
        $html = '<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>
            <link rel="stylesheet" href="./css/bootstrap.min.css">
            <link rel="stylesheet" href="./css/custom.css">
        </head>
        
        <body>
        
            <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm navbarcolor">
                <div class="container ">
                    <a href="#" class="navbar-brand">
                        <!-- Logo Image -->
                        <img src="assets/images/logocb3.png" width="30" alt="" class="d-inline-block align-middle mr-2">
                        <!-- Logo Text -->
        
                        <span class="text-uppercase font-weight-bold">ABM Group</span>
        
                    </a>
        
                    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="home" class="nav-link">HOME<span class="sr-only">(current)</span></a></li>
                            <li class="nav-item"><a href="tabla" class="nav-link">TABLA DE USUARIOS</a></li>
                            <li class="nav-item"><a href="form" class="nav-link">FORMULARIO</a></li>
        
                        </ul>
                    </div>
                </div>
            </nav>
        
        
            <img class="container d-flex justify-content-center mt-4" src="./imagenes/logo.png" alt="">
        
        
        
            <!-- Footer -->
            <footer class="page-footer font-small cyan darken-3 bg-dark mt-4 ">
        
                <!-- Footer Elements -->
                <div class="container">
        
                    <!-- Grid row-->
                    <div class="row">
        
                        <!-- Grid column -->
                        <div class="col-md-12 py-5">
                            <div class="mb-5 flex-center d-flex justify-content-center">
        
                                <!-- Facebook -->
                                <a class="fb-ic text-light">
                                    <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x">Facebook </i>
                                </a>
                                <!-- Twitter -->
                                <a class="tw-ic text-light">
                                    <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x">Twitter </i>
                                </a>
                                <!-- Google +-->
                                <a class="gplus-ic text-light">
                                    <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x">Google </i>
                                </a>
                                <!--Linkedin -->
                                <a class="li-ic text-light">
                                    <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x">Linkedin </i>
                                </a>
                                <!--Instagram-->
                                <a class="ins-ic text-light">
                                    <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x">Instagram </i>
                                </a>
                                <!--Pinterest-->
                                <a class="pin-ic text-light">
                                    <i class="fab fa-pinterest fa-lg white-text fa-2x">Pinterest </i>
                                </a>
                            </div>
                        </div>
                        <!-- Grid column -->
        
                    </div>
                    <!-- Grid row-->
        
                </div>
                <!-- Footer Elements -->
        
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
                    <a class="text-light" href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
        
        
                <!-- Footer -->
            </footer>
        
        
        
        </body>
        
        </html>';
        echo $html;
    
    }

    function ShowAll($allclient){
        $html = '
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Home</title>
                <link rel="stylesheet" href="./css/bootstrap.min.css">
                <link rel="stylesheet" href="./css/custom.css">
            </head>

            <body>

                    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm navbarcolor">
                <div class="container ">
                    <a href="#" class="navbar-brand">
                <!-- Logo Image -->
                <img src="assets/images/logocb3.png" width="30" alt="" class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->

                <span class="text-uppercase font-weight-bold">ABM Group</span>

            </a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="home" class="nav-link">HOME<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a href="tabla" class="nav-link">TABLA DE USUARIOS</a></li>
                    <li class="nav-item"><a href="form" class="nav-link">FORMULARIO</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-5">


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">DNI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Cuit</th>
                </tr>
            </thead>
            <tbody>';

        foreach ($allclient as $client) {

            $html .= ' 
                <tr>
                <th scope="row">'. $client->id .'</th>
                <td>' . $client->nombre . '  </td>
                <td>' . $client->apellido . '  </td>
                <td>' . $client->direccion . '  </td>
                <td>' . $client->email . '  </td>
                <td>' . $client->telefono . '  </td>
                <td>' . $client->cuit . '  </td>
                </tr>';
        }

        $html .= ' 
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3 bg-dark mt-4 ">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 py-5">
                    <div class="mb-5 flex-center d-flex justify-content-center">

                        <!-- Facebook -->
                        <a class="fb-ic text-light">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x">Facebook </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic text-light">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x">Twitter </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic text-light">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x">Google </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic text-light">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x">Linkedin </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic text-light">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x">Instagram </i>
                        </a>
                        <!--Pinterest-->
                        <a class="pin-ic text-light">
                            <i class="fab fa-pinterest fa-lg white-text fa-2x">Pinterest </i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
            <a class="text-light" href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->


        <!-- Footer -->
    </footer>



</body>

</html>';

        echo $html;
    }



    function ShowForm(){
       $html = '<!DOCTYPE html>
       <html lang="en">
       
       <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Formulario</title>
           <link rel="stylesheet" href="./css/bootstrap.min.css">
           <link rel="stylesheet" href="./css/custom.css">
       </head>
       
       <body>
       
           <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm navbarcolor">
               <div class="container ">
                   <a href="#" class="navbar-brand">
                       <!-- Logo Image -->
                       <img src="assets/images/logocb3.png" width="30" alt="" class="d-inline-block align-middle mr-2">
                       <!-- Logo Text -->
       
                       <span class="text-uppercase font-weight-bold">ABM Group</span>
       
                   </a>
       
                   <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
       
                   <div id="navbarSupportedContent" class="collapse navbar-collapse">
                       <ul class="navbar-nav ml-auto">
                           <li class="nav-item"><a href="home" class="nav-link">HOME<span class="sr-only">(current)</span></a></li>
                           <li class="nav-item"><a href="tabla" class="nav-link">TABLA DE USUARIOS</a></li>
                           <li class="nav-item active"><a href="form" class="nav-link">FORMULARIO</a></li>
       
       
                       </ul>
                   </div>
               </div>
           </nav>
       
       
       
           <!--  COMIENZA EL FORMULARIO -->
       
       
           <div class="container w-50 mt-4">
       
       
               <!-- Material form register -->
               <div class="card bg-dark text-light">
       
                   <h5 class="card-header info-color white-text text-center py-4 mb-4 ">
                       <strong>Formulario</strong>
                   </h5>
       
                   <!--Card content-->
                   <div class="card-body px-lg-5 pt-0">
       
                       <!-- Form -->
                       <form action="altaform" method="post" class="text-center text-light" style="color: #757575;">
       
                           <div class="form-row">
                               <div class="col">
                                   <!-- First name -->
                                   <div class="md-form">
                                       <input type="text" id="nombre"  name="nombre" class="form-control ">
                                       <label for="materialRegisterFormFirstName">Nombre</label>
                                   </div>
                               </div>
                               <div class="col">
                                   <!-- Last name -->
                                   <div class="md-form">
                                       <input type="text" id="apellido"  name="apellido" class="form-control">
                                       <label for="materialRegisterFormLastName">Apellido</label>
                                   </div>
                               </div>
                           </div>
       
                           <!-- E-mail -->
                           <div class="md-form mt-0">
                               <input type="text" id="direccion" name="direccion" class="form-control">
                               <label for="materialRegisterFormEmail">Direccion</label>
                           </div>

                           <div class="md-form mt-0">
                               <input type="e-mail" id="direccion" name="email" class="form-control">
                               <label for="materialRegisterFormEmail">E-mail</label>
                           </div>
       
       
                           <div class="md-form">
                               <input type="text" id="telefono"  name="telefono" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                               <label for="materialRegisterFormPassword">Telefono</label>
                               <small id="materialRegisterFormPasswordHelpBlock" class="form-text  text-light  mb-4">
                           (Caracteristica de Pais, Region, Ciudad)
                           </small>
                           </div>
       
                           <div class="md-form">
                               <input type="text" id="telefono" name="cuit" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                               <label for="materialRegisterFormPassword">Cuit</label>
       
                           </div>
                           <div class="md-form">
                           <input type="text" id="telefono" name="id" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                           <label for="materialRegisterFormPassword">DNI</label>
   
                       </div>
       
       
                           <!-- Newsletter -->
                           <div class="form-check">
                               <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                               <label class="form-check-label" for="materialRegisterFormNewsletter">Deseo recibir informacion adicional</label>
                           </div>
       
                           <!-- Sign up button -->
                           <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Enviar</button>
       
       
       
                           <a type="button" class="btn-floating btn-fb btn-sm">
                               <i class="fab fa-facebook-f"></i>
                           </a>
                           <a type="button" class="btn-floating btn-tw btn-sm">
                               <i class="fab fa-twitter"></i>
                           </a>
                           <a type="button" class="btn-floating btn-li btn-sm">
                               <i class="fab fa-linkedin-in"></i>
                           </a>
                           <a type="button" class="btn-floating btn-git btn-sm">
                               <i class="fab fa-github"></i>
                           </a>
       
                           <hr>
       
                           <!-- Terms of service -->
                           <p>Clickeando
                               <em>acepta</em> los terminos y condiciones </p>
       
       
                       </form>
                       <!-- Form -->
       
                   </div>
       
               </div>
               <!-- Material form register -->
       
       
           </div>
       
           <!-- TERMINA EL FORMULARIO -->
       
       
       
           <!-- Footer -->
           <footer class="page-footer font-small cyan darken-3 bg-dark mt-4 ">
       
               <!-- Footer Elements -->
               <div class="container">
       
                   <!-- Grid row-->
                   <div class="row">
       
                       <!-- Grid column -->
                       <div class="col-md-12 py-5">
                           <div class="mb-5 flex-center d-flex justify-content-center">
       
                               <!-- Facebook -->
                               <a class="fb-ic text-light">
                                   <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x">Facebook </i>
                               </a>
                               <!-- Twitter -->
                               <a class="tw-ic text-light">
                                   <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x">Twitter </i>
                               </a>
                               <!-- Google +-->
                               <a class="gplus-ic text-light">
                                   <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x">Google </i>
                               </a>
                               <!--Linkedin -->
                               <a class="li-ic text-light">
                                   <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x">Linkedin </i>
                               </a>
                               <!--Instagram-->
                               <a class="ins-ic text-light">
                                   <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x">Instagram </i>
                               </a>
                               <!--Pinterest-->
                               <a class="pin-ic text-light">
                                   <i class="fab fa-pinterest fa-lg white-text fa-2x">Pinterest </i>
                               </a>
                           </div>
                       </div>
                       <!-- Grid column -->
       
                   </div>
                   <!-- Grid row-->
       
               </div>
               <!-- Footer Elements -->
       
               <!-- Copyright -->
               <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
                   <a class="text-light" href="https://mdbootstrap.com/"> MDBootstrap.com</a>
               </div>
               <!-- Copyright -->
       
       
               <!-- Footer -->
           </footer>
       
       
       
       </body>
       
       </html>';
       echo $html;
    }

    function ShowPredeterminado(){
        header("Location: ".BASE_URL."tabla"); // para que vuelva despues de que ejecute la function
    }

}
