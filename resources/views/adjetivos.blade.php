@extends('template')

@section('titulo')
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
<div class="w3-container">
    <h3><b>Examples</b></h3>
</div>
<div class="text-center">
    <img src="img/ejemplosAdjetivos1.png" alt="Norway" style="width:90%">
    <img src="img/ejemplosAdjetivos2.png" alt="Norway" style="width:90%">

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
<script type="text/javascript">
    function cerrarJuego() {
        location.reload();
    }
</script>

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
            Start
        </button>
    </div>
    <br>
    <!-- <button class="btn btn-success" onclick="myFunction()">Start</button> -->
</div>

@stop