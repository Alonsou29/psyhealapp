@foreach ($lista as $item)
    @include('comentarios.item',['item'=>$item])
@endforeach