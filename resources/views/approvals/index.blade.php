@if(Session()->has('Email'))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approvals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

@include('header')

<div class="container">
    <h2 class="text-center">Approvals</h2>
    @if($users->isEmpty())
        <p>No pending or rejected approvals found.</p>
    @else
        @foreach($users as $approval)
            <div class="border p-5">
                <h3><b>School Name:</b> {{ $approval->SName }}</h3>
                <p>Status: {{ $approval->approved }}</p>
                <form action="{{ route('approvals.update', $approval) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="form-check">
                            <input type="radio" name="approved" value="approved" {{ $approval->approved === 'approved' ? 'checked' : '' }} class="form-check-input" required>
                            <label class="form-check-label">Approve</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="radio" name="approved" value="rejected" {{ $approval->approved === 'rejected' ? 'checked' : '' }} class="form-check-input" required>
                            <label class="form-check-label">Reject</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        @endforeach
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
@else
    <p>Only Admin Can Access This Page.</p>
@endif
