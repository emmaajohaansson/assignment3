@extends('layouts.layout')

@section('content')

@if ($review)
    <div class="row justify-content-center">
      <a class="back-arrow" href="{{ route('reviews.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
    <div class="row justify-content-center">
    <div class="oneReview col-md-6">
      <h4 class="reviewUsername">{{ $review->name }}</h4>
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
      <p class="reviewComment">{{ $review->comment }}</p>
    </div>
  </div>
@endif

@endsection
