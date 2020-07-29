@extends('layouts.app')
@section('content')
       <!-- Start Navbar -->
       <nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand text-white font-weight-bold">F-SEKTAK</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                @if(auth()->user())
                <li class="nav-item active">
                    <a class="nav-link  text-white font-weight-bold" href="{{url('/users/logout')}}"><i class="fas fa-sign-out-alt"></i>

                        Log Out<span class="sr-only">(current)</span></a>
                </li>
                @endif
            </ul>
            
        </div>
    </nav>
    <!-- start header -->
  
<section class="text-center about">
    <h1>About US</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-ex-12 about-item" >
          <img src="{{asset('img/saad.jpg')}}" class="user-img" alt="">
          <h2>Mohamed Ahmed Saad</h2>
          <h2>Web Developer</h2>
        </div>
        <div class="col-lg-4 col-sm-6 col-ex-12 about-item ">
          <img src="{{asset('img/mohand.jpg')}}" class="user-img" alt="">
          <h2>Mohanad zakaria</h2>
          <h2>UI / UX Designer</h2>
        </div>
        <div class="clearfix visible-md-block visible-sm-block"></div>
        <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" >
          <img src="{{asset('img/maher.jpg')}}" class="user-img" alt="">
          <h2>Mohamed Maher</h2>
          <h2>Android Developer</h2>
        </div>
        <div class="col-lg-4 col-sm-6 col-ex-12 about-item mt-5" >
          <img src="{{asset('img/taher.jpg')}}" class="user-img" alt="">
          <h2>Taher Mabrouk</h2>
          <h2>Android Developer</h2>
        </div>
        <div class="col-lg-4 col-sm-6 col-ex-12 about-item mt-5 ">
          <img src="{{asset('img/diaa.jpg')}}" class="user-img" alt="">
          <h2>Diaa Osama</h2>
          <h2>UI / UX Designer</h2>
        </div>
      
        <div class="col-lg-4 col-sm-6 col-ex-12 about-item mt-5 ">
          <img src="{{asset('img/magdy.jpg')}}" class="user-img" alt="">
          <h2>Mohamed Magdy</h2>
          <h2>Web Developer</h2>
        </div>
      </div>
      
    </div>
  </section>

<!-- End header -->


@endsection