@extends('layouts.layout')

@section('content')

      <div class="show-details">
        <div class="row justify-content-center">
        @if ($tvShow)
        <img class="details-img col-xs-12" src="{{ $tvShow->image }}" alt="Image of tv-show">
            <h1 class="show-title col-md-12">
              {{ $tvShow->title }}
            </h1>
            <div class="detail-info col-md-6 col-md-offset-3">
            <p class="detailParagraphs">{{ $tvShow->description }}</p>
            <p class="detailParagraphs"><b>Premiere:</b> {{ $tvShow->premiere_year }}</p>
          </div>
        @endif
      </div>
      <div class="row justify-content-center reviews">
        <h2 class="col-md-4 col-md-offset-4-">Reviews</h2>
        <p class="text-center col-md-12">Read what others has to say about this show, or add your own review!</p>
    <form class="col-md-6 col-md-offset-3">
        @csrf
  <div class="form-group review-form">
    <label for="rating">Rating</label>
    <select id="rating" name="rating" class="reviewFields form-control form-control-lg">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>

    <label for="reviewComment">Comment</label>
    <textarea rows="6" type="text" class="form-control reviewFields" name="comment" required></textarea>
  </div>
  <input type="submit" value="Submit Review" class="btn btn-primary btn-sm mb-2">
</form>
        <ul class="review-list list-group col-md-5">
          @foreach ($tvShow->reviews as $reviews => $review)
          <li class="list-group-item">
            <h4 class="revUsername">{{ $review->name }}</h4>
            <span class="fa-layers fa-fw">
            @for ($x = 1; $x <= $review->grade; $x++)
            <i class="fa fa-star"></i>
            @endfor
          </span>
            <p class="reviewComment">{{ $review->comment }}</p>
        </li>
          @endforeach
        </ul>
      </div>
      </div>

@endsection
