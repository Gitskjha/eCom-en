@extends('app')
@section('main')
<div class="container">
    <div class="row mt-2">
        <div class="col-md-6">
            <img src="{{$product->gallery}}" height="400" width="400px"/>
        </div>
        <div class="col-md-6">
            <a href="/">Go Back</a>
            <h2>Name : {{$product->name}}</h2>
            <h3>Price : ₹{{$product->price}}</h3>
            <h3>Category : {{$product->category}}</h3>
            <h3>Description : {{$product->description}}</h3>
            <br><br>
            <button class="btn btn-primary">Buy now</button>
            <button class="btn btn-success">Add To Cart</button>
        </div>
    </div>
</div>
@endsection