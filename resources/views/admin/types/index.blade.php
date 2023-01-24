@extends('layouts.app')

@section('content')
<div class="container-fluid dc-proj mt-3">
    <h1 class="mb-4">Le tue tipologie di progetto</h1>
    <form action="{{route('admin.types.store')}}" method="POST">
        @csrf
        <div class="input-group mb-3 w-50">
            <input type="text" class="form-control" placeholder="Aggiungi una tipologia di progetto" name="name">
            <button class="btn btn-outline-warning" type="submit">Aggiungi</button>
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
            @foreach ($types as $type)
            <tr>
                <td class="d-flex">
                <form action="{{route('admin.types.update', $type)}}" method="POST" class="d-flex">
                 @csrf
                @method('PATCH')
                        <input class="form-control me-3" type="text" placeholder="{{$type->name}}" name="name"  value="{{$type->name}}" class="d-inline-block">
                        <button class="btn-warning btn me-3" type="submit">Aggiorna</button>

                </form>
                        @include('admin.partials.type-tech-delete',[
                            'route'=>'types',
                            'entity'=>$type
                        ])
                </td>
                <td  class="w-50"><span class="badge text-bg-dark">{{count($type->projects)}}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
