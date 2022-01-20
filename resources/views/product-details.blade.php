@extends('layouts.main')
@section('main-content')
    <section class="jumbo">
        <div class="container">
            <img src="{{ $product['thumb'] }}" alt="{{ $product['series'] }}">
        </div>
    </section>
    <section class="content">
        <div class="container d-flex">
            <div class="text">
                <h2>{{ $product['title'] }}</h2>
                <div class="price-bar d-flex">
                    <div class="price-available d-flex justify-content-between">
                        <div class="price d-flex">
                            <h6>U.S. Price:</h6>
                            <h6 class="money">{{ $product['price'] }}</h6>
                        </div>
                        <h6>AVAILABLE</h6>
                    </div>
                    <div class="availability">
                        <select class="text-center">
                            <option value="CHECK AVAILABILITY">CHECK AVAILABILITY</option>
                        </select>
                    </div>
                </div>
                <div class="description">
                    <p>{{ $product['description'] }}</p>
                </div>
            </div>
            <div class="image">
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>
    </section>    
@endsection