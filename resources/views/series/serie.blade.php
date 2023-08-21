@extends('layouts.main')

{{-- @section('title', 'Comics') --}}

@section('main-content')
  <section id="serie-detail">
    <div class="small-container serie-description">
      {{-- Description --}}
      <div class="width-70">
        <h1>{{ $serie['title'] }}</h1>

        <div class="width-100 d-flex">
          <div class="width-70 d-flex justify-content-between">
            <div>
              <span class="text-serie-light-green">U.S. Price: </span> <span class="text-white">{{ $serie['price'] }}</span>
            </div>
            <div>
              <span class="text-serie-light-green pe-1">AVAILABLE</span>
            </div>
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

    {{-- Author section --}}
    <div class="bg-gray">
      <div class="small-container serie-author d-flex">
        {{-- Talent --}}
        <div class="width-50 talent">
          <h2>Talent</h2>
          {{-- Art by --}}
          <div class="artists">
            <div class="font-weight-bold">Art by:</div>
            <div>
              @foreach ($serie['artists'] as $artist)
                {{ $artist }}@php echo !$loop->last ? ',' : '.' @endphp
              @endforeach
            </div>
          </div>
          {{-- Written by --}}
          <div class="writers">
            <div class="font-weight-bold">Written by:</div>
            <p>
              @foreach ($serie['writers'] as $writer)
                {{ $writer }}@php echo !$loop->last ? ',' : '.' @endphp
              @endforeach
            </p>
          </div>
        </div>

        {{-- Spec --}}
        <div class="width-50 spec">
          <h2>Specs</h2>
          {{-- Series --}}
          <div class="d-flex">
            <div class="font-weight-bold width-40">Series:</div>
            <div>
              {{ strtoupper($serie['series']) }}
            </div>
          </div>
          {{-- Price --}}
          <div class="d-flex">
            <div class="font-weight-bold width-40">U.S. Price:</div>
            <div>
              {{ strtoupper($serie['price']) }}
            </div>
          </div>
          {{-- Sale --}}
          <div class="d-flex">
            <div class="font-weight-bold width-40">On Sale Date:</div>
            <div>
              {{ strtoupper($serie['sale_date']) }}
            </div>
          </div>
        </div>
      </div>
    </div>



  </section>
@endsection
