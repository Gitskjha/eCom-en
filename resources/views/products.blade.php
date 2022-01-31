@extends('app')
@section('main')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach($products as $item)
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$item->id-1}}" class="{{$item->id==1?'active':''}}"></li>
    @endforeach
</ol>
  <div class="carousel-inner">
    @foreach($products as $product_item)
    <div class="carousel-item {{$product_item->id==1?'active':''}}">
      <a href="detail/{{$product_item->id}}">
      <img class="d-block w-100 img-slider" src="{{$product_item->gallery}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$product_item->name}}</h5>
        <p>{{$product_item->description}}</p>
        </a>
      </div>
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection