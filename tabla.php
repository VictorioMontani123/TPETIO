<?php 

$html= '
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
                    <li class="nav-item "><a href="home.html" class="nav-link">HOME<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a href="tabla.html" class="nav-link">TABLA DE USUARIOS</a></li>
                    <li class="nav-item"><a href="form.html" class="nav-link">FORMULARIO</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-5">


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Cuit</th>
                </tr>
            </thead>
            <tbody>'; 

            foreach ( $allclient as $client ){

            $html.= ' 
                <tr>
                <th scope="row">1</th>
                <td>' . $client->nombre.'  </td>
                <td>' . $client->apellido.'  </td>
                <td>' . $client->direccion.'  </td>
                <td>' . $client->email.'  </td>
                <td>' . $client->telefono.'  </td>
                <td>' . $client->cuit.'  </td>
                </tr>';
            } 
             
            $html.= ' 
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

