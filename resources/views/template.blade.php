<!DOCTYPE html>
<html>

<head>
    <title>English4All</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>English4All</b></h1>
            <p>Welcome to the page <span class="w3-tag">ISC</span></p>
        </header>

        <div class="w3-row">

            <!-- tabla de contenido -->
            <div class="w3-col l4">

                <!-- nosotros -->
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="img/UPQ-logo.jpg" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>TeamWork</b></h4>
                        <p>Los alumnos de isc desarrollaron una plataforma sencilla para el entendimiento de topicos de asignaturas</p>
                    </div>
                </div>
                <hr>

                <!-- Menu -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Topics</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <a href="fruits">
                            <li class="w3-padding-16">

                                <img src="img/frutasMain.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Fruits</span><br>
                                <span>Vocabulary from fruits</span>
                            </li>
                        </a>
                        <a href="colors">
                            <li class="w3-padding-16">

                                <img src="img/coloresMain.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Colors</span><br>
                                <span>Vocabulary from colors</span>
                            </li>
                        </a>
                        <a href="adjetives">
                            <li class="w3-padding-16">

                                <img src="img/adjetivosMain.jpeg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Adjectives</span><br>
                                <span>vocabulary to describe</span>
                            </li>
                        </a>
                        <a href="animals">
                            <li class="w3-padding-16 w3-hide-medium w3-hide-small">

                                <img src="img/animalesMain.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Animals</span><br>
                                <span>Lorem ipsum dipsum</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <hr>
                <!-- Fin tabla contenido -->
            </div>

            <div class="w3-col l8 s12">
                <!-- Titulo de topico -->
                <div class="w3-card-4 w3-margin w3-white">
                    @yield('titulo')
                </div>
                <hr>
                <!-- vocabulario -->
                <div class="w3-card-4 w3-margin w3-white">
                    @yield('contenido')
                </div>

                <!-- Ejemplos -->
                <div class="w3-card-4 w3-margin w3-white">
                    @yield('ejemplos')
                </div>
                <!-- Video -->
                <div class="w3-card-4 w3-margin w3-white">
                    @yield('videos')
                </div>
                <!-- Juego -->
                <div class="w3-card-4 w3-margin w3-white">
                    @yield('juego')
                </div>
            </div>
            <!-- END GRID -->
        </div><br>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>