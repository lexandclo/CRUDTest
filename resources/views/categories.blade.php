@extends('layouts.app')
@section('title')
    Categories
@endsection
@section('content')

    <div class="row mt-3">
        @foreach($categories as $category)
            <div class="card m-3 text-center" style="width: 47%;">
                <div class="card-body">
                    <h5 class="card-title"><strong>Name:</strong> {{$category->name}}</h5>
                    <a href="/edit_category/{{$category->id}}"><span class="btn btn-primary">Edit</span></a>
                    <a onclick="return confirm('Are you sure you want to delete category?')" href="/delete_category/{{$category->id}}"><span class="btn btn-danger">Delete</span></a>
                </div>
            </div>
        @endforeach
    </div>

@endsection