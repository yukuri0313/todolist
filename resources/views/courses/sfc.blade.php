<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFC</title>
</head>
<body>
@foreach($courses3 as $course3)
    {{ $course3->lecture_name }}
    @endforeach
</body>
</html>