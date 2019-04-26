@extends('layouts.master')

@section('content')

<!-- contant Start -->
<div class='container margin-top-20'>
  <div class="row">

    <div class="col-md-3">
      <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action">First item</a>
      <a href="#" class="list-group-item list-group-item-action">Second item</a>
      <a href="#" class="list-group-item list-group-item-action">Third item</a>
      </div>
    </div>

    <div class="col-md-9">
      <div class="widget">
        <h3>Featured Products</h3>
        <div class="row">

          <div class="col-md-3">
            <div class="card feature-card">
              <img class="card-img-top feature-img" src="{{asset('images/products/'.'beef-kolija-shingara.png')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title feature-card-title">Beef Kolija Singara</h4>
                <p class="card-text">Taka - 110</p>
                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card feature-card">
              <img class="card-img-top feature-img" src="{{asset('images/products/'.'sausage.png')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title feature-card-title">Sausage</h4>
                <p class="card-text">Taka - 180</p>
                <a href="#" class="btn btn-outline-warning feature-btn">Add To Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 ">
            <div class="card feature-card">
              <img class="card-img-top feature-img style="height:400px"" src="{{asset('images/products/'.'cordon-bleu.png')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title feature-card-title">Cordon Bleu</h4>
                <p class="card-text">Taka - 320</p>
                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card feature-card">
              <img class="card-img-top feature-img" src="{{asset('images/products/'.'chicken-burger-patty.png')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title feature-card-title">Chicken Burger Patty</h4>
                <p class="card-text">Taka - 220</p>
                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>


@endsection
