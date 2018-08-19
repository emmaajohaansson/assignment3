@extends('layouts.layout')

@section('content')

      <div class="show-details">
        <div class="row justify-content-center">
        @if ($tvShow)
        <img class="details-img col-xs-12" src="{{ $tvShow->image }}" alt="Image of tv-show">
            <h1 class="show-title col-md-12">
              {{ $tvShow->title }}
            </h1>
            <div class="col-md-12 showButtons">
              @auth
            <a href="{{ route('tvshows.edit', $tvShow->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            <form action="{{ route('tvshows.destroy', $tvShow->id) }}" method="post" class="deleteButton">
              @csrf
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
          </form>
          @endauth
          </div>
            <div class="detail-info col-md-6 col-md-offset-3">
            <p class="detailParagraphs">{{ $tvShow->description }}</p>
            <p class="detailParagraphs"><b>Premiere:</b> {{ $tvShow->premiere_year }}</p>
          </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-12">
          <p>Available on: </p>
          @forelse ($tvShow->streamingServices as $streamingServices => $streamingService)
              <img class="streaming-img col-md-5" src="{{ $streamingService->image }}">
            @empty
              <p>This series is unfortunately not available on any of the streaming services currently featured on this site.</p>
          @endforelse

      <div class="row justify-content-center reviews">
        <h2 class="col-md-4 col-md-offset-4-">Reviews</h2>
        <p class="text-center col-md-12">Read what others has to say about this show, or add your own review!</p>
        @guest
        <div class="col-md-6 review-guest">
          <p class="review-texts">Log in to write your own review!</p>
        </div>
        @endguest
        @auth
        <form action="{{ route('reviews.store') }}" method="post" class="col-md-6 col-md-offset-3">
            @csrf
        <div class="form-group review-form">
        @if (Auth::user())
        <input type="text" id="review-user" value="{{ Auth::user()->name }}" name="name"/>
        @endif
        <label for="rating">Rating</label>
        <select id="rating" name="grade" class="reviewFields form-control form-control-lg">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>

        <label for="reviewComment">Comment</label>
        <textarea rows="6" type="text" class="form-control reviewFields" name="comment" required></textarea>
        <input type="text" id="reviewConnect" value="{{ $tvShow->id }}" name="tv_show_id" readonly />
        </div>
        <input type="submit" value="Submit Review" class="btn btn-primary btn-sm mb-2">
        </form>
        @endauth
        <ul class="review-list list-group col-md-5">
          @forelse ($tvShow->reviews as $reviews => $review)
          <li class="list-group-item">
            <h4 class="revUsername">{{ $review->name }}</h4>
            <span class="fa-layers fa-fw">
            @for ($x = 1; $x <= $review->grade; $x++)
            <i class="fa fa-star"></i>
            @endfor
          </span>
            <p class="reviewComment">{{ $review->comment }}</p>
            <a class="btn btn-primary viewMore col-md-2" href="{{ route('reviews.show', ['id' => $review->id]) }}">View More</a>
        </li>
        @empty
          <p class="review-texts">There are no reviews for this show yet. Be the first to write one!</p>
          @endforelse
        </ul>
      @endif
      </div>
      </div>

@endsection
