<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
        <title>授業検索</title>
    </head>
    <body>
        <header>授業検索</header>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="brown border p-2">授業検索</h3>
                    <form method="get" action="{{ route('post.search')}}">
                    <div class="mb-3">
                        <label for="lecture-name" class="form-label">講義名</label>
                        <input type="text" class="form-control" id="lecture-name" name="lecture" required>
                        @foreach($errors->all() as $message)
                        <div>{{ $message }}</div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="professor-name" class="form-label">教授名</label>
                        <input type="text" class="form-control" id="professor-name" name="professor">
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
                    <button type="submit" class="btn btn-primary">検索</button>
                    </form>
                </div>
                <div class="col-sm-8">
                <h3 class="brown border p-2">検索結果</h3>
                @if(session('registration_message'))
                <div class="alert alert-danger" role="alert">
                    <p>{{ session('registration_message') }}</p>
                </div>
                @endif
                
                @if(!empty($results)) 
                <div class="container">
                    @foreach($results as $result)
                    <div class="card">
                        <div class="card-header">{{ $result->lecture_name }}</div>
                        <div class="card-body">
                            担当教授：{{ $result->professor_name }}　単位数：{{ $result->unit }}　
                            <form method="post" action="{{ route('post.register', $result->id)}}">
                            @csrf
                            <button type="submit" class="btn btn-success">追加</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </body>
</html>                   
            