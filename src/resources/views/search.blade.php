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
    <nav class="navbar navbar-expand navbar-light bg-warning fixed-top">
      <div class="container-fluid">
        <p class="text-center">
        <h1 class="navbar-brand" href="#">{{ $title }}</h1>
        </p>
      </div>
    </nav>

    <h3 class="mt-4">{{$small_text}}</h3>
      <form action="{{ url('/result')}}" method="get" class="mt-1 form-horizontal">
        <h4>{{$pet['title']}}</h4>
        <select class="form-select" name="nnnnn" id="nnnnn">
          <option selected disabled>選択してください</option>
          @foreach ($pet['list'] as $key => $value)
          <option value="{{ $key }}">{{ $value }}</option>
          @endforeach
        </select>

        <h4 class="mt-2">{{$genre['title1']}}</h4>
        <select class="form-select" name="nnnnn" id="nnnnn">
          <option selected disabled>選択してください</option>
          @foreach ($genre['list1'] as $key => $value)
          <option value="{{ $key }}">{{ $value }}</option>
          @endforeach
        </select>

        <h4 class="mt-2">{{ $genre['many']['title'] }}</h1>
          <select class="form-select" name="nnnnn" id="nnnnn">
            @foreach ($genre['many']['list1'] as $many)
            <option value="{{ $many }}">{{ $many->getName() }}</option>
            @endforeach
          </select>

        <div class="text-end mt-2">
          <button type="submit" class="btn btn-large btn-outline-danger">
            {{$search_text}}
          </button>
        </div>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
  </div>
</body>

</html>