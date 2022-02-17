<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title> @yield('title_page') </title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active mx-4" aria-current="page" href="{{route('comics.index')}}">Home</a>
                  <a class="nav-link mx-4" href="{{route('comics.create')}}">Insert new Comic</a>
                  
                </div>
              </div>
            </div>
          </nav>
    </header>

    <main>
        @yield('main_content')
    </main>
    
</body>
</html>