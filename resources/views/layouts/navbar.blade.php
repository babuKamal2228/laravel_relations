
{{-- <nav  class="navbar navbar-expand navbar-dark">
    <div class="col-md-3 logo">
                            <h5> S-M-S</h5>
                        </div>
    <div class="container navcontainer">
        <a class ="navbar-brand fw-bold dark" href="">Home</a>
         <a class ="navbar-brand fw-bold" href="">About</a>
          <a class ="navbar-brand fw-bold" href="">Help</a>
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
  <div class="container">
    <a class="navbar-brand"  href={{ route('home')}} >📘 StudentMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navBarMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="students.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_student.php">Add Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
