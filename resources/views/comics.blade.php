@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

  {{-- Jumbo --}}
  <main class="main-comics">


    {{-- Label Card Section --}}
    <div class="container">
      <h3 class="current-series">Current Series</h3>
    </div>

    {{-- Card section --}}
    <section id="current-series">
      <div class="container card-container">

        {{-- Foreach to create card --}}
        @foreach ($series as $serie)
          <div class="card">
            <a href="{{ route('comics.detail', ['index' => $loop->index]) }}">
              <div>
                <img class="img-card" src="{{ $serie['thumb'] }}" alt="{{ $serie['title'] }}">
              </div>
              <h3>{{ $serie['series'] }}</h3>
            </a>
          </div>
        @endforeach
      </div>
    </section>

    {{-- Shop Link section --}}
    <section id="shop-links">
      <div class="container d-flex align-items-center">
        <div class="shop-link d-flex align-items-center">
          <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="DC">
          <h4>DIGITAL COMICS</h4>
        </div>
        <div class="shop-link d-flex align-items-center">
          <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="DC">
          <h4>DC MERCHANDISE</h4>
        </div>
        <div class="shop-link d-flex align-items-center">
          <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="DC">
          <h4>SUBSCRIPTION</h4>
        </div>
        <div class="shop-link d-flex align-items-center">
          <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="DC">
          <h4>COMIC SHOP LOCATOR</h4>
        </div>
        <div class="shop-link d-flex align-items-center">
          <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="DC">
          <h4>COMIC SHOP LOCATOR</h4>
        </div>
      </div>
    </section>
  </main>

@endsection
