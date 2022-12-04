@extends('template')

@section('titulo')
<img src="img/coloresMain.jpg" alt="Nature" style="width:100%">
<div class="w3-container">
    <h3 class="text-center"><b>Colors</b></h3>
</div>
@stop

@section('contenido')
<div class="w3-container">
    <h3><b>Definition</b></h3>
    <p>El color es una sensación que producen los rayos luminosos para ver tonos</p>
    <h5>Some Colors</h5>
</div>

<div class="w3-container">
    <img src="img/colores.jpg" alt="Norway" style="width:100%">
</div>
@stop

@section('ejemplos')
<div class="w3-container">
    <h3><b>Examples</b></h3>
</div>
<div class="text-center">
    <div class="card border-warning mx-5 mb-3" style="width: 50%;">
        <img src="bob/Diapositiva2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">bob's house is a pinneaple</h5>
            <p class="card-text"></p>
        </div>
    </div>
    <div class="card border-warning mx-5 mb-3" style="width: 50%;">
        <img src="bob/Diapositiva3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">The sandy's favorite fruit is Orange</h5>
            <p class="card-text"></p>
        </div>
    </div>
    <div class="card border-warning mx-5 mb-3" style="width: 50%;">
        <img src="bob/Diapositiva4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Plankton eats Cucumbers</h5>
            <p class="card-text"></p>
        </div>
    </div>
</div>

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
<script type="text/javascript">
    function cerrarJuego() {
        location.reload();
    }
</script>

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
            Start
        </button>
    </div>

    <!-- <button class="btn btn-success" onclick="myFunction()">Start</button> -->
</div>
<br>

@stop