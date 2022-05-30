@extends('layouts.app')
@section('title')
    Edit Category
@endsection
@section('content')

<form action="/update_category/{{$categories->id}}" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name">Category Name</label>
        <input type="text" class="form-control" value="{{$categories->name}}" name="name">
    </div>
   
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>

@endsection