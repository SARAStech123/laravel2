<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Home Update</h1>
<form method="get" action="AdminHome">
	@csrf
	<label for="title">Update Heading</label>
	<input type="text" name="Heading" required><br>
	<label>Update text</label>
    <input type="text" name="text"><br>
    <label>Slide 1</label>
    <input type="file" name="slide1"><br>
    <label>Slide 2</label>
    <input type="file" name="slide2"><br>
    <label>Slide 3</label>
    <input type="file" name="slide3"><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>