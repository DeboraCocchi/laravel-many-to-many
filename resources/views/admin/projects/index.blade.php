@extends('layouts.app');

@section('content')
    <div class="container-fluid dc-proj">
        <h1 class="mb-4">Il tuo elenco progetti</h1>
        <div class="row justify-content-between">
            @foreach ($projects as $project)
            <div class="col-2 p-2">
                <div class="card h-100 position-relative">
                    <span @class([
                        'position-absolute',
                        'badge',
                        'text-bg-primary'=>$project->type?->name=='MobileApp',
                        'text-bg-secondary'=>$project->type?->name=='Database',
                        'text-bg-success'=>$project->type?->name=='Dashboard',
                        'text-bg-danger'=>$project->type?->name=='Management SW',
                        'text-bg-info'=>$project->type?->name=='DesktopApp'
                    ])>{{$project->type?->name}}</span>

                    @if (str_contains($project->cover_image,'http'))
                    <img src="{{$project->cover_image}}"
                    class="card-img-top"
                    alt="{{$project->image_original_name}}">
                    @else
                    <img src="{{ asset('storage/'. $project->cover_image)}}"
                    class="card-img-top"
                    alt="{{$project->image_original_name}}">
                    @endif

                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="upper-body text-center">
                            <h5 class="card-title">{{$project->name}}</h5>
                            <p class="card-text">{{$project->client_name}}</p>
                        </div>
                        <div class="bottom-body text-center">
                            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-warning mt-1">Dettagli Progetto</a>

                        </div>

                    </div>
                  </div>
            </div>

            @endforeach
        </div>
    </div>
@endsection
