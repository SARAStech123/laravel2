<!--<!DOCTYPE html>
<html>
<title>upload</title>
<link rel="icon" type="image/x-icon" href="https://e7.pngegg.com/pngimages/710/665/png-clipart-computer-icons-user-profile-symbol-register-button-miscellaneous-blue.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>
    <div class="container">
<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" class="form-control" multiple="multiple"><br>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>
</div>
</body>

</html>-->
<!DOCTYPE html>
<html>
<head>
    <title>Upload Page</title>
</head>
<body>
    <h1>Upload Page</h1>
    @if(session('success'))
    <div>{{ session('success') }}</div>
@elseif(session('error'))
    <div>{{ session('error') }}</div>
@endif
    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
        @csrf

        <p>Do you want to upload a file?</p>
        <label for="yesOption">
            <input type="radio" id="yesOption" name="uploadOption" value="yes" required> Yes
        </label>
        <label for="noOption">
            <input type="radio" id="noOption" name="uploadOption" value="no" required> No
        </label>
        <br>
        <br>
        <div id="uploadField" style="display: none;">
            <input type="file" name="file" required>
        </div>
        <br>
        <button type="submit">Upload File</button>
    </form>

    <script>
        document.querySelector('input[name="uploadOption"]').addEventListener('change', function() {
            var uploadField = document.getElementById("uploadField");
            uploadField.style.display = this.value === "yes" ? "block" : "none";
        });
    </script>
</body>
</html>

