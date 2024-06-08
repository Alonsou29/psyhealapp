<head>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<form action="{{route('store', $post)}}" method="post">
    @csrf
    @if(isset($item->id))
        <input type="hidden" name="parent_id" value="{{$item->id}}">
    @endif
    <div class="form-group">
        <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Comentar.."></textarea>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-success btn-sn">ENVIAR</button>
    </div>
</form>