@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

  <main class="main-comics">
    <section class="jumbotron">
      <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="Jumbo">
    </section>

    <section id="current-series">
      <div class="container card-container">
        <div class="card">
          <div>
            <img class="img-card"
              src="https://e0.pxfuel.com/wallpapers/416/298/desktop-wallpaper-superman-cartoon-superman-comic-book-thumbnail.jpg"
              alt="">
          </div>
          <h3>Action Comics</h3>
        </div>
      </div>

    </section>
  </main>

@endsection
