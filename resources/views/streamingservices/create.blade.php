@extends('layouts.layout')

@section('content')

<form action="{{ route('streamingservices.store') }}" method="post">
    @csrf
<div class="form-group">
<label for="title">Name</label>
<input type="text" name="name" class="col-md-10" required />
<label for="title">Image</label>
<input type="text" name="image" class="col-md-10" required />
<label for="title">Price</label>
<input type="number" name="price" class="col-md-10" required />
</div>
<input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
</form>

@endsection
