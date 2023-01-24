<form action="{{route('admin.'.$route.'.destroy', $entity)}}" method="POST">
    @csrf
    @method('DELETE')
    <button title="delete" type="submit" class="btn btn-danger">Elimina</button>
</form>
