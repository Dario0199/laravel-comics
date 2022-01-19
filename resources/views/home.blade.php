
@extends('layouts.main')  
@section('main-content')  
    <main>
        <section class="container">
            <div class="cards d-flex flex-wrap">
                @foreach ($cards as $card)
                    <div class="card">
                        <div class="img-card">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                        </div>
                        <h6>{{ $card['series'] }}</h4>
                    </div>
                @endforeach
            </div>
            <div class="btn">
                <button class="text-center">LOAD MORE</button>
            </div>
        </section>
    </main>
@endsection