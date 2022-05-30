@extends('layouts.app')
@section('title')
    Products
@endsection
@section('content')

    <div class="row mt-3">
        @foreach($products as $product)
            <div class="card m-3 text-center" style="width: 47%;">
                <div class="card-body">
                    <h5 class="card-title"><strong>Name:</strong> {{$product->name}}</h5>
                    <h6 class="card-title"><strong>Category:</strong> {{$product->getCat()}}</h6>
                    <p class="card-text"><strong>Price:</strong>{{$product->price}}</p>
                    <p class="card-text"><strong>Descripton:</strong> {{$product->description}}</p>
                    <a href="/edit_product/{{$product->id}}"><span class="btn btn-primary">Edit</span></a>
                    <a onclick="return confirm('Are you sure you want to delete product?')" href="/delete_product/{{$product->id}}"><span class="btn btn-danger">Delete</span></a>
                </div>
            </div>
        @endforeach
    </div>

@endsection