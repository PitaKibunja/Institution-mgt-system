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
              <a class="nav-link" id="educational-tab" data-toggle="tab" href="#educational" role="tab" aria-controls="educational" aria-selected="false">Educational Background Info</a>
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
            <p>Academic info</p>
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
            <div class="container">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Student Education Information</h5>
                <form>
                  <div class="form-group">
                    <label for="secondary-school">Secondary/High School:</label>
                    <input type="text" class="form-control" id="secondary-school" placeholder="Enter school name">
                  </div>
                  <div class="form-group">
                    <label for="secondary-from">From:</label>
                    <input type="date" class="form-control" id="secondary-from">
                  </div>
                  <div class="form-group">
                    <label for="secondary-to">To:</label>
                    <input type="date" class="form-control" id="secondary-to">
                  </div>
                  <div class="form-group">
                    <label for="secondary-course">Course/Education:</label>
                    <input type="text" class="form-control" id="secondary-course" placeholder="Enter course name">
                  </div>
                  <div class="form-group">
                    <label for="secondary-level">Level attained:</label>
                    <input type="text" class="form-control" id="secondary-level" placeholder="Enter level attained">
                  </div>
                  <div class="form-group">
                    <label for="secondary-grade">Grade/Award:</label>
                    <input type="text" class="form-control" id="secondary-grade" placeholder="Enter grade or award received">
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="college">College:</label>
                    <input type="text" class="form-control" id="college" placeholder="Enter college name">
                  </div>
                  <div class="form-group">
                    <label for="college-from">From:</label>
                    <input type="date" class="form-control" id="college-from">
                  </div>
                  <div class="form-group">
                    <label for="college-to">To:</label>
                    <input type="date" class="form-control" id="college-to">
                  </div>
                  <div class="form-group">
                    <label for="college-course">Course/Education:</label>
                    <input type="text" class="form-control" id="college-course" placeholder="Enter course name">
                  </div>
                  <div class="form-group">
                    <label for="college-level">Level attained:</label>
                    <input type="text" class="form-control" id="college-level" placeholder="Enter level attained">
                  </div>
                  <div class="form-group">
                    <label for="college-grade">Grade/Award:</label>
                    <input type="text" class="form-control" id="college-grade" placeholder="Enter grade or award received">
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="secondary-cert">Secondary/High School Certification:</label>
                    <input type="file" class="form-control-file" id="secondary-cert" accept=".pdf">
                  </div>
                  <div class="form-group">
                    <label for="college-cert">College Certification:</label>
                    <input type="file" class="form-control-file" id="college-cert" accept=".pdf">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>

            </div>
            </div>
          <div class="tab-pane fade" id="discount" role="tabpanel" aria-labelledby="discount-tab">
                <!-- Discount Information Tab Content Here -->
                <p>discount info here</p>
                <div class="container">
                <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Discount/Scholarship Information</h5>
                        <form>
                          <div class="form-group">
                            <label for="discount-applicable">If Discount Applicable?</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="discount-applicable" id="yes" value="yes">
                              <label class="form-check-label" for="yes">
                                Yes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="discount-applicable" id="no" value="no">
                              <label class="form-check-label" for="no">
                                No
                              </label>
                            </div>
                          </div>
                          <div class="form-group" id="discount-type-group" style="display: none;">
                            <label for="discount-type">Discount/Scholarship Type*</label>
                            <select class="form-control" id="discount-type">
                              <option value="">Select Discount/Scholarship Type</option>
                              <option value="merit">Merit-Based Scholarship</option>
                              <option value="need">Need-Based Scholarship</option>
                              <option value="loyalty">Loyalty Discount</option>
                              <option value="other">Other</option>
                            </select>
                          </div>
                          <div class="form-group" id="discount-percentage-group" style="display: none;">
                            <label for="discount-percentage">Percentage*</label>
                            <input type="number" class="form-control" id="discount-percentage" placeholder="Enter percentage" min="0" max="100">
                          </div>
                        </form>
                      </div>
                    </div>
              </div>
                </div>
          <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                <!-- Other Information Tab Content Here -->
                <p>Other Info</p>
                <div class="container">
                <div class="card mx-auto">
                    <div class="card-body">
                      <h5 class="card-title">Sport and Club Selection</h5>
                      <form>
                        <div class="form-group">
                          <label for="sport-select">Sport:</label>
                          <select class="form-control" id="sport-select" name="sport">
                            <option value="">Select a sport</option>
                            <option value="Athletics">Athletics</option>
                            <option value="Basketball">Basketball</option>
                            <option value="Hockey">Hockey</option>
                            <option value="Soccer">Soccer</option>
                            <option value="Tennis">Tennis</option>
                            <option value="Volleyball">Volleyball</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="club-select">Club:</label>
                          <select class="form-control" id="club-select" name="club">
                            <option value="">Select a club</option>
                            <option value="Rugby">Rugby</option>
                            <option value="Soccer">Soccer</option>
                            <option value="Volleyball">Volleyball</option>
                            <option value="First Aid Club">First Aid Club</option>
                            <option value="Accounting Students Association">Accounting Students Association</option>
                            <option value="Forum for IT Students">Forum for IT Students</option>
                            <option value="Christian Union (CU)">Christian Union (CU)</option>
                            <option value="Presidential Award">Presidential Award</option>
                            <option value="Catholic Association (CU)">Catholic Association (CU)</option>
                            <option value="Wildlife Club">Wildlife Club</option>
                            <option value="Seventh Day Adventist (SDA)">Seventh Day Adventist (SDA)</option>
                            <option value="Entrepreneurship Club">Entrepreneurship Club</option>
                            <option value="Peer Councillors Club">Peer Councillors Club</option>
                            <option value="Students Initiative Against AIDS and Substance Abuse (SIAASA)">Students Initiative Against AIDS and Substance Abuse (SIAASA)</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="other-club">Other Club:</label>
                          <input type="text" class="form-control" id="other-club" name="other-club" placeholder="Enter other club">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
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

  $('input[name="discount-applicable"]').on('change', function() {
    if ($(this).val() === "yes") {
      $('#discount-type-group').show();
      $('#discount-percentage-group').show();
    } else {
      $('#discount-type-group').hide();
      $('#discount-percentage-group').hide();
    }
  });

</script>