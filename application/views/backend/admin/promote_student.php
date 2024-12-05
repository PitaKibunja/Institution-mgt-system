<div class="row">
<div class="container card mb-4">
  <div class="row">
  <div class="col-md-12">
        <div class="card-body">
        <div class="h-100  border-primary shadow p-3">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                    <h5 class="text-center mb-3">SELECT STUDENT(S) FOR PROMOTION</h5>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class*</label>
                        <select class="form-control" id="class" required>
                        <option value="">Choose...</option>
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                        <option value="3">Class 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester-Section*</label>
                        <select class="form-control" id="semester" required>
                        <option value="">Choose...</option>
                        <option value="1">Semester 1, Section A</option>
                        <option value="2">Semester 2, Section B</option>
                        <option value="3">Semester 3, Section C</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="criteria" class="form-label">Criteria*</label>
                        <select class="form-control" id="criteria" required>
                        <option value="">Choose...</option>
                        <option value="3">All</option>
                        <option value="1">Specific category</option>
                        <option value="2">Specific Student</option>
                        </select>
                    </div>
                    <!-- Admission no field, hidden by default -->
                    <div class="mb-3 d-none" id="admission-no-field">
                    <label for="admission-no" class="form-label">Admission No*</label>
                    <input type="text" class="form-control" id="admission-no" required>
                    </div>

                    <!-- Special category dropdown, hidden by default -->
                    <div class="mb-3 d-none" id="special-category-field">
                    <label for="special-category" class="form-label">Special Category*</label>
                    <select class="form-control" id="special-category" required>
                        <option value="">Choose...</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Get student list</button>
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
        <th><input type="checkbox" id="select-all"></th>
        <th>Admission No</th>
        <th>Student Name</th>
        <th>Present Class/Section</th>
        <th>Student Contact Tel.</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox" class="select-row"></td>
        <td>202201</td>
        <td>John Doe</td>
        <td>Class 10A</td>
        <td>555-1234</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="select-row"></td>
        <td>202202</td>
        <td>Jane Smith</td>
        <td>Class 9B</td>

        <td>555-1234</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="select-row"></td>
        <td>202203</td>
        <td>Bob Johnson</td>
        <td>Class 8C</td>
        <td>555-4321</td>

      </tr>
    </tbody>
  </table>
  <div class="container mt-5 pb-8">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="promote-class">Promoted To Class*</label>
        <select class="form-control" id="promote-class">
          <option>Class 11</option>
          <option>Class 12</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="promote-semester">Promoted To Semester-Section*</label>
        <select class="form-control" id="promote-semester">
          <option>Semester A - Section 1</option>
          <option>Semester A - Section 2</option>
          <option>Semester B - Section 1</option>
          <option>Semester B - Section 2</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <button class="btn btn-primary" id="promote-student-btn">Promote the selected Students</button>
    </div>
  </div>

  <!-- <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="select-all"></th>
          <th>Admission No</th>
          <th>Student Name</th>
          <th>Present Class/Section</th>
          <th>Student Contact Tel.</th>
          <th>Parent Contact Tel.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" class="select-row"></td>
          <td>202201</td>
          <td>John Doe</td>
          <td>Class 10A</td>
          <td>555-1234</td>
          <td>555-5678</td>
        </tr>
      </tbody>
    </table>
  </div> -->
</div>

        </div>
      </div>
    </div>
    
  </div>
</div>
</div>
</div>

<script>
  // Listen for changes on the criteria dropdown
  document.getElementById("criteria").addEventListener("change", function() {
    var admissionNoField = document.getElementById("admission-no-field");
    var specialCategoryField = document.getElementById("special-category-field");

    // Hide all fields
    admissionNoField.classList.add("d-none");
    specialCategoryField.classList.add("d-none");

    // Show the appropriate field based on the selected option
    if (this.value === "1") {
      specialCategoryField.classList.remove("d-none");
    } else if (this.value === "2") {
      admissionNoField.classList.remove("d-none");
    }
  });
  $(document).ready(function() {
    $('#promotion').DataTable({
        "paging": true,
        "searching": true
    });
});
 

</script>