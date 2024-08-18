<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>@yield('title', 'Netflix Movies')</title>
</head>
<style>
  body {
    padding-top: 50px;
    background-image: url('netflix.jpg');
    background-size: cover;
    background-position: center;
  }

  .card {
    display: flex;
    flex-direction: column;
    height: 100%;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #6D0F2F;">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="{{ route('movies.index') }}">○NET◘flix○</a>
      <div class="ms-auto">
        <a class="btn btn-sm btn-success" href="{{ route('movies.create') }}">Add Movie</a>
      </div>
    </div>
  </nav>

  @yield('content')

</body>

</html>