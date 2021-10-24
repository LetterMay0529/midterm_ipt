@extends('base')

@section('content')

<style>
    .card {
        border-radius: 1rem;
        border: 1px solid transparent;
        width: 38rem;
        margin-left: 250px;
        height: 30rem;

        backdrop-filter: blur(1rem);
        box-shadow: 1.3rem 1.3rem 1.3rem rgba(0,0,0,0,5)

        background-top-color: rgba(255,255,255,0.5);
        background-left-color: rgba(255,255,255,0.5);
        background-bottom-color: rgba(255,255,255,0.1);
        background-right-color: rgba(255,255,255,0.1);
    }
.cb1 {
    background-color: rgba(255,255,255,0.1);
}
</style>
<br><br>
@include("nav")
<div class="container" style="margin-top:50px;padding-bottom:190px;">
     <div class="card cb1 mt-3">
        <div class="card-header">
            <h3 class="card-title text-black" style="font-size: 40px; text-align: center;  " ><b>Sign Up</b></h3>
        </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post" >
                            {{csrf_field()}}
                     <div class="form-outline mb-4">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="mb-3 text-black" id="input-container">
                        <select name="gender" id="gender" class="form-select text-black input-field" placeholder="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div> 

                    <div class="mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div> 
                    <p class="text-center d-inline text-white">Already have an account? Log in <a href="{{url('/login')}}">here</a>.</p><br><br>
                   <button class="btn btn-dark" style="width:100%; letter-spacing:5px;">Create Account</button>
                </form>
            </div>
     </div>
</div>

@stop