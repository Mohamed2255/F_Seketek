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
             
                
                <div class="col-md-4 py-5 signup-menu m-auto ">
                  <form class="signup-form">
                      <div class="form-group d-flex justify-content-center">
                      <input readonly value="{{$message->name}}"type="text" name="name" id="name" class="form-control signup-form__input" placeholder="Enter Your Name" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input  readonly type="email" value="{{$message->email}}"  name="email" id="email" class="form-control signup-form__input" placeholder="Email" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <input readonly type="text" name="phone"  value="{{$message->phone}}" id="phone" class="form-control signup-form__input" placeholder="Mobile Number" aria-describedby="helpId">
                      <span class="signup-form__icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <textarea readonly name="message" class="form-control signup-form__input" rows="5" cols="30"  >{{$message->message}}</textarea>

                        <span class="signup-form__icon"><i class="far fa-user"></i></span>
                      </div>
                </div>

                    
                </form>
                </div>
        
            </div>
        </div>

    </header>
    <!-- End header -->


@endsection