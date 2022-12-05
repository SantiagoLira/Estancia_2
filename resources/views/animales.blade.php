@extends('template')

@section('titulo')
<img src="img/animalesMain.png" alt="Nature" style="width:100%">
<div class="w3-container">
    <h3 class="text-center"><b>Animals</b></h3>
</div>
@stop

@section('contenido')
<div class="w3-container">
    <h3><b>Animals</b></h3>
    <h5>Vocabulary</h5>
</div>

<div class="w3-container">
    <img src="img/AnimalsChart.png" alt="Norway" style="width:100%">
</div>
<br>
@stop

@section('ejemplos')
<div class="w3-container">
    <h3><b>Examples</b></h3>
</div>
<div class="text-center">
    <div class="card border-warning mx-5 mb-3" style="width: 90%;">
        <div class="card-body">
            <h5 class="card-title">Sea animals</h5>
            <img src="img/animalMar.png" class="card-img-top" alt="...">

        </div>
    </div>
    <div class="card border-warning mx-5 mb-3" style="width: 90%;">

        <div class="card-body">
            <h5 class="card-title">Farm animals</h5>
            <img src="img/animalFarm.png" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="card border-warning mx-5 mb-3" style="width: 90%;">

        <div class="card-body">
            <h5 class="card-title">Forest animals</h5>
            <img src="img/animalbosque.png" class="card-img-top" alt="...">
        </div>
    </div>
    <br>
</div>
@stop

@section('videos')
<div class="w3-container">
    <h3 class="text-center"><b>Video</b></h3>
</div>
<div class="w3-container text-center">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Oxw6FoUNeT4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
@stop

@section('juego')
<script type="text/javascript">
    function cerrarJuego() {
        location.reload();
    }
</script>

<div class="modal fade" id="Game" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Game" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Animals</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarJuego()"></button>
            </div>
            <div class="modal-body">
                <div class="text-center" id="game">

                    <iframe src="https://scratch.mit.edu/projects/771971017/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="w3-container text-center">
    <h3><b>Game</b></h3>

    <div class="d-grid gap-2">
        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#Game">
            Start
        </button>
        <br>
    </div>

    <!-- <button class="btn btn-success" onclick="myFunction()">Start</button> -->
</div>

@stop