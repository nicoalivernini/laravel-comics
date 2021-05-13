<!-- title prezzo descrizione in alto la thumbnails -->
<!-- Riprendi tutti questi valori andando a riprendere il comic
in base all'indice dell'array in cui è. -->

<!--  -->
@extends('layouts.app')

@section('main')
<section>
  <div class="container">
    <div class="thumb-bar">
      <div class="content-thumb-bar">

      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="descriptio-comic">
      <div class="content-description-comic">
        <div class="content-right">
          <div class="title">
            <h1>{{$comic['title']}}</h1>
          </div>
          <div class="banner-price">
            <div class="price">
              <span>U.S. Price:</span><span>{{$comic['price']}}</span>
            </div>
            <div class="availability">
              <span>available</span>
              <span>Check Availability</span>
            </div>
          </div>
          <div class="description">
            <p>{{$comic['description']}}</p>
          </div>
        </div>
        <div class="content-left">
          <div class="advertisement">
            <h5>Advertisement</h5>
            <div class="img-advertisement">
              <img src="{{ asset('img/adv.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
