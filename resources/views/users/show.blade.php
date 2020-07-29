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
                    <a class="nav-link  text-white font-weight-bold" href="{{url('users/logout')}}"><i class="fas fa-sign-out-alt"></i>

                        Log Out<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white nav-link--border font-weight-bold" href="#">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white font-weight-bold" href="{{url('/about')}}">About</a>
                </li>
                
            </ul>
            
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- start header -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <!-- profile -->
                <div class="col-md-3 border-right d-flex flex-column">
                    <div class="media flex-column mt-3">
                        <a class="d-flex align-self-start">
                        <img src="{{asset('userimages/'.$user->user_image)}}" class="user-img" alt="">
                      </a>
                        <div class="media-body d-flex align-items-center py-2 m-auto">
                        <h5 class="mr-2 ">{{$user->username}}</h5>
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="d-flex driver-info flex-column">
                        <div class="info d-flex flex-wrap pt-3">
                            <div class="info-item">
                                <i class="fas fa-user-circle"></i>
                                <p>{{$user->gender}}</p>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-car-side"></i>
                                <p>{{$user->car_model}}</p>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-car"></i>
                                <p>{{$user->car_number}}</p>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-id-card"></i>
                                <p>{{$user->national_id}}</p>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>{{$user->location}}, Egypt</p>
                            </div>
                    </div>
                        <div class="contacts d-flex flex-column pt-3">
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <p class="m-0">{{$user->mobile_number}}</p>
                            </div>
                            <div class="info-item">
                            <i class="far fa-envelope"></i>
                            <p>{{$user->email}}</p>
                            </div>
                        </div>
                       
                    </div>

                </div>
               <!-- price list -->
                <div class="col-md-9 d-flex flex-column ">
                    <div class="overview d-flex justify-content-center pt-3">
                       

                    </div>
                    <hr>
                    <div class="carimage">
                        <h4>Car Image<h4>
                        <img  src="{{asset('carimages/'.$user->car_image)}}" class="car-img" alt="">
                    </div>
                    
                </div>
        
            </div>
        </div>

    </section>
    <!-- End header -->
@endsection