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
                    <li class="nav-item">
                        <a class="nav-link  text-white  font-weight-bold" href="{{url('/admin/dashboard')}}">Drivers</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link  text-white nav-link--border font-weight-bold" href="{{url('/users/logout')}}"><i class="fas fa-sign-out-alt"></i>
    
                            Log Out<span class="sr-only">(current)</span></a>
                    </li>
                 
                </ul>
                
            </div>
        </nav>
        <!-- End Navbar -->


    <!-- start main section -->
    <section class="admin-main">
        <div class="container-fluid">
            <div class="row">
               
                
               <!-- price list -->
               
               <div class="col-12 d-flex flex-column mt-3 mx-auto">
                    <div class="price-list mr-5 ml-5 mt-5">
                        <table>
                            
                            
                            <table class="table  m-auto table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Sent At</th>
                                    <th>Options</th>
                                </thead>
                                <tbody id="table-body">
                                    @foreach ($messages as $message)
                                    <tr>
                                    <td>{{$message->id}}</td>
                                    <td>{{$message->name}}</td>
                                        <td><span class="trip-date"></span>{{$message->created_at}}</td>
    
                                    <td style="background: none;">
                                        <div class="options ml-3">
                                            <a href="{{url('/admin/read',$message->id)}}" class="btn btn-sm">Read</a>                                     
                                            <a href="{{url('/admin/delete',$message->id)}}" class="btn btn-sm"  onclick=" return confirm('Are you sure you want delete')">Delete</a>                  
                                                                 
                                        </div>
                                    </td>
                                    @endforeach
                                </tr>
                                
                               </tbody>
                            </table>
                        </table>
                    </div>
                    
                </div>
        
            </div>
        </div>

    </section>


@endsection