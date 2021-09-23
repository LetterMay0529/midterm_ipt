@extends('base')

@section('content')
<style>

.card {
        border-radius: 1rem;
        border: 1px solid transparent;

        backdrop-filter: blur(1rem);
        box-shadow: 1.3rem 1.3rem 1.3rem rgba(0,0,0,0,5)

        background-top-color: rgba(255,255,255,0.5);
        background-left-color: rgba(255,255,255,0.5);
        background-bottom-color: rgba(255,255,255,0.1);
        background-right-color: rgba(255,255,255,0.1);
    }
.cb3 {
    background-color: rgba(255,255,255,0.1);
}
.cb4 {
    background-color: rgba(255,255,255,0.1);
}
.cb5 {
    background-color: rgba(255,255,255,0.1);
}
.fab {
   width: 60px;
   height: 55px;
   background: #ffffff;
   margin: 0px 0px 5px;
   text-align: center;
   border-radius: 50%;
   font-size: 35px;
   transform:scale(0.6);
   padding-top: 15px;
   text-shadow: 0px 0px 50px, 0px 0px 50px, 0px 0px 50px;
   transition: 0.5s;
   cursor: pointer;
 
}

.icon{
    margin-left: 450px;
}


</style>
<div>
        <!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark position-sticky" style="position:sticky:position:-webkit-position;top:0;">
  <a style="margin-left:20px;" class="navbar-brand" href="#">REAL ESTATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home</a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      

      <a class="btn btn-outline-light" style="margin-left: 800px;" href="/login" role="button">Sign out</a> -->
    </div>
  </div>
</nav>

<div class="container" style="padding-top: 100px;">

<div class="row">
  <div class="col-sm-4">
    <div class="card cb3">
    <img class="card-img-top" src="./images/3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-white">Special title treatment</h5>
        <p class="card-text text-white">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-outline-info">Details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card cb4">
    <img class="card-img-top" src="./images/1.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-white">Special title treatment</h5>
        <p class="card-text text-white">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-outline-info">Details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card cb5">
    <img class="card-img-top" src="./images/2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-white">Special title treatment</h5>
        <p class="card-text text-white">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-outline-info">Details</a>
      </div>
    </div>
  </div>
</div>
</div><br>

<div class="container ">
    <div class="icon">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
</div>
</div>
@stop
