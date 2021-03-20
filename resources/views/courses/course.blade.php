@extends('layouts.shared')

@section('content')
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style5.css') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>授業一覧</title>
</head>
<body>
  <header><i class="material-icons" style="margin-bottom: -3px;">list</i>Course List</header>
  <section class="container">
    <div class="row">
      <div class="col-md-4">
      <form>
      <button data-hover="Click" type="submit"><div>日吉</div></button>
      </form>
      </div>
      <div class="col-md-4">
      <form>
      <button data-hover="Click" type="submit"><div>三田</div></button>
      </form>
      </div>
      <div class="col-md-4">
      <form>
      <button data-hover="Click" type="submit"><div>SFC</div></button>
      </form>
      </div>
    </div>
  </section>
</body>
</html>
@endsection