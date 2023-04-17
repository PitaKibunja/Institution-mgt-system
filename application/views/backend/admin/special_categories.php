<!-- <div class="row justify-content-left">
    <div class="col-md-6">
        <button class="btn btn-warning">Add new Special Category</button>
    </div>
</div> -->
<div class="row justify-content-left">
  <div class="col-md-6">
    <button class="btn btn-warning" data-toggle="modal" data-target="#newCategoryModal">Add new Special Category</button>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newCategoryModal" tabindex="-1" role="dialog" aria-labelledby="newCategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newCategoryModalLabel">Add new Special Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="categoryName">Enter Special Category:</label>
          <input type="text" class="form-control" id="categoryName">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="container mb-4 mt-4">
    <div class="card">
        <div class="ma-4">
            <h5>SPECIAL CATEGORY</h5>
                
        </div>
<div class="card-body">
    <!-- <div class="container"> -->
  <div class="input-group mb-3 col-4 justify-content-end">
    <input type="text" class="form-control" placeholder="Search...">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button" id="searchBtn">Search</button>
    </div>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Special Category Id</th>
        <th>Special Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Government Quota</td>
        <td>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Management Quota</td>
        <td>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>NRI Quota</td>
        <td>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
   
</div>
    
</div>
<script>
  $(document).ready(function() {
    $("#searchBtn").click(function() {
      var value = $("input").val().toLowerCase();
      $("table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>