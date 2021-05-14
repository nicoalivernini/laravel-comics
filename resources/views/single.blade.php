@extends('layouts.app')

@section('main')
<section>
  <div class="container">
    <div class="thumb-nav">
      <div class="content-thumb-nav">
        <img src="{{$comic['thumb']}}" alt="">
        <div class="bg-blue"></div>
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
              <span>U.S. Price: </span><span>{{$comic['price']}}</span>
            </div>
            <div class="availability">
              <span>available</span>
              <span>Check Availability <i class="fas fa-sort-down"></i></span>
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
              <p class="title">Art by: </p>
              <div class="artists">
                @foreach ($comic['artists'] as $single)
                <span><a href="">{{$single}},</a></span>
                @endforeach
              </div>
            </div>
            <div class="written-info">
              <p class="title">Written by: </p>
              <div class="writer">
                @foreach ($comic['writers'] as $single)
                <span><a href="">{{$single}},</a></span>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="right-info-comic">
          <h4>Specs</h4>
          <div class="specific-info">
            <div class="series">
              <p class="title">Series: </p>
              <span><a href="">{{$comic['series']}}</a></span>
            </div>
            <div class="price">
              <p class="title">U.S. Price: </p>
              <span>{{$comic['price']}}</span>
            </div>
            <div class="date">
              <p class="title">On Sale Date: </p>
              <span>{{$comic['sale_date']}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="banner-comic">
      <div class="content-banner-comic">
        <div class="card-banner-comic">
          <span>Digital comics</span>
          <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
        </div>
        <div class="card-banner-comic">
          <span>Shop DC</span>
          <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
        </div>
        <div class="card-banner-comic">
          <span>Comic shop locator</span>
          <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
        </div>
        <div class="card-banner-comic">
          <span>Subscriptions</span>
          <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
