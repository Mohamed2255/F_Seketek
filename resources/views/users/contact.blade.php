@extends('layouts.app')
@section('content')
       <!-- Start Navbar -->
       <nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand text-white font-weight-bold" href="/index.html">F-SEKTAK</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                @if(auth()->user())
                <li class="nav-item active">
                    <a class="nav-link  text-white font-weight-bold" href="/signin.html"><i class="fas fa-sign-out-alt"></i>

                        Log Out<span class="sr-only">(current)</span></a>
                </li>
                @endif
            </ul>
            
        </div>
    </nav>
    <!-- start header -->
    <header>
        <div class="container">
            <div class="row">
             
                
                <div class="col-md-4 py-5 signup-menu m-auto ">
                  <form class="signup-form" method="POST"  action="{{url('/message/store')}}">
                    @csrf
                        
            
                      <div class="form-group d-flex justify-content-center">
                      <input type="text" name="name" id="name" class="form-control signup-form__input" placeholder="Enter Your Name" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="email" name="email" id="email" class="form-control signup-form__input" placeholder="Email" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" name="phone" id="phone" class="form-control signup-form__input" placeholder="Mobile Number" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <textarea placeholder="Enter Your Message..." name="message" class="form-control signup-form__input" rows="5" cols="30"  ></textarea>

                        <span class="signup-form__icon"><i class="far fa-user"></i></span>
                      </div>           
                   
                      <button type="submit" class="btn btn-primary signup-form__btn mt-3">Send</button>
                </div>

                    
                </form>
                </div>
        
            </div>
        </div>

    </header>
    <!-- End header -->


@endsection