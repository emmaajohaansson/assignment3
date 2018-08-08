<button type="button" class="btn btn-lg create-button" data-toggle="modal" data-target="#streamingModal"><i class="fa fa-plus"></i> Add new streaming service</button>

<!-- Modal -->
<div id="streamingModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add new streaming service</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('streamingservices.store') }}" method="post">
            @csrf
      <div class="form-group">
        <label for="title">Name</label>
        <input type="text" name="name" class="col-md-10" required />
        <label for="title">Price</label>
        <input type="number" name="price" class="col-md-10" required />
        <label for="title">Image</label>
        <input type="text" name="image" class="col-md-10" required />
      </div>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Submit" class="btn btn-primary btn-sm mb-2">
      </div>
      </form>
    </div>

  </div>
</div>
