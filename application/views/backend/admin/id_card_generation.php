<div class="container">
<div class="row">
<div class="container card mb-4">
  <div class="row">
  <button class="col-md-4 mb-4 btn btn btn-success">
  <a href="generate_StudentId" style="text-decoration:none; cursor:pointer;" class="text-decoration-none">
    <div class="container card h-100 border-0 shadow">
      <div class="card-body d-flex align-items-center ">
        <i class="bi bi-card-list text-primary me-3" style="font-size: 3rem;"></i>
        <div>
          <h5 class="card-title mb-0">Generate Student ID Card</h5>
          <p class="card-text text-secondary">Class And Section Wise</p>
        </div>
      </div>
    </div>
  </a>
</button>
  </div>
</div>

</div>
<div class="row ma-4">
<div class="container card mt-4">
<div class="container">
  <div class="container">
  <div class="row mb-4">
    <div class="col-md-12 mt-4">
      <input type="text" id="searchInput" class="form-control form-control-lg" placeholder="Search">
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table id="studentTable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Admission No</th>
            <th>Batch</th>
            <th>Department</th>
            <th>Active Year</th>
            <th>National ID No</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>202201</td>
            <td>2022-2025</td>
            <td>Undefined</td>
            <td>2022-2023</td>
            <td>123456789</td>
            <td>
              <a href="#" class="text-danger mr-2"><i class="fas fa-trash"></i></a>
              <a href="#" class="text-primary mr-2"><i class="fas fa-edit"></i></a>
              <a href="#" class="text-info"><i class="fas fa-eye"></i></a>
            </td>
          </tr>
          <tr>
            <td>202202</td>
            <td>2022-2025</td>
            <td>Undefined</td>
            <td>2022-2023</td>
            <td>987654321</td>
            <td>
              <a href="#" class="text-danger mr-2"><i class="fas fa-trash"></i></a>
              <a href="#" class="text-primary mr-2"><i class="fas fa-edit"></i></a>
              <a href="#" class="text-info"><i class="fas fa-eye"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

</div>

</div>
<script>
  $(document).ready(function() {
    // Initialize DataTable
    var table = $('#studentTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {
        "search": "",
        "searchPlaceholder": "Search..."
      }
    });

    // Add search bar functionality
    $('#searchInput').on('keyup', function() {
      table.search($(this).val()).draw();
    });
  });
</script>