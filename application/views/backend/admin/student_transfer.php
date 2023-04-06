<button>Generate a new</button>
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