<form action="" method="post">
    @csrf
    <input type="hidden" name="user_id" value="{{\auth()->id()}}">
    <div class="form-group">
        <textarea name="descripcion"  class="form-control" placeholder="Comentar.."></textarea>
    </div>
    <button type="submit" class="btn btn-success">ENVIAR</button>
</form>