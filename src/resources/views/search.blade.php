<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="p-3 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-3">
      
      <h1><center>{{ $title}}</center></h1>
    </div>

    <br><br>
    <h3>{{$small_text}}</h1>
      <br>
      <h4>{{$pet['title']}}</h4>
      <select class="form-select" name="nnnnn" id="nnnnn">
        <option selected disabled>選択してください</option>
        @foreach ($pet['list'] as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
      </select>
      <br><br>
      <h4>{{$genre['title1']}}</h4>
      
      <select class="form-select" name="nnnnn" id="nnnnn">
        <option selected disabled>選択してください</option>
        @foreach ($genre['list1'] as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
      </select>
      <br><br>
      <h4>{{ $genre['many']['title'] }}</h1>
        <select class="form-select" name="nnnnn" id="nnnnn">
          @foreach ($genre['many']['list1'] as $many)
          <option value="{{ $many }}">{{ $many->getName() }}</option>
          @endforeach
        </select>
        <br><br>
        <h1>{{$search_text}}</h1>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
          crossorigin="anonymous"></script>
  </div>
</body>

</html>