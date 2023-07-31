<!--<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  @csrf

<div class="header">
  <a href="Dashboard" class="logo" style="color:black;">HOME</a>
  <div class="header-right">
      <a href="about">About</a>
      @if(Session()->has('Email'))
      <a href="project">Project</a>
      @endif
      <a href="services">Services</a>
      <a href="plans&pricing">Plans & Pricing</a>
      @if(Session()->has('Email'))
      <a href="index">SED</a>
      @endif
      <a href="contact">Contact-Us</a>
      @if(Session()->has('Email'))
      <a href="/logout">Logout</a>
      @endif
      @if(!Session()->has('Email'))
      <a href="signin">Signin</a>
      @endif
      
     
     
  </div>
</div>

</body>
</html>-->
<!--
@if(Session()->has('Email'))
<h1>Hello, {{session('Email');}} you are logged in !</h1><hr>
@endif-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Education Departement</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/stylehome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
<style>
  .btn-spacing {
    margin-right: 10px; /* Adjust the margin value as per your preference */
  }
</style>


</head>
<body>

  @csrf
  <div class="heading">
   <center><a><h2>School and Sports Education Department- Maharashtra</h2>
    <!--<h4>School and Sports Education Department- Maharashtra</h4>--><hr>  </a></center> <!--<h5>(ठाणे,मुंबई शहर,पालघर,रायगड)<br>(Thane,Mumbai City,Palghar,Raigad)</h5>   <hr>  </a>-->
 </div>

 
 <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #e3f2fd; ">
      
       
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
          <li class="nav-item">
            @if(!(Session()->has('Email') || Session()->has('SEmail')))
              <a class="btn btn-primary" href="http://127.0.0.1:8000/">Homepage</a>
            @endif
          </li>
          <li class="nav-item active">
            @if(Session()->has('Email') || Session()->has('SEmail'))
           <a class="btn btn-primary" href="http://127.0.0.1:8000/Dashboard">Homepage</a>
           @endif
          </li>
          <li class="nav-item">
           <a class="nav-link" href="{{ URL::to('about') }}">About</a>
          </li>
          <li class="nav-item">
          <!-- <a class="nav-link" href="#">News</a>-->
          </li>
          <li class="nav-item">
           <a class="nav-link" href="http://127.0.0.1:8000/notices">Notices</a>
          </li>
          <li class="nav-item">
            
           <a class="nav-link" href="http://127.0.0.1:8000/public">School information</a>
           

          <li class="nav-item">
            @if(Session()->has('Email'))
           <a class="nav-link" href="http://127.0.0.1:8000/notices/create">Add Notices </a>
           @endif
          </li>
          <li class="nav-item">
            @if(Session()->has('Email') || Session()->has('SEmail'))
           <a class="nav-link" href="http://127.0.0.1:8000/index">School Form</a>
           @endif
          </li>
          <li class="nav-item">
            @if(Session()->has('Email'))
           <a class="nav-link" href="http://127.0.0.1:8000/approvals">Approvals </a>
           @endif
          </li>
          <li class="nav-item">
            @if(Session()->has('Email'))
           <a class="nav-link" href="http://127.0.0.1:8000/admin/dashboard">Add School </a>
           @endif
          </li>
          <li class="nav-item">
            @if(Session()->has('Email'))
           <a class="nav-link" href="http://127.0.0.1:8000/admin/AdminDashboard">Dashboard</a>
           @endif
          </li>
        </ul></div>
        <ul class="navbar-nav" style="float: right">
    
          @if(Session()->has('Email') || Session()->has('SEmail'))
          <li class="nav-item">
              <img src="{{ asset('SchoolDepartmentPublic/img/login1.png') }}" style="width:30px; height:30px;" alt="login logo">
              {{Session('AN')}} {{Session('SN')}}
              <a class="btn btn-primary" href="/logout">Logout </a>
            </li>
              @endif

          @if(!(Session()->has('Email') || Session()->has('SEmail')))
            <li class="nav-item">
              <a class="btn btn-primary btn-spacing" href="http://127.0.0.1:8000/signin">Login </a>
            </li><br>
            <li class="nav-item">
              <a class="btn btn-primary" href="http://127.0.0.1:8000/create">Register </a>
            </li>
              <!--<div class="container">
              <select id="linkSelector" class="form-control" onchange="navigateToLink()">
                <option value="">Login</option>
                <option value="http://127.0.0.1:8000/create">School Register</option>
                <option value="http://127.0.0.1:8000/create">Admin Register</option>
                <option value="http://127.0.0.1:8000/scllogin">School Login</option>
                <option value="http://127.0.0.1:8000/signin">Admin Login</option>
              </select>
              </div>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                <script>
                  function navigateToLink() {
                    var selectElement = document.getElementById("linkSelector");
                    var selectedLink = selectElement.value;
      
                    if (selectedLink !== "") {
                      window.location.href = selectedLink;
                    }
                  }
                </script>-->
              @endif
          </li></ul>
          
  </nav> <hr><br><br>



 
</body>
</html>

