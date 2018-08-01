@extends('layouts.layout')

@section('content')

      <div class="full-height">

        <button type="button" class="btn btn-lg create-button" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i> Add new show</button>

        <!-- Modal -->
        <div id="createModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add new show</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form>
                    @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="col-md-10" required />
                <label for="title">Image</label>
                <input type="text" class="col-md-10" required />
                <label for="title">Description</label>
                <textarea rows="6" class="col-md-10 form-control" type="text" name="comment" required></textarea>
                <label for="title">Premiere Year</label>
                <input type="number" class="col-md-10" required />
              </div>
            </form>
              </div>
              <div class="modal-footer">
                <input type="submit" value="Submit" id="submit-show-button" class="btn btn-primary btn-sm mb-2">
              </div>
            </div>

          </div>
        </div>

        <div class="row justify-content-center">
        @foreach ($tvShows as $tvShow)
        <div class="card col-md-3" style="width: 18rem";>
          <a href="/tvshows/{{ $tvShow->id }}">
          <img class="card-img-top" src="{{ $tvShow->image }}" alt="Image of tv-show">
        </a>
          <div class="card-body">
            <a href="/tvshows/{{ $tvShow->id }}">
            <h5 class="card-title">{{ $tvShow->title }}</h5>
          </a>
        </div>
      </div>
        @endforeach
      </div>
      </div>
      <!--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="{{ asset('js/script.js') }}"></script>-->

@endsection
