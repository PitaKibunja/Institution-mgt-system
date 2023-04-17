<div class="container card mb-4">
                <div class="card-header">
                STUDENT DETAILS
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