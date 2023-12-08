<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>{{ $title }}</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
<h1>{{$search_text}}</h1>
<h1>{{$small_text}}</h1>
<h4>{{$pet['title']}}</h4>
<select class="form-select" name="nnnnn" id="nnnnn">
  <option selected disabled>選択してください</option>
  @foreach ($pet['list'] as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
</select>
<h1>{{$genre}}</h1>
<h1>{{$many}}</h1>