<!-- resources/views/file/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>File Details</title>
</head>
<body>
    @csrf
    <h1>File Details</h1>
    
    <p>File Name: {{ $file->name }}</p>
    <p>File Size: {{ $file->size }}</p>
    <!-- Display other file details as needed -->
    
    <form method="POST" action="/file/{{ $file->id }}/approve">
        @csrf
        <button type="submit">Approve</button>
    </form>

    <form method="POST" action="/file/{{ $file->id }}/decline">
        @csrf
        <button type="submit">Decline</button>
    </form>
</body>
<br>
<footer>@include('footer')</footer>
</html>
