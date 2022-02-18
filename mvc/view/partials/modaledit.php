<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="modal-edit">
        <input type="hidden" name="editid1" id="editid1" value="">
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="cat_nameE" id="cat_nameE" class="form-control" value="">
          </div>

          <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slugE" id="slugE" class="form-control" value="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" name="submit" class="btn btn-primary modal-edit">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

