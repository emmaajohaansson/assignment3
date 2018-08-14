@extends('layouts.layout')

@section('content')

@if ($streamingService)
    <div class="row justify-content-center">
      <a class="back-arrow" href="{{ route('streamingservices.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
    <div class="row justify-content-center">
    <div class="oneStreamer col-md-6">
      <img class="streaming-img col-md-5" src="{{ $streamingService->image }}">
      <div class="col-md-5 streaming-info">
      <h4 class="revUsername">{{ $streamingService->name }}</h4>
      <p>Price: {{ $streamingService->price }} SEK</p>
      <a class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
      <a class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
    </div>
  </div>
@endif

@endsection
