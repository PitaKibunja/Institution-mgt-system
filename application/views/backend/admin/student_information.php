<div class="row">
<div class="container card mb-4">
    <div class="card-header">
                Get student details
    </div>
  <div class="row">
  <div class="col-md-12">

        <div class="card-body">
        <div class="h-auto  border-primary shadow p-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Admission no field, hidden by default -->
                    <div class="row mb-3 " id="admission-no-field">
                        <div class="col-md-4 pt-4">
                            <label for="admission-no" class="form-label">Admission No*</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="admission-no" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid  gap-4">
                        <button class="btn btn-success" type="button">Get Details</button>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                        <button class="btn btn-outline-info" type="button">Clear</button>
            </div>
            </div>

        </div>      
    </div>
  </div>
</div>


</div>
<div class="container">
  <div class="row">
  <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-user bg-megna"></i>
                                <div class="bodystate">
                                    <h4><?php echo $this->db->count_all_results('student');?></h4>
                                    <span class="text-muted"><?php echo get_phrase('Students');?></span>
                                </div>
                            </div>
                        </div>
                    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <img src="path/to/profile-image.jpg" alt="Profile Image" class="img-fluid">
            </div>
            <div class="col-md-9">
              <h5 class="card-title">Profile Name</h5>
              <p>Class / Sec: Integrated Theology Program (BTh) / Semester 1 - 1st Year</p>
              <p>Gender: Male</p>
              <p>DOB: 1999-12-13</p>
              <p>Address: 113/W1, South Street, Brooklyn Bridge, Manhattan, Queens, Moscow, India-100142</p>
              <p>Contact No: 9659970231</p>
              <p>Email: student@edumaat.com</p>
              <p>Category: BC</p>
              <p>House: Gulmohar House</p>
              <p>Joined On: 2022-01-01</p>
            </div>
          </div>
        </div>
      
</div>

    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card 2</h5>
          <p class="card-text">This card occupies 2/3 of the container.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>