
<!-- Button to open modal -->
<div class="row mt-3 mb-4">
  <div class="col-md-12">
    <button class="btn btn-warning" id="add-section-btn" data-toggle="modal" data-target="#add-section-modal">Add New Section</button>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add-section-modal" tabindex="-1" role="dialog" aria-labelledby="add-section-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-section-modal-label">Create New Section / Cohort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="section-name">Section / Cohort Name*</label>
            <input type="text" class="form-control" id="section-name" placeholder="Enter section name" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" onclick="document.getElementById('section-name').value='';">Clear</button>
        <button type="button" class="btn btn-success" onclick="saveSection()">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="col">
<div class="mt-4">
 <div class="card">
   <div class="card-body">
     <h5>SECTION</h5>
     <div class="container mt-4">
       <div class="table-responsive">
         <table class="table table-hover table-bordered">
             <thead>
                 <tr>
                     <th>S.No.</th>
                     <th>Section Name</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>1</td>
                     <td>1st Year</td>
                     <td>
                        <a href="#" class="text-danger mr-2"><i class="fas fa-trash"></i></a>
                        <a href="#" class="text-primary mr-2"><i class="fas fa-edit"></i></a>
                        <a href="#" class="text-info"><i class="fas fa-eye"></i></a>
                    </td>
                 </tr>
                 <tr>
                     <td>2</td>
                     <td>2nd Year</td>
                     <td>
                        <a href="#" class="text-danger mr-2"><i class="fas fa-trash"></i></a>
                        <a href="#" class="text-primary mr-2"><i class="fas fa-edit"></i></a>
                        <a href="#" class="text-info"><i class="fas fa-eye"></i></a>
                    </td>
                 </tr>
             </tbody>
         </table>
     </div>

     </div>
   </div>
 </div>
</div>
</div>