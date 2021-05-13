<!-- title prezzo descrizione in alto la thumbnails -->
<!-- Riprendi tutti questi valori andando a riprendere il comic
in base all'indice dell'array in cui è. -->

<!--  -->
@extends('layouts.app')

@section('main')
<section>
  <div class="container">
    <div class="thumb-nav">
      <div class="content-thumb-nav">
        <img src="{{$comic['thumb']}}" alt="">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="description-comic">
      <div class="content-description-comic">
        <div class="content-left">
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
        <div class="content-right">
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
<section>
  <div class="container fluid color">
    <div class="info-comic">
      <div class="content-info-comic">
        <div class="left-info-comic">
          <h4>Talent</h4>
          <div class="specific-info">
            <div class="art-info">
              <span class="title">Art by:</span>
              @foreach ($comic['artists'] as $single)
              <span><a href="">{{$single}},</a></span>
              @endforeach
            </div>
            <div class="written-info">
              <span class="title">Written by:</span>
              @foreach ($comic['writers'] as $single)
              <span><a href="">{{$single}},</a></span>
              @endforeach
            </div>
          </div>
        </div>
        <div class="right-info-comic">
          <h4>Specs</h4>
          <div class="specific-info">
            <div class="series">
              <span class="title">Series:</span>
              <span><a href="">{{$comic['series']}}</a></span>
            </div>
            <div class="price">
              <span class="title">
                <span>{{$comic['price']}}</span>
              </span>
            </div>
            <div class="date">
              <span class="title">On Sale Date:</span>
              <span>{{$comic['sale_date']}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
