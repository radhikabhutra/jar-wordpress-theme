<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
      <main id="main" class="main">
        @yield('content')
      </main>
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
