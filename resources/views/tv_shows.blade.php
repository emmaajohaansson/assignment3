@extends('layouts.layout')

@section('content')

      <div class="full-height">
        <div class="row justify-content-center">
        @foreach ($tvShows as $tvShow)
        <div class="card col-md-3" style="width: 18rem";>
          <img class="card-img-top" src="{{ $tvShow->image }}" alt="Image of tv-show">
          <div class="card-body">
            <h5 class="card-title">{{ $tvShow->title }}</h5>
            <p class="card-text">{{ $tvShow->description }}</p>
            <a href="/tvshows/{{ $tvShow->id }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
        @endforeach
      </div>
      </div>

@endsection
