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
                    <a class="nav-link  text-white font-weight-bold" href="{{url('/users/logout')}}"><i class="fas fa-sign-out-alt"></i>

                        Log Out<span class="sr-only">(current)</span></a>
                </li>
                
            </ul>
            
        </div>
    </nav>
    <!-- start header -->
    <header>
        <div class="container">
            <div class="row">
             
                
                <div class="col-md-4 py-3 signup-menu m-auto">
                  <form class="signup-form" method="POST"  action="{{url('/users/update',$user->id)}}">
                    @csrf
                        
            
                      <div class="form-group d-flex justify-content-center">
                      <input type="text" value="{{$user->username}}" name="username" id="usename" class="form-control signup-form__input" placeholder="User Name" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="email"value="{{$user->email}}" name="email" id="email" class="form-control signup-form__input" placeholder="Email" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="number" value="{{$user->mobile_number}}" name="mobile_number" id="phone" class="form-control signup-form__input" placeholder="Mobile Number" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="number" value="{{$user->national_id}}" name="national_id" id="national_id" class="form-control signup-form__input" placeholder="National ID" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text"value="{{$user->car_model}}" name="car_model" id="carmodel" class="form-control signup-form__input" placeholder="Car Model" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" value="{{$user->car_number}}" name="car_number" id="carnumber" class="form-control signup-form__input" placeholder="Car Number" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" value="{{$user->location}}" name="location" id="location" class="form-control signup-form__input" placeholder="Location" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="file" name="user_image" id="user_image" class="form-control signup-form__input1"aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input type="file"  name="car_image" id="car_image" class="form-control signup-form__input1" placeholder="Enter User Image"  aria-describedby="helpId">
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
                      <button type="submit" class="btn btn-primary signup-form__btn mt-3">Update</button>
                </div>

                    
                </form>
                </div>
        
            </div>
        </div>

    </header>
    <!-- End header -->


@endsection