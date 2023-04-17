<div class="container card mb-4">
    <div class="card-header">
        <h5>CONFIGURE CLASS AND SEMESTER WITH CO-ORDINATOR</h5>
        <p>(To Modify Coordinator, delete existing and then add new coordinator)</p>
        <div class="row justify-content-end">
        <div class="col-md-6">
  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create new class and config class with department</button>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Create New Class and Config Class With Department</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="class">Class *</label>
            <input type="text" class="form-control" id="class" placeholder="Enter class">
          </div>
          <div class="form-group">
            <label for="department">Department *</label>
            <input type="text" class="form-control" id="department" placeholder="Enter department">
          </div>
          <div class="form-group">
            <label for="course-type">Course Type</label>
            <input type="text" class="form-control" id="course-type" placeholder="Enter course type">
          </div>
          <div class="form-group">
            <label for="course-category">Course Category</label>
            <input type="text" class="form-control" id="course-category" placeholder="Enter course category">
          </div>
          <div class="form-group">
            <label for="date-of-establishment">Date of Establishment</label>
            <input type="date" class="form-control" id="date-of-establishment">
          </div>
          <div class="form-group">
            <label for="estd-academic-year">Estd. Academic Year</label>
            <input type="text" class="form-control" id="estd-academic-year" placeholder="Enter estd. academic year">
          </div>
          <div class="form-group">
            <label for="seats">Seats</label>
            <input type="number" class="form-control" id="seats" placeholder="Enter number of seats">
          </div>
        </form>
        <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Clear</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

    </div>
        <div class="row">
         <div class="col-md-12">
            <div class="card-body">
             <div class="row justify-content-center">
                <div class="ma-2">
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
                        <label for="semester">Semester *</label>
                        <select class="form-select form-control" id="semester" required>
                            <option value="">Select Semester</option>
                            <option value="semester1">Semester 1</option>
                            <option value="semester2">Semester 2</option>
                            <option value="semester3">Semester 3</option>
                        </select>
                    </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="section">Section *</label>
                        <select class="form-select form-control" id="section" required>
                            <option value="">Select Section</option>
                            <option value="sectionA">Section A</option>
                            <option value="sectionB">Section B</option>
                            <option value="sectionC">Section C</option>
                        </select>
                       </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <label for="coordinator">Co-ordinator *</label>
                        <select class="form-select form-control" id="coordinator" required>
                            <option value="">Select Co-ordinator</option>
                            <option value="coordinator1">Co-ordinator 1</option>
                            <option value="coordinator2">Co-ordinator 2</option>
                            <option value="coordinator3">Co-ordinator 3</option>
                        </select>
                    </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                    <div class="col-md-6">
                        <button class="btn btn-secondary  me-md-2">Cancel</button>
                        <button class="btn btn-primary  me-md-2">Save</button>
                        </div>
                    </div>
                </form>
                </div>
                
               


                

</div>
</div>
<div class="container card mb-4">
<table class="table">
  <thead>
    <tr>
      <th class="text-center">CLASS</th>
      <th class="text-end"><input type="text" placeholder="Search"></th>
    </tr>
    <tr>
      <th class="text-center">S.No.</th>
      <th class="text-center">Class</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="text-center">1</td>
      <td class="text-center">Class 1</td>
      <td class="text-center">
        <button class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="text-center">2</td>
      <td class="text-center">Class 2</td>
      <td class="text-center">
        <button class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="text-center">3</td>
      <td class="text-center">Class 3</td>
      <td class="text-center">
        <button class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
</table>


</div>
</div>
<div class="container card mb-4">
<div class="container">
  <h2>CLASS AND SEMESTER WITH CO-ORDINATOR</h2>
  <div class="row mt-3">
    <div class="col-md-4 offset-md-8">
      <input type="text" class="form-control" placeholder="Search">
    </div>
  </div>
  <table class="table table-bordered table-striped mt-3">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Class</th>
        <th>Semester</th>
        <th>Section</th>
        <th>Co-ordinator</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Integrated Theology Program (BTh)</td>
        <td>Semester 1</td>
        <td>1st Year</td>
        <td>Anil Gupta</td>
        <td><button class="btn btn-primary">Edit</button></td>
      </tr>
    </tbody>
  </table>
</div>


</div>
</div></div></div></div>