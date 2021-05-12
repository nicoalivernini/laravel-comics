<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  </head>
  <body>

  @include('re_use._header')

  <main>
    <section>
      <div class="container full">
        <div class="jumbo">
          <div class="content-jumbo">

          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container fluid gray">
        <div class="current-series">
          <div class="title-current-series">
            <div class="content-title-current-series">
              <h2>current series</h2>
            </div>
          </div>
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
          <div class="load-more">
            <div class="content-load-more">
              <button type="button" name="button">load more</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container fluid blue">
        <div class="banner">
          <div class="content-banner">
            <ul>
              <li>
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <h4>Digital comics</h4>
              </li>
              <li>
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <h4>DC merchandise</h4>
              </li>
              <li>
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <h4>Subscription</h4>
              </li>
              <li>
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <h4>Comic shop locator</h4>
              </li>
              <li>
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                <h4>Dc power visa</h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('re_use._footer')

  </body>
</html>
