@extends('layouts.app')

@section('content')

    <div class="container-fluid dc-proj">
       <div class="row home-profile">
           <div class="col-3 px-0 py-4 text-center me-2">
                   <img src="{{url('/img/Funny Bunny-7.png')}}" alt="user-image" class="py-3">
           </div>
           <div class="col-8 p-5 text-left">

               <p class="py-4"><strong>Nome: </strong>{{ Auth::user()->name }}</p>
               <p><strong>Email: </strong>{{ Auth::user()->email }}</p>


            </div>
       </div>
   </div>



@endsection
