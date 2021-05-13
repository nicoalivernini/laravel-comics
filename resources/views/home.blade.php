@extends('layouts.app')

@section('main')
<section>
  <div class="container fluid gray">
    <div class="current-series">
      <div class="title-current-series">
        <div class="content-title-current-series">
          <h2>current series</h2>
        </div>
      </div>
      <div class="content-current-series">
        @foreach ($comics as $index => $comic)
        <a href="{{ route('detail', ['id'=> $index]) }}">
          <div class="card-series">
            <div class="content-card-series">
              <div class="thumbnails-card">
                <img src="{{ $comic['thumb'] }}" alt="">
              </div>
              <h3> {{ $comic['series'] }} </h3>
            </div>
          </div>
        </a>
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
@endsection
