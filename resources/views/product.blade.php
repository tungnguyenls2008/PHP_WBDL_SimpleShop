@extends('layout')

@section('content')

        <div class="single_product">
            <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                <div class="row">

                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="image_selected"><img src="https://png2.cleanpng.com/sh/b16e39a3feec296065c061a049928770/L0KzQYm3V8AzN5driJH0aYP2gLBuTgNuaaN5iNp4bnWwfLFuj71nd595RdVubD24coToUPI2bJM4fdY7NT61SYmAWMU1PmI6S6IAM0C5RYSAU8cveJ9s/kisspng-smartphone-logo-font-cel-5b3a0b5db3ed25.298785461530530653737.png" alt=""></div>
                    </div>
                    <div class="col-lg-6 order-3">
                        <div class="product_description">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                                    <li class="breadcrumb-item active">Accessories</li>
                                </ol>
                            </nav>
                            <div class="product_name">{{$product->name}}</div>
                            <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                            <div> <span class="product_price">$ {{$product->price}}</span> </div>

                            <div class="order_info d-flex flex-row">
                                <form action="#">
                            </div>
                            <div class="row">
                                <div class="col-xs-6" style="margin-left: 13px;">
                                    <div class="product_quantity"> <span>QUANTITY: </span> <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6"> <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-primary shop-button">Add to Cart</a>
                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-underline">
                    <div class="col-md-6"> <span class=" deal-text">Specifications</span> </div>
                    <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="col-md-12">
                            <tbody>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Sales Package :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>2 in 1 Laptop, Power Adaptor, Active Stylus Pen, User Guide, Warranty Documents</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Model Number :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li> 14-dh0107TU </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Part Number :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>7AL87PA</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Color :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>Black</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Suitable for :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>Processing & Multitasking</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Processor Brand :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>Intel</li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
