@extends('pages.layouts.base');
@section('title', 'restaurants')


@section("header")
    @include('pages.layouts.header')
@endsection









@section("content")
   

    <!-- Page Header Start -->
    <div class="container-fluid page-header  wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
                <h1 class="text-white mb-2">Consultez la liste de nos restaurants</h1>
                <form action="#" method="get">
                    <div class="input-group ">
                        <input type="text" name="name" class="form-control" placeholder="Rechercher ......"
                            aria-label="Nom de l'evenement">
                        <button class="btn btn-primary" type="submit" id="button">Rechercher</button> 
                    </div>
                </form> 
                
        </div>
    </div> 
    <!-- Page Header End -->




    <!-- Causes Start -->
    <div class="container-xxl bg-light ">
        <h1 class="text-center">Tous nos restaurants</h1>
        <section style="min-height: 60vh">
            <section class="schedule-area pb-100" id="schedule">
                <div class="container" style="margin-top: 100px">
                    <div class="container">
                        <div class="card-deck row" >    
                            <div class="col-xs-12 col-sm-6 col-md-4" style= "margin-bottom:20px;">
                                <div class="card h-100">
                                    {{-- <span class="badge badge-success event-badge">Dans 3 jours</span> --}}
                                    <div class="view ">
                                        <a href="#">
                                            <img class="card-img-top" src="{{ asset('pages/img/carousel-1.jpg') }}" alt="Card image cap">
                                        </a>
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
    
    
                                    <div class="card-body">
    
    
                                        <a href="#">
                                            <h4 class="card-title">Titre</h4>
                                        </a>
    
                                        <p class="card-text description">Description</p>
    
                                        <a href="#" data-toggle="modal" class="btn btn-light-blue btn-md"
                                            data-target="#updateUserModal#">Reserver</a>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4" style= "margin-bottom:20px;">
                                <div class="card h-100">
                                    {{-- <span class="badge badge-success event-badge">Dans 3 jours</span> --}}
                                    <div class="view ">
                                        <a href="#">
                                            <img class="card-img-top" src="{{ asset('pages/img/carousel-1.jpg') }}" alt="Card image cap">
                                        </a>
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
    
    
                                    <div class="card-body">
    
    
                                        <a href="#">
                                            <h4 class="card-title">Titre</h4>
                                        </a>
    
                                        <p class="card-text description">Description</p>
    
                                        <a href="#" data-toggle="modal" class="btn btn-light-blue btn-md"
                                            data-target="#updateUserModal#">Reserver</a>
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4" style= "margin-bottom:20px;">
                                <div class="card h-100">
                                    {{-- <span class="badge badge-success event-badge">Dans 3 jours</span> --}}
                                    <div class="view ">
                                        <a href="#">
                                            <img class="card-img-top" src="{{ asset('pages/img/carousel-1.jpg') }}" alt="Card image cap">
                                        </a>
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
    
    
                                    <div class="card-body">
    
    
                                        <a href="#">
                                            <h4 class="card-title">Titre</h4>
                                        </a>
    
                                        <p class="card-text description">Description</p>
    
                                        <a href="#" data-toggle="modal" class="btn btn-light-blue btn-md"
                                            data-target="#updateUserModal#">Reserver</a>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
    </div>
    <!-- Causes End -->
@endsection

@section("footer")
    @include('pages.layouts.footer')
@endsection

    

