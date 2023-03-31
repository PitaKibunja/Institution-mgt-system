<div class="container">
   <div class="row">
    <div class="col-12">
    <div class="d-flex justify-content-end">
        <div class="btn-group">
          <button type="button" class="btn btn-primary p-4 m-2">Browse bulk upload excel</button>
        </div>
        <a href="#" class="btn btn-success p-4 m-2">Download excel Format</a>
      </div>
      <div class="card">
        <div class="card-header">
         <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">PERSONAL INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">ADDRESS INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="academic-tab" data-toggle="tab" href="#academic" role="tab" aria-controls="academic" aria-selected="false">ACADEMIC INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="transport-tab" data-toggle="tab" href="#transport" role="tab" aria-controls="transport" aria-selected="false">TRANSPORT INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="hostel-tab" data-toggle="tab" href="#hostel" role="tab" aria-controls="hostel" aria-selected="false">HOSTEL INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="educational-tab" data-toggle="tab" href="#educational" role="tab" aria-controls="educational" aria-selected="false">EDUCATIONAL INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="discount-tab" data-toggle="tab" href="#discount" role="tab" aria-controls="discount" aria-selected="false">DISCOUNT INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">OTHER INFORMATION</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
              <!-- Personal Information Tab Content Here -->
              <p>Personal Information</p>
              <div class="card">
                  <div class="card-body">
                  <form>
                      <div class="row">
                        <div class="col">
                        <div>
                            <label for="passport-photo">Upload Passport Photo:</label>
                            <input type="file" id="passport-photo" name="passport-photo" accept="image/*" onchange="previewImage(event)">
                            <div class="mt-2">
                              <img id="preview" src="#" alt="Preview Passport Photo" style="display:none; max-width: 100%; max-height: 150px;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="first-name">First Name*</label>
                            <input type="text" class="form-control" id="first-name" required>
                          </div>
                          <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name">
                          </div>
                          <div class="form-group">
                            <label for="father-first-name">Father or Guardian First Name*</label>
                            <input type="text" class="form-control" id="father-first-name" required>
                          </div>
                          <div class="form-group">
                            <label for="father-last-name">Father or Guardian Last Name</label>
                            <input type="text" class="form-control" id="father-last-name">
                          </div>
                          <div class="form-group">
                            <label for="mother-name">Mother's Name</label>
                            <input type="text" class="form-control" id="mother-name">
                          </div>
                          <div class="form-group">
                            <label for="gender">Gender*</label>
                            <select class="form-control" id="gender" required>
                              <option value="">Select gender</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                            </select>
                          </div>

                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" required>
                          </div>
                          <div class="form-group">
                            <label for="category">Category (Title)*</label>
                            <select class="form-control" id="category">
                              <option value="Parents">Higher National Diploma-Level 7</option>
                              <option value="Scholarship">Diploma-Level 6</option>
                              <option value="Others">Advanced Diploma-Level 6</option>
                              <option value="Others">Craft -Level 5	</option>
                              <option value="Loan">Certificate-Level 4</option>
                              <option value="Self-funding">Artisan-Level 3</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="sub-category">Sub - Category</label>
                            <input type="text" class="form-control" id="sub-category">
                          </div>
                          <div class="form-group">
                            <label for="religion">Religion</label>
                            <input type="text" class="form-control" id="religion">
                          </div>
                          <div class="form-group">
                            <label for="id-number">ID Number</label>
                            <input type="text" class="form-control" id="id-number">
                          </div>
                          <div class="form-group">
                            <label for="tuition-funds">Source for Tuition Funds</label>
                            <select class="form-control" id="tuition-funds">
                              <option value="Parents">Parents</option>
                              <option value="Scholarship">Scholarship</option>
                              <option value="Loan">Loan</option>
                              <option value="Self-funding">Self-funding</option>
                              <option value="Others">Others</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="parent-email">Parent/Guardian Email*</label>
                            <input type="email" class="form-control" id="parent-email" required>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
              <!-- Contact Information Tab Content Here -->
              <p>Address info</p>
              <div class="container">
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="address-line-1">Address Line 1*</label>
                          <input type="text" class="form-control" id="address-line-1" name="address-line-1" required>
                        </div>
                        <div class="form-group">
                          <label for="address-line-2">Address Line 2*</label>
                          <input type="text" class="form-control" id="address-line-2" name="address-line-2" required>
                        </div>
                        <div class="form-group">
                          <label for="country">Country*</label>
                          <input type="text" class="form-control" id="country" name="country" required>
                        </div>
                        <div class="form-group">
                          <label for="state">State*</label>
                          <input type="text" class="form-control" id="state" name="state" required>
                        </div>
                        <div class="form-group">
                          <label for="town">Town / Nearest Town*</label>
                          <input type="text" class="form-control" id="town" name="town" required>
                        </div>
                        <div class="form-group">
                          <label for="post-code">Post Code*</label>
                          <input type="text" class="form-control" id="post-code" name="post-code" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <button type="button" class="btn btn-secondary float-left">Previous</button>
                        <button type="button" class="btn btn-primary float-right">Next</button>
                        <button type="button" class="btn btn-danger float-right mr-2">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

            </div>
            <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab">
              <!-- Academic Information Tab Content Here -->
              
              <div class="card m-2">
  <div class="card-body">
    <form>
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="class">Class*</label>
            <select class="form-control dropdown-searchable" id="class" name="class">
              <option>Class A</option>
              <option>Class B</option>
              <option>Class C</option>
            </select>
          </div>
          <div class="form-group">
            <label for="semester-section">Semester - Section*</label>
            <select class="form-control dropdown-searchable" id="semester-section" name="semester-section">
              <option>Semester A - Section 1</option>
              <option>Semester A - Section 2</option>
              <option>Semester B - Section 1</option>
            </select>
          </div>
          <div class="form-group">
            <label for="academic-year">Joined Academic Year*</label>
            <select class="form-control dropdown-searchable" id="academic-year" name="academic-year">
              <option>2020-2021</option>
              <option>2021-2022</option>
              <option>2022-2023</option>
            </select>
          </div>
          <div class="form-group">
            <label for="admission-no">Admission No*</label>
            <input type="text" class="form-control" id="admission-no" name="admission-no" readonly>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="batch-start-year">Batch* - Start Year</label>
            <input type="text" class="form-control" id="batch-start-year" name="batch-start-year" required>
<div class="form-group">
            <label for="batch-end-year">End Year</label>
            <input type="text" class="form-control" id="batch-end-year" name="batch-end-year">
          </div>
          <div class="form-group">
            <label for="class-roll-no">Class Roll No (unique)*</label>
            <input type="text" class="form-control" id="class-roll-no" name="class-roll-no" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="joined-date">Joined date*</label>
              <input type="date" class="form-control" id="joined-date" name="joined-date" required>
            </div>
            <div class="form-group col-md-6">
              <label for="access-no">Access No (Bio-Metric)*</label>
              <input type="text" class="form-control" id="access-no" name="access-no" required>
            </div>
          </div>

        </div>
      </div>
      <div class="form-group text-right mt-2">
        <button type="button" class="btn btn-secondary float-left">Previous</button>
        <button type="button" class="btn btn-primary mr-2">Cancel</button>
        <button type="submit" class="btn btn-success">Next</button>
      </div>
    </form>
  </div>
</div>

            </div>
            </div>
            <div class="tab-pane fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
              <!-- Transport Information Tab Content Here -->
              <p>Transport Information</p>
            </div>
            <div class="tab-pane fade" id="hostel" role="tabpanel" aria-labelledby="hostel-tab">
              <!-- Hostel Information Tab Content Here -->
              <p>Hostel Information</p>
            </div>
            <div class="tab-pane fade" id="educational" role="tabpanel" aria-labelledby="educational-tab">
          <!-- Educational Information Tab Content Here -->
          <P>Educational info</P>
            </div>
          <div class="tab-pane fade" id="discount" role="tabpanel" aria-labelledby="discount-tab">
                <!-- Discount Information Tab Content Here -->
                <p>discount info here</p>
              </div>
          <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                <!-- Other Information Tab Content Here -->
                <p>Other Info</p>
              </div>
          </div>
        </div>

      </div>
    </div>
   </div>
</div>


























<script>
  // Get all the tabs
const tabs = document.querySelectorAll('.nav-tabs a');

// Get all the tab panes
const tabContent = document.querySelectorAll('.tab-content .tab-pane');

// Add event listener to each tab
tabs.forEach((tab) => {
  tab.addEventListener('click', (event) => {
    // Prevent the default link behavior
    event.preventDefault();
    
    // Remove the 'active' class from all tabs and tab panes
    tabs.forEach((tab) => tab.classList.remove('active'));
    tabContent.forEach((pane) => pane.classList.remove('active', 'show'));
    
    // Add the 'active' class to the clicked tab
    event.target.classList.add('active');
    
    // Get the id of the clicked tab
    const id = event.target.getAttribute('href').replace('#', '');
    
    // Add the 'active' and 'show' class to the corresponding tab pane
    document.getElementById(id).classList.add('active', 'show');
  });
});
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function(){
    var output = document.getElementById('preview');
    output.src = reader.result;
    output.style.display = "block";
  }
  reader.readAsDataURL(event.target.files[0]);
}

</script>