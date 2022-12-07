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
                var audio = new Audio('frutas/Apple.mp3');
                break;
            case '2':
                var audio = new Audio('frutas/Banana.mp3');
                break;
            case '3':
                var audio = new Audio('frutas/Cherries.mp3');
                break;
            case '4':
                var audio = new Audio('frutas/Coconut.mp3');
                break;
            case '5':
                var audio = new Audio('frutas/Grapes.mp3');
                break;
            case '6':
                var audio = new Audio('frutas/Lemon.mp3');
                break;
            case '7':
                var audio = new Audio('frutas/Mango.mp3');
                break;
            case '8':
                var audio = new Audio('frutas/Orange.mp3');
                break;
            case '9':
                var audio = new Audio('frutas/Peach.mp3');
                break;
            case '10':
                var audio = new Audio('frutas/Pear.mp3');
                break;
            case '11':
                var audio = new Audio('frutas/pineeaple.mp3');
                break;
            case '12':
                var audio = new Audio('frutas/strawberry.mp3');
                break;
            case '13':
                var audio = new Audio('frutas/Watermelon.mp3');
                break;
            default:
                console.log(`Sorry, we are out of ${expr}.`);
        }
        audio.play();

    }
</script>

<img src="img/frutasMain.jpg" alt="Nature" style="width:100%">
<div class="w3-container">
    <h3 class="text-center"><b>Fruits</b></h3>
</div>
@stop

@section('contenido')
<div class="w3-container">
    <h3><b>Definition</b></h3>
    <p>La fruta, en términos gastronómicos, es el producto alimenticio comestible que se obtiene de plantas o árboles y que se caracteriza por ser generalmente de sabor dulce.</p>
    <h5>Some fruits</h5>
</div>

<div class="w3-container">
    <!-- <img src="https://www.pngitem.com/pimgs/m/585-5851876_fruit-vegetable-flash-cards-busy-little-bugs-fruit.png" alt="Norway" style="width:100%"> -->
    <img src="img/TablaFrutas.png" alt="Norway" style="width:100%">
</div>
<br>
@stop

@section('ejemplos')
<div class="w3-container text-center">
    <h3><b>Examples</b></h3>
    <p>clic to play</p>
</div>
<div class="w3-container text-center">
    <div class="card border-warning mx-5 mb-3 shadow" style="width: 20%;">
        <div class="card-body">
            <img src="frutas/apple.png" class="card-img-top" onclick="play_audio('1')" alt="...">
        </div>
    </div>
    <div class="card border-warning mx-5 mb-3 shadow" style="width: 20%;">
        <div class="card-body">
            <img src="frutas/banana.png" class="card-img-top" onclick="play_audio('2')" alt="...">
        </div>
    </div>
    <div class="card border-warning mx-5 mb-3 shadow" style="width: 20%;">
        <div class="card-body">
            <img src="frutas/cherries.png" class="card-img-top" onclick="play_audio('3')" alt="...">
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
    <iframe width="560" height="315" src="https://www.youtube.com/embed/7nlGrC_4MKk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
@stop
@section('juego')


<div class="w3-container text-center">
    <h3><b>Game</b></h3>
    <div class="d-grid gap-2">
        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#Game">
            <i class="bi bi-play"></i> Start
        </button>
    </div>
</div>
<br>
<div class="modal fade" id="Game" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Game" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Fruits</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarJuego()"></button>
            </div>
            <div class="modal-body">
                <div class="text-center" id="game">
                    <iframe src="https://scratch.mit.edu/projects/767208692/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</div>


@stop