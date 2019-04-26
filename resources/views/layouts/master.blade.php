<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bengal Meat Ecommerce</title>
@include('partials.styles')
  </head>
  <body>

    <!--  Navigation  -->

    <div class="wrapper">
      @include('partials.nav')

@yield('content')

@include('partials.footer')

</div>
@include('partials.scripts')
  </body>
</html>
