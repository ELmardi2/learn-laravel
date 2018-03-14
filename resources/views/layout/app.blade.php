<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hekaity</title>

<link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
  @include('Includes.navbar')
<div class="container">
  @if(Request::is('/'))
      @include('Includes.show')
  @endif
<div class="row">
  <div class="col-md-8 col-lg-8">
    @include('Includes.msg')
    @yield('content')
  </div>
  <div class="col-md-4 col-lg-4">
    @include('Includes.sidebar')
  </div>
</div>
</div>
<footer id="footer" class="text-center">
  <p>All rights reserved to Elmardi yahia &copy 2018</p>
</footer>
  </body>
</html>
