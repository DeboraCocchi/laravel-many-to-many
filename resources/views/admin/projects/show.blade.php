@extends('layouts.app')

@section('content')
    <div class="container w-50 m-auto text-center mt-5">
        <h1 class="mb-4">Dettagli progetto</h1>
        @if (str_contains($project->cover_image,'http'))
        <img src="{{$project->cover_image}}"
        class="card-img-top dc-proj-image"
        alt="{{$project->image_original_name}}"
        title="Anteprima progetto">
        @else
        <img src="{{ asset('storage/'. $project->cover_image)}}"
        class="card-img-top dc-proj-image"
        alt="{{$project->image_original_name}}"
        title="Anteprima progetto">
        @endif


        <h2 class="mb-2 mt-4"><strong>Nome Progetto: </strong>{{$project->name}}</h2>
        <div class="d-flex align-items-center w-80 justify-content-center">
            <span @class([
                'badge',
                'me-3',
                'text-bg-primary'=>$project->type?->name=='MobileApp',
                'text-bg-secondary'=>$project->type?->name=='Database',
                'text-bg-success'=>$project->type?->name=='Dashboard',
                'text-bg-danger'=>$project->type?->name=='Management SW',
                'text-bg-info'=>$project->type?->name=='DesktopApp'
                ])>{{$project->type?->name}}</span>

            <h5 class="my-2"><strong>Data di creazione: </strong>{{date_format(date_create($project->created), "d/m/Y")}}</h5>
        </div>
        <h4  class="my-2"><strong>Cliente: </strong>{{$project->client_name}}</h4>
        <p  class="my-2"><strong>Descrizione: </strong>{!!$project->summary!!}</p>
        @if ($project->technologies)
        <div class="technologies mb-4">
            @forelse ($project->technologies as $technology)
            <span class="badge rounded-pill text-bg-info text-white">{{$technology->name}}</span>
            @empty
                N.D.
            @endforelse
        </div>

        @endif
        <div class="btns">
            <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-warning" title="Edit Project"><i class="fa-solid fa-pencil"></i></a>
            @include('admin.partials.form-delete')
        </div>
        <a href="{{route('admin.projects.index')}}" class="btn btn-dark mt-4">Torna all'elenco progetti</a>
    </div>
@endsection
