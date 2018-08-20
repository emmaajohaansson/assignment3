@extends('layouts.layout')

@section('content')

@if($tvShow)
<h1>Edit {{ $tvShow->title }}</h1>
<div class="row justify-content-center">
  <form action="{{ route('tvshows.update') }}" method="post" class="col-md-6">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" value="{{ $tvShow->title }}" class="col-md-12 input" required />
      <label for="title">Image</label>
      <input type="text" name="image" value="{{ $tvShow->image }}" class="col-md-12 input" required />
      <label for="title">Description</label>
      <textarea rows="6" name="description" class="col-md-12 input" type="text" name="comment" required>{{ $tvShow->description }}</textarea>
      <label for="title">Premiere Year</label>
      <input type="number" name="premiere_year" value="{{ $tvShow->premiere_year }}" class="col-md-12 input" required />
      <h4 class="form-heading">Available on the following streaming services:</h4>
      @foreach ($streamingServices as $streamingService)
        <input type="checkbox" class="checkboxes" id="{{ $streamingService->id }}" name="streamingServices[]" value="{{ $streamingService->id }}">
        <label for="{{ $streamingService->id }}" class="streamingOptions">{{ $streamingService->name }}</label>
      @endforeach
    </div>
    <div class="modal-footer">
      <input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
    </div>
  </form>
</div>
@endif

@endsection
