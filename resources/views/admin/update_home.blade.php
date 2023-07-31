<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Home page</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/stylehome.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
  
   	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
  /* Custom CSS styles */
  .custom-img {
    width: 50%;
    height: auto;
    margin-bottom: 10px;


  }
  .container{

  	align-items: center;
  	border: 1px solid black;
  }
</style>

  
</head>
<body>
	@csrf
	<div class="heading">
	<a><h2>शालेय शिक्षण व क्रीडा विभाग- महाराष्ट्र</h2>
    <h4>School and Sports Education Department- Maharashtra</h4><hr>  </a><!--<h5>(ठाणे,मुंबई शहर,पालघर,रायगड)<br>(Thane,Mumbai City,Palghar,Raigad)</h5>   <hr>  </a>-->
  </div>
  @include('header')
 <br><br>
<div class="container">
  <h1></h1>
  <form action="update_home" method="post" enctype="multipart/form-data" id="myForm">
    @csrf
    
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="slide1" class="form-label">Slide 1</label>
          <img src="{{ asset('img/' . $user[0]->slide1) }}" class="d-block img-thumbnail" height="200px" width="200px" alt="Slide 1">
          <input type="file" name="slide1" class="form-control">
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="mb-3">
          <label for="slide2" class="form-label">Slide 2</label>
          <img src="{{ asset('img/' . $user[0]->slide2) }}" class="d-block img-thumbnail" height="200px" width="200px" alt="Slide 2">
          <input type="file" name="slide2" class="form-control">
        </div>
      </div>
    </div>
   <div class="row">
   <div class="col-md-6">   
    <div class="mb-3">
      <label for="slide3" class="form-label">Slide 3</label>
      <img src="{{ asset('img/' . $user[0]->slide3) }}" class="d-block img-thumbnail" height="200px" width="200px" alt="Slide 3">
      <input type="file" name="slide3" class="form-control">
    </div></div>
    <div class="col-md-6">
    	<div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <img src="{{ asset('img/' . $user[0]->image) }}" class="d-block img-thumbnail" height="200px" width="200px" alt="Image">
      <input type="file" name="image" class="form-control">
    </div>
   </div>
  </div>
 
    <div class="mb-3">
      <label for="heading" class="form-label">Heading</label>
      <input type="text" name="heading" value="{{$user[0]->heading}}" class="form-control">
    </div>
   
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea name="body" rows="10" class="form-control">{{$user[0]->body}}</textarea>
    </div>
  
    <div class="mb-3">
      <label for="author" class="form-label">Author</label>
      <input type="text" name="author" value="{{$user[0]->author}}" class="form-control">
    </div>
   
    <div class="mb-3">
      <label for="card_title" class="form-label">Card Title</label>
      <input type="text" name="card_title" value="{{$user[0]->card_title}}" class="form-control">
    </div>
  
    <div class="mb-3">
      <label for="card_body" class="form-label">Card Body</label>
      <input type="text" name="card_body" value="{{$user[0]->card_body}}" class="form-control">
    </div>
       
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script >
	
<script>
  // Clear file input fields if no file is chosen
  document.getElementById('myForm').addEventListener('submit', function() {
    var fileInputs = document.querySelectorAll('input[type="file"]');
    
    fileInputs.forEach(function(input) {
      if (input.files.length === 0) {
        input.value = '';
      }
    });
  });
</script>
</script>
</body>
</html>