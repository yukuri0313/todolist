@extends('layouts.same')

@section('content')
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
            @foreach($takingclasses as $takingclass)
            <form method="post" action="{{ route('post.chat', $takingclass->course_id) }}">
            @csrf
            <div class="card card1">
                <div class="card-body">
                {{ $takingclass->course->lecture_name }}
                <hr>
                <button type="submit" class="btn btn-outline-dark .btn-sm">チャット画面へ</button>
                </div>
            </div>
            </form>
            @endforeach
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    {{ $course_name }}
                </div>
                <div class="card-body">
                    <div class="communication">
                        <div id="scroll-inner">
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
                        </div>
                    </div>
                <hr>
                <form method="post" action="{{ route('post.create', $coursechat->course_id) }}">
                @csrf
                    <input type="textarea" name="saying" placeholder="メッセージを入力" required>
                    <button type="submit" class="btn btn-primary .btn-sm rounded-circle p-0">➡︎</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let target = document.getElementById('scroll-inner');
    target.scrollIntoView(false);
</script>
</body>
</html>
@endsection