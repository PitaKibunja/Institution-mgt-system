
<div class="row mt-3 mb-4">
    <div class="col-md-12">
    <a href="generate_tc" style="text-decoration:none; cursor:pointer;" class="text-decoration-none">
      <button class="btn btn-primary" id="promote-student-btn">Generate Transfer Certificate</button>
      </a>
    </div>
  </div>

<div class="row">
<div class="container card mb-4">
    <div class="card-header">
                  View and edit Generated TC
    </div>
  <div class="row">
  <div class="col-md-12">

        <div class="card-body">
        <div class="h-100  border-primary shadow p-3">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label for="class" class="form-label">Academic Year*</label>
                        <select class="form-control" id="class" required>
                        <option value="">Choose...</option>
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                        <option value="3">Class 3</option>
                        </select>
                    </div>
                    <!-- Admission no field, hidden by default -->
                    <div class="mb-3 d-none" id="admission-no-field">
                    <label for="admission-no" class="form-label">Admission No*</label>
                    <input type="text" class="form-control" id="admission-no" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Get Details</button>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                    </div>
                    </div>
                </div>
                </div>

        </div>
      
    </div>
  </div>
</div>
</div>
<div class="container card">
<div class="row">
  <div class="table-responsive mt-4 mb-4">
    <table class="table table-hover mt-8" id="promotion">
        <thead>
        <tr>
            <th>TC NO</th>
            <th>Student Name</th>
            <th>Admission No</th>
            <th>Generated Academic Year</th>
            <th>Generated Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>101</td>
            <td>John Doe</td>
            <td>P/12/2023</td>
            <td>2023</td>
            <td>01-March</td>
            <td>action</td>
        </tr>
        </tbody>
    </table>
        </div>
      </div>
    </div>

<script>
  $(document).ready(function() {
    $('#promotion').DataTable({
        "paging": true,
        "searching": true
    });
});
</script>