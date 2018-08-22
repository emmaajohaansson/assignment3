@extends('layouts.layout')

@section('content')

    @if($review)
        <h1>Edit review</h1>
        <div class="row justify-content-center">
            <form action="{{ route('reviews.update', $review->id) }}" method="post" class="col-md-6">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    @if (Auth::user())
                        <input type="text" id="review-user" value="{{ Auth::user()->name }}" name="name"/>
                    @endif
                    <label for="rating">Rating</label>
                    <select id="rating" name="grade" value="{{ $review->grade }}" class=" form-control form-control-lg">
                        <option <?php if ( $review->grade == 1 ) echo 'selected' ?>>1</option>
                        <option <?php if ( $review->grade == 2 ) echo 'selected' ?>>2</option>
                        <option <?php if ( $review->grade == 3 ) echo 'selected' ?>>3</option>
                        <option <?php if ( $review->grade == 4 ) echo 'selected' ?>>4</option>
                        <option <?php if ( $review->grade == 5 ) echo 'selected' ?>>5</option>
                    </select>
                    <label for="reviewComment">Comment</label>
                    <textarea rows="6" type="text" class="form-control" name="comment" required>{{ $review->comment }}</textarea>
                    @foreach ($tvShows as $tvShow)
                        @if ($tvShow->id == $review->tv_show_id)
                            <input type="text" id="reviewConnect" value="{{ $tvShow->id }}" name="tv_show_id" readonly />
                        @endif
                    @endforeach
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
                </div>
            </form>
        </div>
    @endif

@endsection
