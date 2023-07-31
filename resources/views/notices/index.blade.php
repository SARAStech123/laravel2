<!DOCTYPE html>
<html>
<head>
    <title>Notice Board</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="https://w7.pngwing.com/pngs/574/969/png-transparent-computer-icons-icon-design-notice-board-angle-text-black.png">

</head>
@include('header')
<body>
    <div class="container">
        <h1 class="h1">Notice Board</h1>
        <!--<a href="{{ route('notices.create') }}" class="btn btn-primary my-3">Create New Notice</a>-->

        @foreach ($notices as $notice)
            <div class="card mb-3">
               <marquee direction = "up" scrollamount="2" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
                <div class="card-body">
                    <p class="card-text">{{ $notice->created_at->format('Y-m-d') }}</p>
                    <h3 class="card-title">{{ $notice->title }}</h3>
                    <p class="card-text">{{ $notice->content }}</p>

                </div></marquee>
            </div>
        @endforeach
    </div>
    <hr>
    @include('footer')
</body>
</html>
