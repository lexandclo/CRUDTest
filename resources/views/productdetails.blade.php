@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')

<div class="card text-center mt-5">
    <div class="card-header">
        <b>PRODUCT DETAILS</b>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$products->name}}</h5>
        <h6 class="card-title"> {{$products->getCat()}}</h6>
        <p class="card-text">{{$products->description}}.</p>
        <p class="card-text">{{$products->price}}.</p>
        <a href="/edit/{{$products->id}}"><span class="btn btn-primary">Edit</span></a>
        <a href="/delete/{{$products->id}}"><span class="btn btn-danger">Delete</span></a>
    </div>
</div>

@endsection