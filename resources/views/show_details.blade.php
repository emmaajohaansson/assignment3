@extends('layouts.layout')

@section('content')

      <div class="full-height show-details">
        <div class="row justify-content-center">
        @if ($tvShow)
          <div class="card col-md-8">
            <div class="card-header">
              {{ $tvShow->title }}
            </div>
            <div class="card-body">
              <img class="details-img col-md-5" src="{{ $tvShow->image }}" alt="Image of tv-show">
                <div class="detail-info col-md-7">
                <h2><b>About:</b></h2>
                <p class="detailParagraphs">{{ $tvShow->description }}</p>
                <p class="detailParagraphs"><b>Premiere:</b> {{ $tvShow->premiere_year }}</p>
              </div>
            </div>
          </div>
        @endif
      </div>
      </div>

@endsection
