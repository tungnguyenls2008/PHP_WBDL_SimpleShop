@extends('layout')

@section('title', 'Products')

@section('content')

    <div class="container products">
<form method="post">
        <div class="row">

            @foreach($products as $product)

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="https://png2.cleanpng.com/sh/b16e39a3feec296065c061a049928770/L0KzQYm3V8AzN5driJH0aYP2gLBuTgNuaaN5iNp4bnWwfLFuj71nd595RdVubD24coToUPI2bJM4fdY7NT61SYmAWMU1PmI6S6IAM0C5RYSAU8cveJ9s/kisspng-smartphone-logo-font-cel-5b3a0b5db3ed25.298785461530530653737.png" alt="">
                    <div class="caption">
                        <h4><a  href="{{route('details',[$product->id])}}">{{ $product->name }}</a></h4>
                        <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                        <p><strong>Price: </strong> {{ $product->price }}$</p>
                         <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>

            @endforeach



        </div><!-- End row -->
</form>
    </div>

@endsection
