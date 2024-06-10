@vite('resources/css/app.css')

<div class="border p-3 mb-4">
    <p class="font-bold">Escrito por: {{$item->user->first_name}} {{$item->user->last_name}}</p>
    <p>{{$item->descripcion}}</p>
    @auth
    <div class="flex gap-2">
        <button type="button" class="bg-sky-600 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="toggleForm('respuesta_{{$item->id}}')">Responder</button>
    </div>
    <div id="respuesta_{{$item->id}}" class="hidden mt-4">
        @include('comentarios.formulario', ['item' => $item])
    </div>
    @endauth

    @if($item->respuestas)
        <br>
        @include('comentarios.lista',['lista'=>$item->respuestas])
    
    @endif
</div>
