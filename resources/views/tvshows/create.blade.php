@extends('layouts.layout')

@section('content')

<div class="row justify-content-center">
  <form action="{{ route('tvshows.store') }}" method="post" class="col-md-4">
    @csrf
    <h1>Add new tv-show</h1>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="col-md-8" required />
      <label for="title">Image</label>
      <input type="text" name="image" class="col-md-8" required />
      <label for="title">Description</label>
      <textarea rows="6" name="description" class="col-md-8" type="text" name="comment" required></textarea>
      <label for="title">Premiere Year</label>
      <input type="number" name="premiere_year" class="col-md-8" required />
      <h4 class="form-heading">Available on the following streaming services:</h4>
      @foreach ($streamingServices as $service)
        <input type="checkbox" class="checkboxes" id="{{ $service->id }}" name="streamingServices[]" value="{{ $service->id }}">
        <label for="{{ $service->id }}" class="streamingOptions">{{ $service->name }}</label>
      @endforeach
    </div>
    <div class="modal-footer">
      <input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
    </div>
  </form>
</div>

@endsection
