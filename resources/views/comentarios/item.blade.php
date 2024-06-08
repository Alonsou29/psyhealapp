<head>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="border p-3">
    <p class="font-weight-bolder">Escrito por: {{$item->user->first_name}} {{$item->user->last_name}}</p>
    <p>{{$item->descripcion}}</p>
@auth
<p class="d-inline-flex gap-1">
    <button type="button" class="btn btn-success btn-sn" data-bs-toggle="collapse" 
    data-bs-target="#respuesta_{{$item->id}}" aria-controls="respuesta_{{$item->id}}" aria-expanded="false">Responder</button>

    <div id="respuesta_{{$item->id}}" >
        @include('comentarios.formulario', ['item' => $item])
    </div>
</p>
@endauth
</div>