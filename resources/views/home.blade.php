<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

  </head>
  <body>

  @include('re_use._header')

  <main>
    <section>
      <div class="container">
        <div class="jumbo">
          <div class="content-jumbo">

          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="current-series">
          <div class="content-current-series">
            @foreach ($comics as $comic)
            <div class="card-series">
              <div class="content-card-series">
                <img src="{{ $comic['thumb'] }}" alt="">
                <h3> {{ $comic['series'] }} </h3>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('re_use._footer')

  </body>
</html>
