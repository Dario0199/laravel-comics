
@extends('layouts.main')  
@section('main-content')  
    <main>
        <section class="container">
            <div class="cards d-flex flex-wrap">
                @foreach ($cards as $index => $card)
                    <div class="card">
                        <a href="{{ route('product-details', ['id' => $index]) }}">
                            <div class="img-card">
                                <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                            </div>
                            <h6>{{ $card['series'] }}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="btn">
                <button class="text-center">LOAD MORE</button>
            </div>
        </section>
    </main>
@endsection

@section('comics-content')
<script src="{{ asset('js/app.js') }}"></script>
@endsection