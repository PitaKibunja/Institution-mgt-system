<div class="row">
<div class="card mb-4">
  <div class="row">
  <div class="col-md-12">
        <div class="card-body">
        <div class="h-100  border-primary shadow p-3">
                <div class="row justify-content-center">
                <h5>AUTO GENERATION SETTINGS</h5>
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label for="class" class="form-label">Department*</label>
                        <select class="form-control" id="class" required>
                        <option value="">Choose...</option>
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                        <option value="3">Class 3</option>
                        </select>
                    </div>
                    <!-- Admission no field, hidden by default -->
                    <div class="mb-3" id="admission-no-field">
                        <label for="admission-no" class="form-label">Prefix*</label>
                        <input type="text" class="form-control" id="admission-no" required>
                    </div>
                    <div class="mb-3" id="admission-no-field">
                        <label for="admission-no" class="form-label">Starting No*</label>
                        <input type="text" class="form-control" id="admission-no" required>
                    </div>
                    <!-- Special category dropdown, hidden by default -->
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="gap-2">
                                <button class="btn btn-secondary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="button">Clear</button>
                                <button class="btn btn-primary" type="button">Save</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

        </div>
      
    </div>
  </div>
</div>
</div>
<div class="container card mb-4">
  <div class="col-md-12">
  <h4>AUTO GENERATION SETTINGS</h4>
        <div class="card-body">
        
    <input type="text" class="form-control search-input" placeholder="Search...">
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>S.No</th>
          <th>Prefix</th>
          <th>Department</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>UBD2022S</td>
          <td>Mechanical Department</td>
          <td><button class="btn btn-primary">Edit</button></td>
        </tr>
        <!-- add more rows here -->
      </tbody>
    </table>
  </div>
</div>
</div>