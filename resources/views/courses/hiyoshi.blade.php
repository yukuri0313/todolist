<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日吉</title>
</head>
<body>
    @foreach($courses as $course)
    {{ $course->lecture_name }}
    @endforeach
</body>
</html>