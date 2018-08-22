@extends('layouts.layout')

@section('content')

@if($streamingService)
<h1>Edit {{ $streamingService->name }}</h1>
<div class="row justify-content-center">
  <form action="{{ route('streamingservices.update', $streamingService->id) }}" method="post" class="col-md-6">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="title">Name</label>
      <input type="text" name="name" value="{{ $streamingService->name }}" class="col-md-12 input" required />
      <label for="title">Image</label>
      <input type="text" name="image" value="{{ $streamingService->image }}" class="col-md-12 input" required />
      <label for="title">Price</label>
      <input type="number" name="price" value="{{ $streamingService->price }}" class="col-md-12 input" required />
    </div>
    <div class="modal-footer">
      <input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
    </div>
  </form>
</div>
@endif

@endsection
