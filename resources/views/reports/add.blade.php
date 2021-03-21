<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/style3.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>レポート追加</title>
</head>
<body>
<div class="container">
    <form method="post" action="{{ route('post.add', $addedreportsids) }}" class="row g-3 border border-3 rounded-3"> 
    @csrf
        <div class="title">
        <header><i class="material-icons" style="margin-bottom: -3px;">add_box</i>Add the Report</header>
        </div>
        <div class="col-md-6">
            <label for="lecture_name" class="form-label">講義名</label>
            <input type="text" name="course_name" class="form-control" id="lecture_name" value="{{ $addedreports }}" readonly>
        </div>
        <div class="col-md-6">
            <label for="report_name" class="form-label">レポート名<span class="must">必須</span></label>
            <input type="text" name="report_name" class="form-control" id="report_name" required>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
            <textarea class="form-control" name="outline" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">レポートの概要や備考を入力してください。<span class="optional">任意</span></label>
            </div>
        </div>
        <div class="col-md-6">
            <label for="words" class="form-label">文字数<span class="optional">任意</span></label>
            <input type="text" name="words" class="form-control" id="words" placeholder="（例）1000">
        </div>
        <div class="col-md-6">
            <label for="deadline" class="form-label">締め切り<span class="must">必須</span></label>
            <input type="datetime-local" name="deadline" class="form-control" id="deadline" required>
        </div>
        <div style="text-align:center; margin-top: 50px">
            <button type="submit" class="btn btn-light">追加する</button>
    </form>
</div>
</body>
</html>