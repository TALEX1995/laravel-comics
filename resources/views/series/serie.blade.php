@extends('layouts.main')

{{-- @section('title', 'Comics') --}}

@section('main-content')
  <section id="serie-detail">
    <div class="small-container serie-description">
      {{-- Description --}}
      <div class="width-70">
        <h1>{{ $serie['title'] }}</h1>

        <div class="width-100 d-flex">
          <div class="width-70">
            <span class="text-serie-light-green">U.S. Price: </span> <span class="text-white">{{ $serie['price'] }}</span>
            <span class="text-serie-light-green">AVAILABLE</span>
          </div>
          <div class="width-30">
            <div class="text-white">Check Availability</div>
          </div>
        </div>

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
