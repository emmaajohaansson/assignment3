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
        <form action="{{ route('tvshows.store') }}" method="post">
            @csrf
      <div class="modal-body">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="col-md-10" required />
        <label for="title">Image</label>
        <input type="text" name="image" class="col-md-10" required />
        <label for="title">Description</label>
        <textarea rows="6" name="description" class="col-md-10 form-control" type="text" name="comment" required></textarea>
        <label for="title">Premiere Year</label>
        <input type="number" name="premiere_year" class="col-md-10" required />
      </div>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
      </div>
      </form>
    </div>

  </div>
</div>
