@extends('layouts.app')

@section('content')
<div class="container-fluid dc-proj">
    <h1 class="mb-4">Elenco progetti suddivisi per tipo</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" class="w-30">Type</th>
                <th scope="col">Projects List</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($types as $type)
          <tr>
            <td>{{$type->id}}</td>
            <td><strong>{{$type->name}}</strong></td>
            <td>
                <ul class="list-group list-group-flush">


                    @foreach ($type->projects as $project)
                    <li class="list-group-item">{{$project->name}}</li>
                    @endforeach
                </ul>
            </td>
          </tr>

          @empty
          <p>Nessun risultato trovato</p>
      @endforelse
        </tbody>
      </table>



</div>

@endsection
