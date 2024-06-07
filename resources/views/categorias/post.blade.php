@vite('resources/css/app.css')
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="text-center">{{$categoria->nombre}}</h2>

            @forelse ($categoria->posts as $item)
                <div class="row mb-4 mt-4 shadow align-items-center">
                    <div class="col-sm-6 p-0">
                        <img src="/img/foros/{{$item->imagen}}" class="img-fluis" width="200" height="100">
                    </div>
                    <div class="col-sm-6">
                        <h3>{{$item->nombre}}</h3>
                        <a href="/categorias/{{$categoria->id}}/{{$item->id}}" class="btn btn-success">VER</a>
                    </div>
                </div>
            @empty
                <p>No se han publicado posts</p>
            @endforelse
        </div>
    </div>
