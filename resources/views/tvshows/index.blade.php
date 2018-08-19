@extends('layouts.layout')

@section('content')

      <div class="full-height">
      @auth
        <a href="{{ route('tvshows.create') }}" class="btn btn-lg create-button"><i class="fa fa-plus"></i> Add new show</button>
      @endauth
        <div class="row justify-content-center">
        @foreach ($tvShows as $tvShow)
        <div class="card col-md-3" style="width: 18rem";>
          <a href="/tvshows/{{ $tvShow->id }}">
          <img class="card-img-top" src="{{ $tvShow->image }}" alt="Image of tv-show">
        </a>
          <div class="card-body">
            <a href="/tvshows/{{ $tvShow->id }}">
            <h5 class="card-title">{{ $tvShow->title }}</h5>
          </a>
        </div>
      </div>
        @endforeach
      </div>
      </div>

@endsection
