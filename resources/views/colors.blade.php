@extends('template')

@section('titulo')
<script type="text/javascript">
    function cerrarJuego() {
        location.reload();
    }

    function play_audio(task) {

        const expr = task;
        switch (expr) {
            case '1':
                var audio = new Audio('colores/Yellow.mp3');
                break;
            case '2':
                var audio = new Audio('colores/Blue.mp3');
                break;
            case '3':
                var audio = new Audio('colores/White.mp3');
                break;
            case '4':
                var audio = new Audio('colores/Brown.mp3');
                break;
            case '5':
                var audio = new Audio('colores/Gray.mp3');
                break;
            case '6':
                var audio = new Audio('colores/Orange.mp3');
                break;
            case '7':
                var audio = new Audio('colores/Black.mp3');
                break;
            case '8':
                var audio = new Audio('colores/Red.mp3');
                break;
            case '9':
                var audio = new Audio('colores/Pink.mp3');
                break;
            case '10':
                var audio = new Audio('colores/Green.mp3');
                break;
            default:
                console.log(`Sorry, we are out of ${expr}.`);
        }
        audio.play();

    }
</script>


<img src="img/coloresMain.jpg" alt="Nature" style="width:100%">
<div class="w3-container">
    <h3 class="text-center"><b>Colors</b></h3>
</div>
@stop

@section('contenido')
<div class="w3-container">
    <h3><b>Definition</b></h3>
    <p>"El color es una sensación que producen los rayos luminosos para ver tonos"</p>
    <h5>Some Colors</h5>
</div>

<div class="w3-container">
    <img src="img/colores.jpg" alt="Norway" style="width:100%">
</div>
<br>
@stop

@section('ejemplos')
<div class="w3-container text-center">
    <h3><b>Pronunciation</b></h3>
    <p>Click to play!</p>
</div>
<div class="w3-container text-center">
    <div class="row ml-1">
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/amarillo.png" class="card-img-top" onclick="play_audio('1')" alt="...">
            </div>
        </div>
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/azul.png" class="card-img-top" onclick="play_audio('2')" alt="...">
            </div>
        </div>
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/blanco.png" class="card-img-top" onclick="play_audio('3')" alt="...">
            </div>
        </div>
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/cafe.png" class="card-img-top" onclick="play_audio('4')" alt="...">
            </div>
        </div>
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/gris.png" class="card-img-top" onclick="play_audio('5')" alt="...">
            </div>
        </div>
    </div>
    <div class="row ml-1">

        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/naranja.png" class="card-img-top" onclick="play_audio('6')" alt="...">
            </div>
        </div>
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/negro.png" class="card-img-top" onclick="play_audio('7')" alt="...">
            </div>
        </div>
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/rojo.png" class="card-img-top" onclick="play_audio('8')" alt="...">
            </div>
        </div>
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/rosa.png" class="card-img-top" onclick="play_audio('9')" alt="...">
            </div>
        </div>
        <div class="card border-warning  mb-3 shadow" style="width: 20%;">
            <div class="card-body">
                <img src="colores/verde.png" class="card-img-top" onclick="play_audio('10')" alt="...">
            </div>
        </div>
    </div>
</div>
<br>
@stop
@section('videos')
<div class="w3-container">
    <h3 class="text-center"><b>Video</b></h3>
</div>
<div class="w3-container text-center">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/XI6e7rYdQPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
@stop

@section('juego')


<div class="modal fade" id="Game" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Game" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Colors</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarJuego()"></button>
            </div>
            <div class="modal-body">
                <div class="text-center" id="game">

                    <iframe src="https://scratch.mit.edu/projects/767232971/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="w3-container text-center">
    <h3><b>Game</b></h3>

    <div class="d-grid gap-2">
        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#Game">
            <i class="bi bi-play"></i>Start
        </button>
    </div>

    <!-- <button class="btn btn-success" onclick="myFunction()">Start</button> -->
</div>
<br>

@stop