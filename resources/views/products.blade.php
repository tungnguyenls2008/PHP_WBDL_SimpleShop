@extends('layout')
 
@section('title', 'Products')
 
@section('content')
 
    <div class="container products">
 
        <div class="row">
            
            @foreach($products as $product)

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                        <p><strong>Price: </strong> {{ $product->price }}$</p>
                         <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>

            @endforeach
            
 
          
        </div><!-- End row -->
 
    </div>
 
@endsection