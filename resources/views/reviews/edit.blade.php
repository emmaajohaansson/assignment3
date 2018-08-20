@extends('layouts.layout')

@section('content')

@if($review)
<h1>Edit review</h1>
<div class="row justify-content-center">
  <form action="{{ route('reviews.index') }}" method="post" class="col-md-6">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
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
    <div class="modal-footer">
      <input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
    </div>
  </form>
</div>
@endif

@endsection
