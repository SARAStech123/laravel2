<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css1/stylehome.css">
</head>
<body>
    @include('header')
<form action="{{ route('admin.about.update') }}" method="POST">
    @csrf
    @method('PUT')

    <textarea name="content" rows="5">{{ $aboutPage ? $aboutPage->content : '' }}</textarea>
    

    <button type="submit">Update</button>
</form>
</body>
<footer>@include('footer')</footer>
</html>