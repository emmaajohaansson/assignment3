@extends('layouts.layout')

@section('content')

  <div class="show-details">
    <h1 class="title">Reviews</h1>
    <p class="no-margin-bottom">Don't know what to watch? Check out the reviews for all of the shows on Tv Community here!</p>
    <div class="row justify-content-center">
    <ul class="review-list all-reviews list-group col-md-5">
      @foreach ($reviews as $review)
      <li class="list-group-item">
        <h4 class="revUsername">{{ $review->name }}</h4>
        @foreach ($tvShows as $tvShow)
        @if ($review->tv_show_id == $tvShow->id)
        <p>Review of {{ $tvShow->title }}</p>
        @endif
        @endforeach
        <span class="fa-layers fa-fw">
        @for ($x = 1; $x <= $review->grade; $x++)
        <i class="fa fa-star"></i>
        @endfor
      </span>
        <a class="btn btn-primary viewMore col-md-2" href="{{ route('reviews.show', ['id' => $review->id]) }}">View More</a>
    </li>
    @endforeach
    </ul>
  </div>
  </div>

@endsection
