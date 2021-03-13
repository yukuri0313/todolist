<!DOCTYPE html
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    <title>マイページ</title>
</head>
<body>
<header style="text-align: center; margin-bottom: 50px;">レポート管理</header>
<div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">講義</th>
            <th scope="col">レポート名</th>
            <th scope="col">概要</th>
            <th scope="col">文字数</th>
            <th scope="col">締め切り</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($uncompletedreports as $uncompletedreport)
                <tr>
                <th scope="row">・</th>
                <td>{{ $uncompletedreport->course->lecture_name }}</td>
                <td>{{ $uncompletedreport->name }}</td>
                <td>{{ $uncompletedreport->outline }}</td>
                <td>{{ $uncompletedreport->words }}</td>
                @if ( $uncompletedreport->deadline < $dead )
                <td style="color: red;">{{ $uncompletedreport->deadline }}</td>
                @else
                <td>{{ $uncompletedreport->deadline }}</td>
                @endif
                <td>
                    <form method="post" action="{{ route('post.complete', $uncompletedreport->id ) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">提出完了</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<header style="text-align: center; margin: 50px;">提出済レポート</header>
<div class="container">
<table class="table">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">講義</th>
            <th scope="col">レポート名</th>
            <th scope="col">概要</th>
            <th scope="col">文字数</th>
            <th scope="col">締め切り</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($donereports as $donereport)
                <tr>
                <th scope="row">1</th>
                <td>{{ $donereport->course->lecture_name }}</td>
                <td>{{ $donereport->name }}</td>
                <td>{{ $donereport->outline }}</td>
                <td>{{ $donereport->words }}</td>
                <td>{{ $donereport->deadline }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>