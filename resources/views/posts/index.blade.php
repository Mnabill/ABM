@extends('layout.pro')
@section('content')

<div class="container">

    <div class="row">
        @foreach ($posts as $post)
            
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">{{$post->name}}</h5>
                        <p class="card-text">{{$post->age}}</p>  
                </div>
             </div>

            </div>
        @endforeach   
    
      
 </div>

@endsection