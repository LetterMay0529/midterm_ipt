@extends('base')
@include('nav-bar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1207ea9e66.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head><br><br>

<style>
  body{
    background-color: lightgray;
  }
</style>

<header>
       <h1>Dashboard</h1>
</header>
<body>
<div class="col" style="margin-left: 85%;">
     <button type="button" class="btn btn-secondary">Recent listings</button>
     </div>
<div class="container mt-3">
<div class="row">
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="{{url('/images/2.jfif')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <button type="button" class="btn btn-dark">Details</button>
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="{{url('/images/3.jfif')}}" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     </div>
  <button type="button" class="btn btn-dark">Details</button>
      </div>
    </div>
  </div>

  <div class="col-sm-5 mt-3">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="{{url('/images/4.jfif')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <button type="button" class="btn btn-dark">Details</button>
      </div>
    </div>
  </div>

  <div class="col-sm-6 mt-3">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="{{url('/images/5.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <button type="button" class="btn btn-dark">Details</button>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mt-3">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="{{url('/images/1.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <button type="button" class="btn btn-dark">Details</button>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mt-3">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" src="{{url('/images/6.jfif')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <button type="button" class="btn btn-dark">Details</button>
      </div>
    </div>
  </div>
</div>
</div>
</body><br>
<footer>
<div class="row">

<!-- Grid column -->
<div class="col-md-12 mb-4 " style="margin-left: 48%;">

  <i class="fab fa-facebook"></i>
  <i class="fab fa-instagram-square"></i>
  <i class="fab fa-twitter-square"></i>

</div>
</footer>
</html>

@endsection