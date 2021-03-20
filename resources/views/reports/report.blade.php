@extends('layouts.similar')

@section('content')
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>レポート管理</title>
</head>
<body>
<header><i class="material-icons" style="margin-bottom: -3px;">schedule</i>To do List</header>
<h3 style="text-align: center; margin: 50px; font-family: 'Courier New', Courier, monospace;">Uncompleted Report</h3>
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
                @if ( $date < $uncompletedreport->deadline && $uncompletedreport->deadline < $dead )
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
<h3 style="text-align: center; margin: 50px; font-family: 'Courier New', Courier, monospace;">Completed Report</h3>
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
                <th scope="row">・</th>
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
@endsection

<style>
    header {
  font-family: 'Courier New', Courier, monospace;
  font-size: 30px;
  margin-left: 10%;
  margin-top: 30px;
  margin-bottom: 40px;
}

.material-icons{
  display: inline-flex;
  vertical-align: middle;
  margin-top: -5px;
  margin-right: 20px;
  font-size: 50px;
  }

</style>