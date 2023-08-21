@extends('layouts.main')

{{-- @section('title', 'Comics') --}}

@section('main-content')
  <section id="serie-detail">
    <div class="small-container serie-description">
      {{-- Description --}}
      <div>
        <h1>{{ $serie['title'] }}</h1>
        <p>{{ $serie['description'] }}</p>

      </div>
      {{-- Advertisement --}}
      <div class="advertisement">
        <h3>Advertisement</h3>
        <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="Advertisement">
      </div>
    </div>

  </section>
@endsection
