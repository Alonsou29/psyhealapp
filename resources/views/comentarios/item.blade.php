<div class="border p-3">
    <p class="font-weight-bolder">Escrito por: {{$item->user->first_name}} {{$item->user->last_name}}</p>
    <p>{{$item->descripcion}}</p>

    @include('comentarios.formulario', ["item"=>$item])
</div>