<!DOCTYPE html>
<html>
<title>School Login</title>
<link rel="icon" type="image/x-icon" href="https://e7.pngegg.com/pngimages/710/665/png-clipart-computer-icons-user-profile-symbol-register-button-miscellaneous-blue.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
  @include('header')
  @if($errors->any())
  <div style="color:red">
    <ul>{{$errors}}
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="container">
  <div>
      <center>
        @include('dropbtn')
      </center>
    </div><br>
  <p class="text-center">Enter your account</p>
      <div class="row">
        <div class="col-md-6 offset-md-3">
  <div class="border p-5">
  <form action="/scllogin" method="POST" id="admin-form">
    @csrf
    <div class="form-group">
      <label for="SEmail"><b>Email</b></label>
      <input type="text" name="SEmail" class="form-control" required="">
    </div>
    <div class="form-group">
      <label for="SPassword"><b>Password</b></label>
      <input type="password" name="SPassword" class="form-control" required="">
    </div>
    <button class="btn btn-primary">Submit</button>
  </form>
  </div>
  </div>
</div>
</div>
</body>
</html>
