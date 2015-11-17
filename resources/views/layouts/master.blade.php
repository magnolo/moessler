<!DOCTYPE html>
<html>

  <head>
    <title>Camping Mössler - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  </head>
  <body>
      <div class="wrapper">
      @include('layouts.header')
      @yield('slider')
      <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                  @yield('content')
                </div>
            </div>
      </section>
      @include('layouts.footer')
      </div>
      <script src="{!! asset('js/vendor.js') !!}"></script>
      <script src="{!! asset('js/app.js') !!}"></script>
      @if ( Config::get('app.debug') )
          <script type="text/javascript">
           document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
          </script>
      @endif
   </body>
</html>
