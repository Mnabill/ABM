@extends('layout.pro')
@section('content')


<form action="/posts"  method="POST" >
    @csrf
        <div class="form-group">
          <label >Enter Name</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter Name">
          <small  class="form-text text-muted"></small>
        </div>
        <div class="form-group">
                <label >Enter age</label>
                <input type="number" class="form-control" name="age"  placeholder="Enter Age">
                <small  class="form-text text-muted"></small>
              </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection