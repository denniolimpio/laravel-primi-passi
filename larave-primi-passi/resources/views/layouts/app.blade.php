<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('title')</title>
    {{-- link --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">    {{-- la funzione asset "legge"  il contenuto di public --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  </head>
  <body>
    
    @include ('partials.header')
    @yield ('main_content')
    @include ('partials.footer')

  </body>
</html>
