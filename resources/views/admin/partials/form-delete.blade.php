<button class="btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#modal{{$project->id}}">
    <i class="fa-solid fa-trash-can"></i>
</button>
{{-- modal --}}
<div class="modal fade" tabindex="-1" id="modal{{$project->id}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminazione progetto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Confermi l'eliminazione del progetto <span class="text-warning">{{$project->name}}</span> ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route('admin.projects.destroy',$project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" title="delete">Conferma eliminazione</button>
        </form>
        </div>
      </div>
    </div>
  </div>
