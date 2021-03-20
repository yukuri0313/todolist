@extends('layouts.shared')

@section('content')
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFC</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>
<body>
<header><i class="material-icons" style="margin-bottom: -3px;">list</i>Course List @ Hiyoshi Campus</header>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">講義</th>
            <th scope="col">担当教授</th>
            <th scope="col">単位数</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses3 as $course3)
                <tr>
                <th scope="row">・</th>
                <td>{{ $course3->lecture_name }}</td>
                <td>{{ $course3->professor_name }}</td>
                <td>{{ $course3->unit }}</td>
        @endforeach
        </tbody>
    </table>   
    </div>
</body>
</html>
@endsection

<style>
span {
    margin-left: 20px;
    margin-right: 20px;
}

.container {
    width: 30%;
    margin-top:30px;
}

header {
  font-family: 'Courier New', Courier, monospace;
  font-size: 30px;
  margin-left: 10%;
  margin-top: 30px;
}

.material-icons{
  display: inline-flex;
  vertical-align: middle;
  margin-top: -5px;
  margin-right: 20px;
  font-size: 50px;
  }
    
</style>