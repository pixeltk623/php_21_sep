<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="save">
          <div class="modal-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="cat_name" id="cat_name" class="form-control">
            </div>

            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" id="slug" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary modal-submit">Save</button>
          </div>
      </form>
    </div>
  </div>
</div>