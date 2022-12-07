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
                var audio = new Audio('adjetivos/old.mp3');
                break;
            case '2':
                var audio = new Audio('adjetivos/strong.mp3');
                break;
            case '3':
                var audio = new Audio('adjetivos/big.mp3');
                break;
            case '4':
                var audio = new Audio('adjetivos/fast.mp3');
                break;
            case '5':
                var audio = new Audio('adjetivos/strong.mp3');
                break;
            case '6':
                var audio = new Audio('adjetivos/hard.mp3');
                break;
            case '7':
                var audio = new Audio('adjetivos/young.mp3');
                break;

            default:
                console.log(`Sorry, we are out of ${expr}.`);
        }
        audio.play();

    }
</script>

<img src="img/adjetivosMain.jpeg" alt="Nature" style="width:100%">
<div class="w3-container">
    <h3 class="text-center"><b>Adjectives</b></h3>
</div>
@stop

@section('contenido')
<div class="w3-container">
    <h3><b>Adjectives</b></h3>
    <p>
        Un adjetivo es una palabra que acompaña y modifica al nombre. Puede ampliar, complementar o cuantificar su tamaño. Son palabras que nombran o indican cualidades, rasgos y propiedades de los nombres o sustantivos a los que acompañan.
    </p>
    <br>
</div>

<div class="w3-container">
    <img src="img/adjetivos.png" alt="Norway" style="width:100%">

</div>
<br>
@stop

@section('ejemplos')
<div class="w3-container text-center">
    <h3><b>Pronunciation</b></h3>
    <p>Click to play!</p>
</div>
<div class="w3-container text-center">
    <div class="row">
        <div class="card border-warning mx-3  mb-3 shadow" style="width: 40%;">
            <div class="card-body">
                <img src="adjetivos/calidad.png" class="card-img-top" onclick="play_audio('1')" alt="...">
            </div>
        </div>
        <div class="card border-warning mx-3 mb-3 shadow" style="width: 40%;">
            <div class="card-body">
                <img src="adjetivos/fuerte.png" class="card-img-top" onclick="play_audio('2')" alt="...">
            </div>
        </div>
        <div class="card border-warning mx-3 mb-3 shadow" style="width: 40%;">
            <div class="card-body">
                <img src="adjetivos/grande.png" class="card-img-top" onclick="play_audio('3')" alt="...">
            </div>
        </div>
        <div class="card border-warning mx-3 mb-3 shadow" style="width: 40%;">
            <div class="card-body">
                <img src="adjetivos/rapido.png" class="card-img-top" onclick="play_audio('4')" alt="...">
            </div>
        </div>
        <div class="card border-warning mx-3 mb-3 shadow" style="width: 40%;">
            <div class="card-body">
                <img src="adjetivos/fuerte.png" class="card-img-top" onclick="play_audio('5')" alt="...">
            </div>
        </div>
        <div class="card border-warning mx-3 mb-3 shadow" style="width: 40%;">
            <div class="card-body">
                <img src="adjetivos/suave.png" class="card-img-top" onclick="play_audio('6')" alt="...">
            </div>
        </div>
        <div class="card border-warning mx-3 mb-3 shadow" style="width: 40%;">
            <div class="card-body">
                <img src="adjetivos/viejo.png" class="card-img-top" onclick="play_audio('7')" alt="...">
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
    <iframe width="560" height="315" src="https://www.youtube.com/embed/d2RuO_fseyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
@stop

@section('juego')


<div class="modal fade" id="Game" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Game" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adjectives</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarJuego()"></button>
            </div>
            <div class="modal-body">
                <div class="text-center" id="game">
                    <iframe src="https://scratch.mit.edu/projects/771967011/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>

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
    <br>
    <!-- <button class="btn btn-success" onclick="myFunction()">Start</button> -->
</div>

@stop