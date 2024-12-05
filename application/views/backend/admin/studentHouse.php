<div class="row">
<div class="container shadow card mb-4">
  <div class="card-header">
  TODAY'S STUDENT MOVEMENT REQUESTS
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card-body">
        <div class="h-auto border-primary p-3">
          <div class="row justify-content-center">  
            <div class="table-responsive">        
                <input type="text" id="search" class="form-control mb-3 col-md-4" placeholder="Search">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th><strong><span style="font-family: Arial, sans-serif;">Class Name</span></strong></th>
                        <th><strong><span style="font-family: Arial, sans-serif;">Section Name</span></strong></th>
                        <th><strong><span style="font-family: Arial, sans-serif;">Student Id</span></strong></th>
                        <th><strong><span style="font-family: Arial, sans-serif;">Student Name</span></strong></th>
                        <th><strong><span style="font-family: Arial, sans-serif;">Requisition Date</span></strong></th>
                        <th><strong><span style="font-family: Arial, sans-serif;">fromTime</span></strong></th>
                        <th><strong><span style="font-family: Arial, sans-serif;">toTime</span></strong></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Class A</td>
                        <td>Section 1</td>
                        <td>001</td>
                        <td>John Smith</td>
                        <td>2023-04-01</td>
                        <td>09:00 AM</td>
                        <td>10:00 AM</td>
                    </tr>
                    <tr>
                        <td>Class B</td>
                        <td>Section 2</td>
                        <td>002</td>
                        <td>Jane Doe</td>
                        <td>2023-04-02</td>
                        <td>01:00 PM</td>
                        <td>02:00 PM</td>
                    </tr>
                    <tr>
                        <td>Class C</td>
                        <td>Section 3</td>
                        <td>003</td>
                        <td>Bob Johnson</td>
                        <td>2023-04-03</td>
                        <td>11:00 AM</td>
                        <td>12:00 PM</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>     
            </div>  
      </div>
    </div>
  </div>
</div>
<div class="container card mb-4">
<div class="card-header">
  RECORD STUDENT DAY ATTENDANCE
  </div>
<div class="h-100  border-primary shadow p-3">
                <div class="row justify-content-center">
                    <div class="col-md-6">                 
<div class="container">
            <form>
                <div class="mb-3">
                <label for="excel-file" class="form-label">Select Excel File *</label>
                <input type="file" class="form-control" id="excel-file" required>
                </div>
                <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="send-sms-notification">
                <label class="form-check-label" for="send-sms-notification">Send SMS Notification</label>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="submit">Upload</button>
                <a href="#" class="btn btn-outline-secondary">Download Excel</a>
                </div>
            </form>
           </div>
          </div>
        </div> 
        </div>
        </div>
</div>
                <div class="container card mb-4">
                <div class="card-header">
                RECORD STUDENT DAY ATTENDANCE
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="card-body">
                        <div class="h-auto border-primary p-3">
                        <div class="row justify-content-center">
                        <div class="container">
                <h3 class="text-center mb-4">Attendance Form</h3>
                <form>
                    <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="classSelect" class="form-label">Class*</label>
                        <select class="form-select form-control" id="classSelect" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Class 1</option>
                        <option>Class 2</option>
                        <option>Class 3</option>
                        </select>
                    </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="semesterSectionSelect" class="form-label">Semester-Section*</label>
                        <select class="form-select form-control" id="semesterSectionSelect" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Semester 1 - Section A</option>
                        <option>Semester 2 - Section B</option>
                        <option>Semester 3 - Section C</option>
                        </select>
                    </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="attendanceDate" class="form-label">Attendance Date*</label>
                        <input type="date" class="form-control" id="attendanceDate" required>
                    </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="attendanceTime" class="form-label">Attendance Time*</label>
                        <input type="time" class="form-control" id="attendanceTime" required>
                    </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="yes" id="smsNotification">
                        <label class="form-check-label" for="smsNotification">
                            Send SMS Notification
                        </label>
                        </div>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                    <div class="col-md-6">
                         <!-- Button to show attendance table -->
                    <button class="btn btn-primary me-md-2" type="button" onclick="showAttendanceTable()">Get Student List</button>
                    </div>
                    </div>
                </form>
                </div>
                
               


                    <!-- Attendance table (hidden by default) -->
                    <div id="attendanceTable" class="mt-3" >
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkAll"></th>
                            <th>Admission No</th>
                            <th>Roll No</th>
                            <th>Student Name (Access No)</th>
                            <th>Attendance</th>
                            <th>Attendance Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Sample data -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>123</td>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="attendance_123" id="attendance_123_present" value="present">
                                <label class="form-check-label" for="attendance_123_present">Present</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="attendance_123" id="attendance_123_absent" value="absent">
                                <label class="form-check-label" for="attendance_123_absent">Absent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="attendance_123" id="attendance_123_on_duty" value="on_duty">
                                <label class="form-check-label" for="attendance_123_on_duty">On Duty</label>
                            </div>
                            </td>
                            <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="attendance_type_123" id="attendance_type_123_half_day" value="half_day">
                                <label class="form-check-label" for="attendance_type_123_half_day">Half Day</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="attendance_type_123" id="attendance_type_123_full_day" value="full_day">
                                <label class="form-check-label" for="attendance_type_123_full_day">Full Day</label>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                    </table>

                    </div>
                    <div class="row justify-content-left">
                        <div class="col-md-6">
                            <!-- Button to show attendance table -->
                        <button class="btn btn-primary me-md-2" type="button" onclick="showAttendanceTable()"> Update Student Attendance</button>
                        </div>
                    </div>
          </div>
        </div>      
      </div>
    </div>
  </div>
</div>
</div>
