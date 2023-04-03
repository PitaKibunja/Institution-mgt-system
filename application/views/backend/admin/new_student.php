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
  <!-- Student Personal Information Tab Content Here -->
              <div class="card mt-3">
                <div class="card-header">
                  Student Personal Info
                </div>
                <div class="card-body">
                  <!-- Student Personal Info Form Here -->
                  <form>
              <div class="container">
              <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="surname">Surname*</label>
        <input type="text" class="form-control" id="surname" name="surname" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="firstName">First Name*</label>
        <input type="text" class="form-control" id="firstName" name="firstName" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="middleName">Middle Name</label>
        <input type="text" class="form-control" id="middleName" name="middleName">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="gender">Gender*</label>
        <select class="form-control" id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="dob">Date of Birth*</label>
        <input type="date" class="form-control" id="dob" name="dob" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="placeOfBirth">Place of Birth</label>
        <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="nationalId">National ID/Passport</label>
        <input type="text" class="form-control" id="nationalId" name="nationalId">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
        <label for="phoneNo">Phone Number</label>
        <input type="number" class="form-control" id="email" name="email">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="religion">Religion</label>
        <input type="text" class="form-control" id="nationalId" name="nationalId">
      </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
          <label for="specialCategory">Special Category</label>
          <select class="form-control" id="specialCategory" name="specialCategory">
            <option value="government">Government Sponsored</option>
            <option value="self">Self Sponsored</option>
            <option value="scholarship">Scholarship</option>
          </select>
        </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
          <label for="maritalStatus">Marital Status</label>
          <select class="form-control" id="maritalStatus" name="maritalStatus">
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
          </select>
        </div>
    </div>
  </div>
  </div>
</form>

                </div>
              </div>
            
  <!-- Parental/Next of Kin Information Tab Content Here -->
  <div class="card mt-3">
    <div class="card-header">
      Parental/Next of Kin info
    </div>
    <div class="card-body">
      <!-- Parental/Next of Kin Info Form Here -->
      <div class="row">
  <div class="col">
    <div class="form-group">
      <!-- First column form group here -->
      <label for="fatherName">Father/Guardian Fullname</label>
  <input type="text" class="form-control" id="fatherName" name="fatherName">
    </div>
    <div class="form-group">
      <!-- First column form group here -->
      <label for="motherName">Mother/Guardian Fullname</label>
  <input type="text" class="form-control" id="motherName" name="motherName">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <!-- Second column form group here -->
      <label for="parentPhoneNumber">Phone Number</label>
  <input type="tel" class="form-control" id="parentPhoneNumber" name="parentPhoneNumber">
    </div>
    <div class="form-group">
      <!-- Second column form group here -->
      <label for="parentEmail">Email Address</label>
  <input type="email" class="form-control" id="parentEmail" name="parentEmail">
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <!-- Third column form group here -->
      <label for="parentProfession">Profession</label>
  <input type="text" class="form-control" id="parentProfession" name="parentProfession">
    </div>
  </div>
</div>

    </div>
  </div>
  <!-- Medical Information Tab Content Here -->
  <div class="card mt-3">
    <div class="card-header">
      Medical info
    </div>
    <div class="card-body">
      <!-- Medical Info Form Here -->
    </div>
  </div>
</div>
            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
              <!-- Contact Information Tab Content Here -->
              <div class="container">
                  <form>
                  <div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="address-line-1">Citizenship*</label>
      <input type="text" class="form-control" value="Kenyan" id="address-line-1" name="address-line-1" required>
    </div>
    <div class="form-group">
      <label for="country">County of Origin(Home County)*</label>
      <input type="text" class="form-control" id="country" name="country" required>
    </div>
    <div class="form-group">
      <label for="town">Town / Nearest Town*</label>
      <input type="text" class="form-control" id="town" name="town" required>
    </div>
    <div class="form-group">
      <label for="town">Home Location:*</label>
      <input type="text" class="form-control" id="location" name="location" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="address-line-2">Country*</label>
      <input type="text" class="form-control" value="Kenya" id="address-line-2" name="address-line-2" required>
    </div>
    <div class="form-group">
      <label for="state">County of Residence at the time of admission:*</label>
      <input type="text" class="form-control" id="state" name="state" required>
    </div>
    <div class="form-group">
      <label for="town">Residential District:*</label>
      <input type="text" class="form-control" id="district" name="district" required>
    </div>
    <div class="form-group">
      <label for="post-code">Post Code*</label>
      <input type="text" class="form-control" id="post-code" name="post-code" required>
    </div>
  </div>
</div>

                    <div class="row">
                      <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-block" onclick="previous()">Previous</button>
                      </div>
                      <div class="col-md-4">
                        <button type="button" class="btn btn-secondary btn-block" onclick="cancel()">Cancel</button>
                      </div>
                      <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-block" onclick="next()">Next</button>
                      </div>
                  </div>
                  </form>
                </div>

            </div>
            <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab">
              <!-- Academic Information Tab Content Here -->
            <div class="card mt-0">
                <div class="card-header">
                  Academic Information
                </div>

                <div class="card-body mt-2">

                <div class="container">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Class*</label>
                <div class="col-sm-9">
                  <select class="form-control" name="class">
                    <option value="engineering">Engineering</option>
                    <option value="physics">Physics</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="biology">Biology</option>
                    <option value="chemistry">Chemistry</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Semester - Section*</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="semesterSection">
                        <option value="1-1">Semester 1-1</option>
                        <option value="1-2">Semester 1-2</option>
                        <option value="2-1">Semester 2-1</option>
                        <option value="2-2">Semester 2-2</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Joined Academic Year*</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="academicYear">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Batch*</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="batch">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Class Roll No (unique)*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="rollNo">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Joined date*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="joinedDate">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Access No (Bio-Metric)*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="accessNo">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Admission No*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="admissionNo" value="">
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <button type="button" class="btn btn-primary btn-block" onclick="previous()">Previous</button>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-secondary btn-block" onclick="cancel()">Cancel</button>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-primary btn-block" onclick="next()">Next</button>
                    </div>
                  </div>
              </div>

            </div>
            <div class="tab-pane fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
              <!-- Transport Information Tab Content Here -->
              <div class="card">
                <div class="card-header">
                  Transport Section
                </div>
                <div class="container">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Transport*</label>
                    <div class="col-sm-9">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transportRadio" id="transportRadioYes" value="yes">
                        <label class="form-check-label" for="transportRadioYes">
                          Yes
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transportRadio" id="transportRadioNo" value="no">
                        <label class="form-check-label" for="transportRadioNo">
                          No
                        </label>
                      </div>
                    </div>
                  </div>
                  <div id="transportFields" style="display: none;">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Transport Type*</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="transportType">
                          <option value="pickupAndDrop">PickUp And Drop</option>
                          <option value="pickupOnly">PickUp Only</option>
                          <option value="dropOnly">Drop Only</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select PickUp Bus Stop*</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="pickupBusStop">
                          <option value="busStop1">Bus Stop 1</option>
                          <option value="busStop2">Bus Stop 2</option>
                          <option value="busStop3">Bus Stop 3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select PickUp Bus*</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="pickupBus">
                          <option value="bus1">Bus 1</option>
                          <option value="bus2">Bus 2</option>
                          <option value="bus3">Bus 3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select Drop Bus Stop*</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="dropBusStop">
                          <option value="busStop1">Bus Stop 1</option>
                          <option value="busStop2">Bus Stop 2</option>
                          <option value="busStop3">Bus Stop 3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select Drop Bus*</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="dropBus">
                          <option value="bus1">Bus 1</option>
                          <option value="bus2">Bus 2</option>
                          <option value="bus3">Bus 3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button type="button" class="btn btn-primary btn-block" onclick="previous()">Previous</button>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-secondary btn-block" onclick="cancel()">Cancel</button>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-primary btn-block" onclick="next()">Next</button>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="hostel" role="tabpanel" aria-labelledby="hostel-tab">
              <!-- Hostel Information Tab Content Here -->
              <div class="card">
              <div class="card-header">
                Hostel
                </div>
                <div class="container">
                <div class="card-body">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="">Hostel</label>
                    <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="hostel" id="hostel-yes" value="yes">
                      <label class="form-check-label" for="hostel-yes">
                        Yes
                      </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hostel" id="hostel-no" value="no" checked>
                    <label class="form-check-label" for="hostel-no">
                      No
                    </label>
                  </div>
                    </div>
                    </div>
                  <div id="hostel-fields" style="display: none;">
                    <div class="form-group">
                      <label for="mess-type">Mess Type:</label>
                      <select class="form-control" id="mess-type" name="mess-type">
                        <option value="">--Select Mess Type--</option>
                        <option value="veg">Vegetarian</option>
                        <option value="non-veg">Non-Vegetarian</option>
                        <option value="both">Both</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="room-type">Room Type:</label>
                      <select class="form-control" id="room-type" name="room-type">
                        <option value="">--Select Room Type--</option>
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="triple">Triple</option>
                      </select>
                    </div>
                  </div>
                    </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button type="button" class="btn btn-primary btn-block" onclick="previous()">Previous</button>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-secondary btn-block" onclick="cancel()">Cancel</button>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-primary btn-block" onclick="next()">Next</button>
                    </div>
              </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="educational" role="tabpanel" aria-labelledby="educational-tab">
          <!-- Educational Information Tab Content Here -->
          <div class="container">
          <div class="card">
  <div class="card-body">
  <div class="card-header">
                  Educational Background(you can add all level of education history in this section)
                </div>
            <div class="container">
            <form>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exam-type">Exam Type:</label>
                    <select class="form-control" id="exam-type" name="exam-type">
                      <option value="">--Select Exam Type--</option>
                      <option value="board">Primary Level Certificate</option>
                      <option value="university">Secondary Level Certificate</option>
                      <option value="university">O- Level Certificate</option>
                      <option value="university">A- Level Certificate</option>
                      <option value="university">Post Secondary Certificate</option>
                      <option value="university">Diploma</option>
                      <option value="university">Higher National Diploma</option>
                      <option value="university">Degree</option>
                      <option value="university">Masters</option>
                      <option value="university">Doctorate</option>
                      <option value="university">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exam-name">Exam Name:</label>
                    <input type="text" class="form-control" id="exam-name" name="exam-name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="register-exam-no">Register/Exam No:</label>
                    <input type="text" class="form-control" id="register-exam-no" name="register-exam-no">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="conducted-by-board">Conducted by/Board:</label>
                    <input type="text" class="form-control" id="conducted-by-board" name="conducted-by-board">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="year-of-passing">Year Of Passing:</label>
                    <input type="text" class="form-control" id="year-of-passing" name="year-of-passing">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="percentage">Percentage:</label>
                    <input type="text" class="form-control" id="percentage" name="percentage">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="score">Score:</label>
                    <input type="text" class="form-control" id="score" name="score">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="rank">Rank:</label>
                    <input type="text" class="form-control" id="rank" name="rank">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="institution-name">Institution Name:</label>
                    <input type="text" class="form-control" id="institution-name" name="institution-name">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="certificate">Certificate:</label>
                <input type="file" class="form-control-file" id="certificate" name="certificate">
              </div>

              <div class="row">
                <div class="col-md-4">
                  <button type="button" class="btn btn-primary btn-block">Previous</button>
                </div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-primary btn-block">Add More Educational Background</button>
                </div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-primary btn-block">Next</button>
                </div>
              </div>
            </form>
            </div>
            
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
  // Get the radio button elements
  const hostelYes = document.getElementById("hostel-yes");
  const hostelNo = document.getElementById("hostel-no");

  // Get the fields container element
  const hostelFields = document.getElementById("hostel-fields");

  // Add event listeners to the radio buttons
  hostelYes.addEventListener("click", function() {
    // Show the fields container
    hostelFields.style.display = "block";
  });

  hostelNo.addEventListener("click", function() {
    // Hide the fields container
    hostelFields.style.display = "none";
  });
  // Get a reference to the transport radio buttons and transport fields
const transportRadioYes = document.getElementById("transportRadioYes");
const transportFields = document.getElementById("transportFields");

// Add an event listener to the transport radio buttons
document.querySelectorAll('input[name="transportRadio"]').forEach((radio) => {
  radio.addEventListener("change", (event) => {
    // If the "Yes" radio button is checked, show the transport fields, otherwise hide them
    if (event.target.value === "yes") {
      transportFields.style.display = "block";
    } else {
      transportFields.style.display = "none";
    }
  });
});

</script>