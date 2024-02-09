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

    @foreach ($items as $item)
    <a href="{{ $item['url'] }}" target="_blank">aaa</a>
    <div>{{ $item['title'] }}</div>
    <img src="{{ $item['img'] }}">
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </div>
</body>

</html>