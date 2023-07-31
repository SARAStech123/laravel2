<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	   <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <style>
  .footer {
    background-color: #f8f9fa;
    color: #333;
    padding: 20px 0;
  }
</style>
</head>
<body>
<footer class="footer">
  <div class="container">
    <div class="row text-start">
      <div class="col-lg-3">
        <h4>School Education Department</h4>
        <ul class="list-unstyled">
          <li>@if(!(Session()->has('Email') || Session()->has('SEmail')))
            <a href="http://127.0.0.1:8000/" class="nav-link">Home</a>@endif</li>
          <li>@if(Session()->has('Email') || Session()->has('SEmail'))
           <a href="http://127.0.0.1:8000/Dashboard" class="nav-link">Homepage</a>
           @endif
         </li>
          <li><a href="http://127.0.0.1:8000/about" class="nav-link">About</a></li>
          <li><a href="http://127.0.0.1:8000/notices" class="nav-link">Notices</a></li>
          <li><a href="http://127.0.0.1:8000/public" class="nav-link">School information</a></li>
        </ul>
      </div>
      @if(Session()->has('Email') || Session()->has('SEmail'))
      <div class="col-lg-3">
        <h4>School Education Department</h4>
        <ul class="list-unstyled">
          <li>
            @if(Session()->has('Email'))
            <a href="http://127.0.0.1:8000/notices/create" class="nav-link">Add Notices</a>@endif</li>
          <li>
            @if(Session()->has('Email') || Session()->has('SEmail'))
            <a href="http://127.0.0.1:8000/index" class="nav-link">School Form</a>
            @endif
          </li>
          <li>
            @if(Session()->has('Email'))
            <a href="http://127.0.0.1:8000/approvals" class="nav-link">Approvals</a>
            @endif
          </li>
          <li>
            @if(Session()->has('Email'))
            <a href="http://127.0.0.1:8000/admin/dashboard" class="nav-link">Add School</a>
            @endif
          </li>
          <li>
            @if(Session()->has('Email'))
            <a href="http://127.0.0.1:8000/admin/AdminDashboard" class="nav-link">Dashboard</a>
            @endif
          </li>
        </ul>
      </div>@endif
      <div class="col-lg-3"> <!-- Updated class: text-center -->
        <h4>Contact</h4>
        <ul class="list-unstyled">
          <li>
            <i class="bi bi-envelope"></i> example@example.com
          </li>
          <li>
            <i class="bi bi-phone"></i> +1 123 456 7890
          </li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h4>Follow Us</h4>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">
              <i class="bi bi-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="bi bi-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="bi bi-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>


</body>
</html>