@extends('layout.pro')
@section('content')
    

    <div class="jumbotron text-center" >
        <h1 class="display-4">Hello , Wollcome!</h1>
        <p class="lead">You Can Create Or Show Posts</p>
        <hr class="my-4">
        <p>Choose What You Need</p>
        <a class="btn btn-primary btn-lg" href="/posts" role="button">Show Posts</a>
        <a class="btn btn-success btn-lg" href="/posts/create" role="button">Create Post</a>
    </div>

@endsection