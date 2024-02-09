<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand navbar-light bg-warning fixed-top">
      <div class="container-fluid">
        <p class="text-center">
        <h1 class="navbar-brand" href="#">{{ $title }}</h1>
        </p>
      </div>
    </nav>

    <br><br><br>
    <h3>{{$small_text}}</h3>
    <br><br>

    <div class="row">
    @foreach ($items as $item)

    <div class="card col-3">
      <img src="{{ $item['img'] }}" class="card-img-top" alt="{{ $item['title'] }}">
      <div class="card-body">
        <h5 class="card-title">{{ $item['title'] }}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{ $item['url'] }}" target="_blank" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </div>
</body>

</html>