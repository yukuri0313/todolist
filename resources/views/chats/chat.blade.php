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
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    {{ $course_name }}
                </div>
                <div class="card-body">
                @foreach($coursechats as $coursechat)
                    @if ( $coursechat->user_id == $speaker )
                    <div class="myname">自分</div>
                    <div class="mycomment">{{ $coursechat->statement }}</div>  
                    <div class="time">　　{{ $coursechat['created_at']->format('n/j/H:i') }}</div>
                    @else
                    <div class="name">{{ $coursechat->user->name }}</div>
                    <div class="statement">{{ $coursechat->statement }}</div>
                    <div class="time">　　{{ $coursechat['created_at']->format('n/j/H:i') }}</div>
                    @endif
                @endforeach
                <hr>
                <form method="post">
                @csrf
                    <input type="textarea" name="saying" placeholder="メッセージを入力">
                    <button type="submit" class="btn btn-primary">送信</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>