@extends('layouts.layout')

@section('content')

  <div class="show-details">
    <h1 class="title">Streaming Services</h1>
    <p class="no-margin-bottom">Check out the different streaming services you can use to watch the shows displayed on Tv Community!</p>
    @auth
      @component('streamingservices.components.create')
      @endcomponent
    @endauth
    <div class="row justify-content-center">
    <ul class="review-list all-reviews list-group col-md-5">
      @foreach ($streamingServices as $service)
      <li class="list-group-item">
        <img class="streaming-img col-md-5" src="{{ $service->image }}">
        <div class="col-md-5 streaming-info">
        <h4 class="revUsername">{{ $service->name }}</h4>
        <p>Price: {{ $service->price }} SEK</p>
      </div>
    </li>
      @endforeach
    </ul>
  </div>
  </div>

@endsection
