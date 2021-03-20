@extends('layouts.same')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title>授業検索</title>
    </head>
    <body>
        <header><i class="material-icons" style="margin-bottom: -3px;">search</i>Search and Register Courses</header>
        <div class="container" style="margin-top:50px;">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Search</h3>
                    <hr>
                    <form method="get" action="{{ route('post.search')}}">
                    <div class="mb-3">
                        <label for="lecture-name" class="form-label">講義名</label>
                        <input style="border-right:none; border-left:none; border-top:none; border-radius:0px; outline:none;" type="text" class="form-control" id="lecture-name" name="lecture" required>
                        @foreach($errors->all() as $message)
                        <div>{{ $message }}</div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="professor-name" class="form-label">教授名</label>
                        <input style="border-right:none; border-left:none; border-top:none; border-radius:0px; outline:none;" type="text" class="form-control" id="professor-name" name="professor">
                    </div>
                    <div class="mb-3">
                        <label for="campus" class="form-label">設置キャンパス</label>
                        <select id="campus" class="form-select" aria-label="Default select example" name="campus">
                            <option value="指定なし">指定なし</option>
                            <option value="日吉">日吉</option>
                            <option value="三田">三田</option>
                            <option value="SFC">湘南藤沢</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">Search</button>
                    </form>
                </div>
                <div class="col-sm-8">
                <h3><i class="material-icons" style="margin-bottom: -3px;">receipt</i>Results</h3>
                <hr>
                @if(session('registration_message'))
                <div class="alert alert-danger" role="alert">
                    <p>{{ session('registration_message') }}</p>
                </div>
                @endif
                
                @if(!empty($results)) 
                <div class="container">
                    @foreach($results as $result)
                    <form method="post" action="{{ route('post.register', $result->id)}}">
                    @csrf
                    <div class="case">
                    <span class="notice">{{ $result->lecture_name }}</span>
                    <span class="notice">{{ $result->professor_name }}</span>
                    <span class="notice">{{ $result->unit }}単位</span>
                    <button type="submit" class="btn btn-outline-dark">Register</button>
                    </form>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </body>
</html>                   
@endsection   