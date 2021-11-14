<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocktail Maker</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Lato:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-orange">
    <div class="container row m-auto">
      
      <div class="col-8 d-flex flex-column text-center">
          <a href="/"><h1 class="nav-header mb-0">Cocktail Maker</h1></a>
          <p class="nav-tagline">Helping you make the perfect cocktail at home!</p>
      </div>
      
      <div class="col-4">
        <a href="/">
          <img src="{{url('/img/cocktails.png')}}" alt="cocktail"/>
        </a>
      </div>
      
    </div>
  </nav>
  @yield('content')
</body>
</html>