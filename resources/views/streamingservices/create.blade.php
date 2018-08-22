@extends('layouts.layout')

@section('content')

    <h1>Add new streaming service</h1>
    <div class="row justify-content-center">
        <form action="{{ route('streamingservices.store') }}" method="post" class="col-md-6">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="col-md-12 input" required />
                <label for="title">Image</label>
                <input type="text" name="image" class="col-md-12 input" required />
                <label for="title">Price</label>
                <input type="number" name="price" class="col-md-12 input" required />
            </div>
            <div class="modal-footer">
                <input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
            </div>
        </form>
    </div>

@endsection
