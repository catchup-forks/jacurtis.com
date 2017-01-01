<!DOCTYPE html>
<html lang="en">
  <head>
    @include('shared.meta-tags')
    @yield('title')
    <meta name="description" content="{{ $meta_description }}">
    @include('frontend.partials.frontend-css')
  </head>
  <body>
    @include('frontend.partials.header')
    @yield('content')
    @yield('unique-js')
    <footer>
      @include('frontend.partials.footer')
    </footer>
  </body>
</html>
