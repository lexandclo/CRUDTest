@extends('layouts.app')
@section('title')
    Edit Product
@endsection
@section('content')

<form action="/update_product/{{$products->id}}" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" value="{{$products->name}}" name="name">
    </div>
    <div class="form-group m-3">
        <label for="description">Product Description</label>
        <textarea class="form-control" name="description" rows="3"> {{$products->description}} </textarea>
    </div>
    <div class="form-group m-3">
        <label for="price">Product Price</label>
        <input class="form-control" name="price" value="{{$products->price}}" name="price">
    </div>

    <div class="form-group m-3">
        <select class="form-select" aria-label="Default select example" name="categoryid">
            <option selected>change category:</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ ( $category->id == $products->category_id) ? 'selected' : '' }}> {{ $category->name }} </option>
            @endforeach
        </select>
    </div>  

    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>

@endsection