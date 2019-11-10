<div class="form-input-section">
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-md btn" data-toggle="modal" data-target="#myModal">Update Category</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Category</h4>
          </span>
        </div>
        <div class="modal-body">
          <?php
            if (is_array($categorysbyid)) {
          
            foreach ($categorysbyid as $rowid) {
           }
          ?>
          <form action="<?php echo baseurl;?>/Category/save_category" method="POST">
    <div class="form-group">
      <label for="usr">Name</label>
      <input type="text" class="form-control" id="usr" name="categoryname" value="<?php echo $rowid->categoryname;?>">
    </div>
    <div class="form-group">
      <label for="usr">Description</label>
      <textarea class="form-control" name="description"></textarea>
    </div>

      <div class="form-group">
        <label for="usr">Publication Status</label>
       <select class="form-control" id="usr" name="status">
        <option>Your Category</option>
        <option value="1">Published</option>
        <option value="2">UnPublished</option>
        </select>
      </div>

      <div class="form-group">
          <input type="submit" name="btn" value="Save" class="btn btn-success">
      </div>

  </form>
  <?php } ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>