@extends('layouts.app')

@section('title')
    Create Category
@endsection

@section('content')

<form action="store-data-cat" enctype="multipart/form-data" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name">Category Name</label>
        <input type="text" class="form-control" name="name">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Create Category">
    </div>
</form>

@endsection