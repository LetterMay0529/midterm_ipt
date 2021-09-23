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
.cb2 {
    background-color: rgba(255,255,255,0.1);
}
</style>
@include('nav-bar')
<div class="container" style="margin-top:50px;padding-bottom:190px;">
    <div class="row">
    <div class="col">
        <div class="col-12 col-md-10 text-white" style="font-family: Arial;font-size:50px;margin-top:50px;">
            @include('motto')
                </div>
            </div>
            <div class="col-6 col-md-4">
             <div class="card cb2 mt-5">
                <div class="card-header">
                    <h3 class="card-title text-white">User Login</h3>
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
                   
                    <p class="text-center d-inline text-white">New to Real Estate? Register <a href="{{url('/register')}}">here</a>.</p><br><br>
                   <button class="btn btn-primary" style="width:100%">Log in</button>
                </form>
                </div>
                </div>
            </div>
    </div>
</div>
@stop