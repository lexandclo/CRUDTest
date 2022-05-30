@extends('layouts.app')

@section('title')
    Create Product
@endsection

@section('content')

<form action="store-data" enctype="multipart/form-data" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" name="name">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group m-3">
        <label for="description">Product Description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group m-3">
        <label for="price">Product Price</label>
        <input type="text" class="form-control" name="price">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group m-3">
        <select class="form-select" aria-label="Default select example" name="categoryid">
            <option selected>Choose a category:</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('categoryid')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>  

    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Create Product">
    </div>
</form>

@endsection