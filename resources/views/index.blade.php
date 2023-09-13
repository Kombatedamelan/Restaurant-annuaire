@extends('pages.layouts.base')
@section('title', 'Home')


@section("header")
    @include('pages.layouts.header')
@endsection



@section("content")

        
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="text-white animated slideInDown w-50">
                Bienvenue sur le meilleur annuaire de restauration
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Causes Start -->
    <div class="container-xxl bg-light ">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                
                <h3>Nos Restaurants</h3>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-dark rounded-top overflow-hidden h-80">
                        <div class="text-center p-2 pt-0">
                            <div class="d-inline-block bg-dark text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Restaurant</small>
                            </div>  
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('pages/img/carousel-1.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="#">
                                    Voir plus
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-dark rounded-top overflow-hidden h-80">
                        <div class="text-center p-2 pt-0">
                            <div class="d-inline-block bg-dark text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Restaurant</small>
                            </div>  
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('pages/img/carousel-1.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="#">
                                    Voir plus
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-dark rounded-top overflow-hidden h-80">
                        <div class="text-center p-2 pt-0">
                            <div class="d-inline-block bg-dark text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Restaurant</small>
                            </div>  
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('pages/img/carousel-1.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="#">
                                    Voir plus
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-dark rounded-top overflow-hidden h-80">
                        <div class="text-center p-2 pt-0">
                            <div class="d-inline-block bg-dark text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Restaurant</small>
                            </div>  
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid" src="{{asset('pages/img/carousel-1.jpg')}}" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="#">
                                    Voir plus
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<!-- Causes End -->

<div class="text-center mt-3">
    <a href="#" class="btn btn-info medium radius">voir les restaurants &nbsp;&nbsp;<i
            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>

@endsection

@section("footer")
    @include('pages.layouts.footer')
@endsection
