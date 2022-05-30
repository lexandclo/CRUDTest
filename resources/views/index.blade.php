@extends('layouts.app')
@section('title')
    My Shop
@endsection
@section('content')

    <div class="row mt-3">
        <div class="card m-3 text-center col ">
                <div class="card-body">
                    <h5 class="card-title"><strong>Name:</strong> Products</h5>
                    <p class="card-text"><strong>Descripton:</strong> All My Products</p>
                    <a href="products" class="btn btn-primary">View</a>
                </div>
        </div>
        <div class="card m-3 text-center col">
            <div class="card-body">
                <h5 class="card-title"><strong>Name:</strong> Categories</h5>
                <p class="card-text"><strong>Descripton:</strong> All My Categories</p>
                <a href="categories" class="btn btn-primary">View</a>
            </div>
    </div>
    </div>

@endsection