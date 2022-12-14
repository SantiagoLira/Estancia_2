<!DOCTYPE html>
<html>

<head>
    <title>Estancia_2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>English4All</b></h1>
            <p>Welcome to the page <span class="w3-tag">ISC</span></p>
        </header>

        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->
            <div class="w3-col l8 s12">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Colouring_pencils.jpg" alt="Nature" style="width:100%">
                    <div class="w3-container">
                        <h3 class="text-center"><b>Colors</b></h3>
                    </div>

                </div>
                <hr>
                <!-- Tabla de frutas -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h3><b>Colors</b></h3>
                        <h5>Some Colors</h5>
                    </div>

                    <div class="w3-container">
                        <img src="https://www.mosalingua.com/es/files/2019/05/colores-en-ingles.jpg" alt="Norway" style="width:100%">
                    </div>
                </div>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <div class="w3-container">
                        <h3><b>Examples</b></h3>
                    </div>
                    <div class="row">
                        <div class="card border-warning mb-3" style="width: 18rem;">
                            <img src="bob/Diapositiva2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">bob's house is a pinneaple</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <div class="card border-warning mb-3" style="width: 18rem;">
                            <img src="bob/Diapositiva3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">The sandy's favorite fruit is Orange</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <div class="card border-warning mb-3" style="width: 18rem;">
                            <img src="bob/Diapositiva4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Plankton eats Cucumbers</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <script type="text/javascript">
                        function myFunction() {
                            var x = document.getElementById("game");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }
                    </script>
                    <div class="w3-container text-center">
                        <h3><b>Game</b></h3>
                        <button class="btn btn-success" onclick="myFunction()">Start</button>
                    </div>
                    <div class="text-center" id="game" style="display: none;">

                        <iframe src="https://scratch.mit.edu/projects/767232971/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- END BLOG ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">

                <!-- About Card -->
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="https://visionindustrial.com.mx/wp-content/uploads/2016/08/UPQ-logo.jpg" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>TeamWork</b></h4>
                        <p>Los alumnos de isc desarrollaron una plataforma sencilla para el entendimiento de topicos de asignaturas</p>
                    </div>
                </div>
                <hr>

                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Topics</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <a href="fruits">
                            <li class="w3-padding-16">

                                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/assortment-of-colorful-ripe-tropical-fruits-top-royalty-free-image-995518546-1564092355.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Fruits</span><br>
                                <span>Vocabulary from fruits</span>
                            </li>
                        </a>
                        <a href="colors">
                            <li class="w3-padding-16">

                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Colouring_pencils.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Colors</span><br>
                                <span>Vocabulary from colors</span>
                            </li>
                        </a>
                        <a href="adjetives">
                            <li class="w3-padding-16">

                                <img src="https://www.thesaurus.com/e/wp-content/uploads/2021/08/20210716_adjectives_1000x700-790x310.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Adjetives</span><br>
                                <span>vocabulary to describe</span>
                            </li>
                        </a>
                        <a href="animals">
                            <li class="w3-padding-16 w3-hide-medium w3-hide-small">

                                <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Animals</span><br>
                                <span>Lorem ipsum dipsum</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <hr>


                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>

        <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>