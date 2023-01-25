@extends('layouts.app')

@section('content')

    <div class="container-fluid dc-proj">
        <h1 class="mb-4">Aggiungi un nuovo progetto</h1>
        <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" name="name" value="{{old('name')}}">
                @error('name')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 row">
                <div class="col-8">
                    <label for="client_name" class="form-label">Client Name</label>
                    <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name" aria-describedby="client_name" name="client_name" value="{{old('client_name')}}">
                    @error('client_name')
                    <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="date col-3">
                    <label for="created" class="form-label">Project Creation Date</label>
                    <input type="date" class="form-control @error('created') is-invalid @enderror" id="created" aria-describedby="name" name="created" value="{{old('created')}}">
                    @error('created')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <div class="type w-50 mt-4">
                    <select class="form-select mt-2" name="type_id">
                        <option value="" name="type_id">Scegli una categoria di progetto</option>
                        @foreach ($types as $type)
                        <option
                        value="{{$type->id}}" >{{$type->name}}
                        @if ($type->id == old('type_id'))selected @endif
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="div w-50 ms-5">
                    <p class="mb-0 mt-2">Seleziona una tecnologia</p>
                    <div class="technologies d-flex mt-1">
                        @foreach ($technologies as $technology)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$technology->id}}" id="technology{{$loop->iteration}}" name="technologies[]"
                            @if (in_array($technology->id, old('technologies',[])))
                            checked
                             @endif>
                            <label class="form-check-labe me-3" for="technology{{$loop->iteration}}">
                            {{$technology->name}}
                            </label>

                        </div>
                    @endforeach
                </div>
                </div>

            </div>

            <div class="mb-3">
                <label for="summary" class="form-label">Descrizione Progetto</label><br>
                <textarea name="summary" id="summary" rows="20" class="w-100">{{old('summary')}}</textarea>
                @error('summary')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Immagine Progetto</label>
                <input
                onchange="showImage(event)"
                 type="file" class="form-control @error('cover_image') is-invalid @enderror"  id="cover_image" name="cover_image" value="{{old('cover_image')}}">
                @error('cover_image')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
                <div class="cover_image mt-2" >
                    <img id="project-img" width="150" src="" alt="">
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Aggiungi nuovo</button>




        </form>
    </div>
    <script>
        ClassicEditor
                .create( document.querySelector( '#summary' ),{
                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                })
                .catch( error => {
                    console.error( error );
                } );
        function showImage(event){
            const tagImage = document.getElementById('project-img');
            tagImage.src = URL.createObjectURL(event.target.files[0]);
        }
        </script>
@endsection
