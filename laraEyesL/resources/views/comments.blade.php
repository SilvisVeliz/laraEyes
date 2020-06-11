<div>
    <h2>LISTA DE COMENTARIOS</h2>
    @foreach($comentarios as $comen)
        {{ $comen->email }} - {{ $comen->comentario }} <br>
    @endforeach
</div>
