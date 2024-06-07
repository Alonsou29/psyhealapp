@vite('resources/css/app.css')
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2 class="text-center">{{$post->nombre}}</h2>
                <img src="/img/foros/{{$post->imagen}}" width="200" height="100">
                
                @include('comentarios.lista',['lista'=>$post->comentarios])
            </div>
        </div>
    </div>