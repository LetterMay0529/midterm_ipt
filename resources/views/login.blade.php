@extends('base')

@section('content')

<style>
    .card {
        border-radius: 1rem;
        border: 1px solid transparent;
        width: 38rem;
        margin-left: 250px;
        height: 20rem;
  

        backdrop-filter: blur(1rem);
        box-shadow: 1.3rem 1.3rem 1.3rem rgba(0,0,0,0,5)

        background-top-color: rgba(255,255,255,0.5);
        background-left-color: rgba(255,255,255,0.5);
        background-bottom-color: rgba(255,255,255,0.1);
        background-right-color: rgba(255,255,255,0.1);
    }
.cb2 {
    background-color: rgba(255,255,255,0.1);
}
</style><br><br><br>
@include("nav")
<div class="container" style="margin-top:50px;padding-bottom:190px;">
             <div class="card cb2 mt-5">
                <div class="card-header">
                    <h3 class="card-title text-black" style="font-size: 40px; text-align: center;"><b>User Login</b></h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/login')}}" method="post">
                    {{csrf_field()}}
                    
                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div> 

                    <div class="mb-3">
                        <input type="password" name="password" id="password" class="form-control"placeholder="Password">
                    </div> 
                   
                    <p class="text-center d-inline text-white">New to the site? Register <a href="{{url('/register')}}">here</a>.</p><br><br>
                   <button class="btn btn-dark" style="width:100%; letter-spacing:5px;">Log in</button>
                </form>
                </div>
                </div>
@stop