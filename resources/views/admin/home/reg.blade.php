<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	@csrf
<form action="key" method="post"  enctype="multipart/form-data">
	@csrf
<label> Key</label>
<input type="text" name="key"><br>
<label>Heading</label>
<input type="text" name="heading"><br>
<label>Body</label>
<input type="text" row="5" name="body"><br>
<label> 1st Slide image </label>
<input type="file" name="slide1"><br>
<label> 2nd Slide image </label>
<input type="file" name="slide2"><br>
<label> 3rd Slide image </label>
<input type="file" name="slide3"><br>
<label> home image </label>
<input type="file" name="image">
<button type="submit">submit</button>


</form>

</body>
</html>