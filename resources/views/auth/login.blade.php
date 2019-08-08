<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End Required meta tags -->

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body>
  <div id="app">
    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url(/images/img-1.png);">
        <h1>
          <img src="/images/brand-inverse.png" alt="" height="72">
          <span class="sr-only">Sign In</span>
        </h1>
      </header>
      <!-- form -->
      <login-form />
      <!-- /.auth-form -->

      <!-- copyright -->
      <footer class="auth-footer">&copy; 2018 All Rights Reserved. <a href="#">Privacy</a></footer>
    </main>
  </div>
    <script src="{{ asset('js/app.js?v='. time()) }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
      $(document).on('theme:init', () => {
        particlesJS.load('auth-header', '/js/particles.json');
      })
    </script>
  </body>
</html>