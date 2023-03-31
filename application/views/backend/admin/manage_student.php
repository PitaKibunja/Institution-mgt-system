<!-- <div class="row">
<div class="col-sm-12">



    </div> 
</div> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-eA6eXj/z0mtggvyD1hEZPW3zjENBMwtwsgB0oTbTUD7hTgDX1pylNWAaO+fz2Vh1c6Hu4gF7sUZnRdZcC7l9JQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-q5dFTXEjHmOT5a5hMUkzXWjKvCUEt7HOhhLScf0DgJl2Z+nH7IbRGn0X9E1kROvGX13oH+Fn0rsK8o7BoPMdYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container-fluid bg-light">
  <div class="row">
    <div class="col-12 text-center">
    <div class="container">
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4">
      <a href="#" class="btn btn-primary btn-lg btn-block">
        <i class="bi bi-person-plus"></i>
        Add new student
      </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <a href="#" class="btn btn-primary btn-lg btn-block">
        <i class="bi bi-grid-3x3-gap-fill"></i>
        Special categories
      </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <a href="#" class="btn btn-primary btn-lg btn-block">
        <i class="bi bi-journal-text"></i>
        Class/Course basis
      </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <a href="#" class="btn btn-primary btn-lg btn-block">
        <i class="bi bi-grid-3x3-gap-fill"></i>
        Special categories
      </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <a href="#" class="btn btn-primary btn-lg btn-block">
        <i class="bi bi-card-list"></i>
        Academic Year and Academic Term
      </a>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
      <a href="#" class="btn btn-primary btn-lg btn-block">
        <i class="bi bi-card-list"></i>
        Auto Generation
      </a>
    </div>
  </div>
</div>

</div>
    </div>
  </div>
  <div class="row">
  <div class="col-12 text-center">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Search student</h2>
        <form class="form-inline justify-content-center my-4" method="post" action="search_students.php">
  <div class="input-group">
    <input type="text" class="form-control py-3" name="search" placeholder="Search by student ID or name">
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit">
        <i class="fas fa-search"></i> Search
      </button>
    </div>
  </div>
</form>

        <?php
          // Get the search query from the form submission
          $search = $_POST['search'];

          // Connect to the database and retrieve matching student records
          // ... code to retrieve student details from the database ...

          // Display the search results in a table
          if ($num_results > 0) {
            echo "<h3 class='mt-4'>Search results:</h3>";
            echo "<table class='table'>";
            echo "<thead><tr><th>Student ID</th><th>Name</th><th>Email</th><th>Phone</th></tr></thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td></tr>";
            }
            echo "</tbody></table>";
          } else if (!empty($search)) {
            echo "<p class='mt-4'>No results found for '$search'</p>";
          }
        ?>
      </div>
    </div>
  </div>
</div>


  <div class="row">
    <div class="col-12 text-center">
    <div class="card">
  <div class="card-body">
    <form class="form-inline justify-content-end my-3">
      <div class="form-group">
        <label for="rowsPerPage" class="mr-2">Rows per page:</label>
        <select class="form-control" id="rowsPerPage">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="20">20</option>
        </select>
      </div>
      <div class="form-group mx-3">
        <input type="text" class="form-control" id="search" placeholder="Search by name or ID">
      </div>
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Admission No</th>
            <th>Access No (Bio-Metric)</th>
            <th>Student Name</th>
            <th>Class/Semester/Section</th>
            <th>Student Contact Tel</th>
            <th>Parent Contact Tel</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1001</td>
            <td>123456</td>
            <td>John Doe</td>
            <td>11th Grade - Section A</td>
            <td>555-1234</td>
            <td>555-5678</td>
            <td><button class="btn btn-primary">View Details</button></td>
          </tr>
          <!-- more rows here -->
        </tbody>
      </table>
    </div>
  </div>
</div>

    </div>
  </div>
</div>
