@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

  <main class="main-comics">
    <section class="jumbotron">
      <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="Jumbo">
    </section>

    <section id="current-series">
      <div class="container card-container">

        @foreach ($series as $serie)
          <div class="card">
            <div>
              <img class="img-card" src="{{ $serie['thumb'] }}" alt="{{ $serie['title'] }}">
            </div>
            <h3>{{ $serie['series'] }}</h3>
          </div>
        @endforeach
      </div>

    </section>
  </main>

@endsection
