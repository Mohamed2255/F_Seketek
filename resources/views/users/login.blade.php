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
                <li class="nav-item active">
                <a class="nav-link  text-white font-weight-bold" href="{{route('register')}}">Sign Up<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white nav-link--border font-weight-bold" href="{{url('/contact')}}">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white font-weight-bold" href="{{url('/about')}}">About</a>
                </li>
                
            </ul>
            
        </div>
    </nav>
    <!-- start header -->
    <header class="header-signIn">
        <div class="container">
            <div class="row">
                
                <div class="col-md-5 py-3 m-auto">
                    <form class="signup-form pt-5 mt-3"  method="POST" action="{{url('/users/handlelogin')}}">
                        @csrf
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" name="email" id="email" class="form-control signup-form__input" placeholder="Email" aria-describedby="helpId">
                    </div>
                   
                    <div class="form-group d-flex justify-content-center">
                      <input type="password" name="password" id="password" class="form-control signup-form__input" placeholder="Password" aria-describedby="helpId">
                      
                    </div>

                    <div class="form-check d-flex justify-content-center my-1">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input font-weight-bold" name="" id="" value="checkedValue" checked>
                        Remember me
                      </label>
                    </div>
                    <div class="form-group d-flex justify-content-center my-1">
                        <a href="" target="_blank">Forget Password ?</a>
                    </div>


                   
                
                    <button type="submit" class="btn btn-primary signup-form__btn my-4">Sign In</button>

                    <div class="signup-social signup-social-page my-3">
                        <a href="" class="signup-social_item sign-social-google signIn-social">
                            <div class="signup-social-icon">
                            <i class="fab fa-google"></i>
                        </div>

                            <button class="btn signup-social-btn">sign up with google</button>
                            
                        </a>
                        <a href="" class="signup-social_item sign-social-facebook signIn-social">
                            <div class="signup-social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <button class="btn signup-social-btn">sign up with facebook</button>
                            
                        </a>
                    </div>
                </form>
                </div>
        

           
               
            </div>
        </div>

    </header>
    <!-- End header -->
@endsection