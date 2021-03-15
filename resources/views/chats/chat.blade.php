<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">

    <title>チャット画面</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    {{ $course_name }}
                </div>
                <div class="card-body">
                @foreach($coursechats as $coursechat)
                    <div class="name">{{ $coursechat->user->name }}</div>
                    @if ( $coursechat->user_id == $speaker )
                    <div class="mycomment">{{ $coursechat->statement }}</div>  
                    <div class="time">　　/{{ $coursechat->created_at }}</div>
                    @else
                    <div class="statement">{{ $coursechat->statement }}</div>
                    <div class="time">　　/{{ $coursechat->created_at }}</div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>