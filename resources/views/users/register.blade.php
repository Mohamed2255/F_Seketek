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
                  <a class="nav-link  text-white  font-weight-bold" href="{{route('login')}}">Sign IN<span class="sr-only">(current)</span></a>
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
    <header>
        <div class="container">
            <div class="row">
                <div class="align-items-center col-md-6 d-flex justify-content-center">
                    <div class="signup-social">
                        <a href="" class="signup-social_item sign-social-google">
                            <div class="signup-social-icon">
                            <i class="fab fa-google"></i>
                        </div>

                            <button class="btn signup-social-btn">sign up with google</button>
                            
                        </a>
                        <a href="" class="signup-social_item sign-social-facebook">
                            <div class="signup-social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <button class="btn signup-social-btn">sign up with facebook</button>
                            
                        </a>
                    </div>
                </div>
                <div class="col-md-2 d-flex align-items-center justify-content-center">
                    <p class="text-white font-weight-bold">or</p>
                </div>
                <div class="col-md-4 py-3 signup-menu">
                    <form class="signup-form" method="POST" action="{{url('/users/handleregister')}}" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group d-flex justify-content-center">
                      <input type="text" name="username" id="usename" class="form-control signup-form__input @error('username') is-invalid @enderror" placeholder="User Name" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="email" name="email" id="email" class="form-control signup-form__input @error('email') is-invalid @enderror" placeholder="Email" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" name="phone" id="phone" class="form-control signup-form__input @error('phone') is-invalid @enderror" placeholder="Mobile Number" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="password" name="password" id="password" class="form-control signup-form__input @error('password') is-invalid @enderror" placeholder="Password" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" name="national_id" id="national_id" class="form-control signup-form__input @error('national_id') is-invalid @enderror" placeholder="National ID" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" name="carmodel" id="carmodel" class="form-control signup-form__input @error('carmodel') is-invalid @enderror" placeholder="Car Model" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" name="carnumber" id="carnumber" class="form-control signup-form__input @error('carnumber') is-invalid @enderror" placeholder="Car Number" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" name="location" id="location" class="form-control signup-form__input @error('location') is-invalid @enderror" placeholder="Location" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="file" name="user_image" id="user_image" class="form-control signup-form__input1 @error('user_image') is-invalid @enderror"aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="file" name="car_image" id="car_image" class="form-control signup-form__input1 @error('car_image') is-invalid @enderror" placeholder="Enter User Image"  aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="fas fa-car"></i></span>
                    </div>              
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ml-1" type="radio" name="gender" id="exampleRadios1" value="Female" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Female
                        </label>
                        <input class="form-check-input ml-1" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Male
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary signup-form__btn mt-3">Sign Up</button>
                </div>

                    
                </form>
                </div>
        
            </div>
        </div>

    </header>
    <!-- End header -->


@endsection