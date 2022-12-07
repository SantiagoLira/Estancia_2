@extends('template')

@section('titulo')
<script type="text/javascript">
    function cerrarJuego() {
        location.reload();
    }

    function carga_sonido() {
        document.getElementById('contenedor').innerHTML = '<embed src="archivo.mp3" autostart="true" />'
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
<div class="w3-container">
    <h3><b>Examples</b></h3>
</div>
<div class="container-xl">100% wide until extra large breakpoint
<div class="btn-group">
<button class="reproductor" onclick="audio()">Reproduce tu audio</button>
  <a href="#" class="btn btn-primary">Link</a>
  <a href="#" class="btn btn-primary">Link</a>
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