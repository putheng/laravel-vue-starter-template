<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->


    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  </head>

  <body>
    <!-- .app -->
    <div class="app" id="app">
      <admin-dashboard />
    </div>
    <!-- /.app -->

    <script src="{{ asset('js/app.js?v='. time()) }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>

  </body>
</html>
