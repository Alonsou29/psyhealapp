@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<form action="{{ route('store', $post) }}" method="post" class="mt-4">
    @csrf
    @if(isset($item->id))
        <input type="hidden" name="parent_id" value="{{ $item->id }}">
    @endif
    <div class="mb-4">
        <textarea name="descripcion" id="descripcion" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" placeholder="Comentar.."></textarea>
    </div>
    <div class="text-right">
    <button type="submit" class="bg-sky-600 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
    <i class="fa-solid fa-paper-plane"></i>
</button>

    </div>
</form>
