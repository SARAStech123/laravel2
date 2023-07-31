<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/stylehome.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 

</head>
<body>
@include('header')
<form action="{{ route('admin.home.update') }}" method="POST">
    @csrf
    @method('PUT')

    <textarea name="content" rows="5">{{ $homePage ? $homePage->content : '' }}</textarea>

    

    <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>