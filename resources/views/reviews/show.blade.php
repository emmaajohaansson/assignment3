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
      @auth
      <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
      <form action="{{ route('reviews.destroy', $review->id) }}" method="post" class="deleteButton">
        @csrf
      {{ method_field('DELETE') }}
      <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
    </form>
    @endauth
    </div>
  </div>
@endif

@endsection
