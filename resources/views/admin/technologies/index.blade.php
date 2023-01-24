@extends('layouts.app')

@section('content')
<div class="container-fluid dc-proj mt-3">
    <h1 class="mb-4">Le tue tecnologie</h1>
    <form action="{{route('admin.technologies.store')}}" method="POST">
        @csrf
        <div class="input-group mb-3 w-50">
            <input technology="text" class="form-control" placeholder="Aggiungi una tecnologia" name="name">
            <button class="btn btn-outline-warning" technology="submit">Aggiungi</button>
        </div>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Tipo</th>
            <th scope="col">N° Progetti</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
            <tr>
                <td class="d-flex">
                <form action="{{route('admin.technologies.update', $technology)}}" method="POST" class="d-flex">
                 @csrf
                @method('PATCH')
                        <input class="form-control me-3" technology="text" placeholder="{{$technology->name}}" name="name"  value="{{$technology->name}}" class="d-inline-block">
                        <button class="btn-warning btn me-3" technology="submit">Aggiorna</button>

                </form>
                        @include('admin.partials.type-tech-delete',[
                            'route'=>'technologies',
                            'entity'=>$technology
                        ])
                </td>
                <td  class="w-50"><span class="badge text-bg-dark">{{count($technology->projects)}}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
