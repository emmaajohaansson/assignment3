@section('create')

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

@endsection

@include('tvshows.show')
