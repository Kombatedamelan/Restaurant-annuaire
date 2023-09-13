<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">Ann<span class="text-white">uaire</span>
            </h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('index')}}" class="nav-item nav-link active">Accueil</a>
                <a href="{{route('liste')}}" class="nav-item nav-link active">Liste de restaurants</a>
                {{-- <a href="about.html" class="nav-item nav-link">About</a>
                <a href="causes.html" class="nav-item nav-link">Causes</a> --}}
            </div>
            @if (Auth::user())
                @if (Auth::user()->role->name != "User")
                <a href="{{route( (Auth::user()->role->name!='Admin' ? 'prester':'admin').'.index')}}">Dashboard</a>
                @endif

                
                    <form action="{{ route('logout') }}" id="logoutForm" method="post">
                        @csrf

                        <a class="btn btn-danger" style="margin-left: 15px;" href="{{route("logout")}}" id="logoutBtn">Deconnexion</a>
                        {{-- <a style="background: red; color: #fff;cursor:pointer;" >Se déconnecter</a> --}}
                        <script>
                            let form = document.getElementById("logoutForm") ;
                            let btn = document.getElementById("logoutBtn");

                            btn.addEventListener("click", function(e) {
                                e.preventDefault();
                                form.submit();
                            })
                        </script>
                    </form>
                
            @else
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="{{route('login')}} ">
                        Enregistrer un restaurant
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
                    
                {{--  --}}
            @endif 
            
        </div>
    </nav>
</div>
<!-- Navbar End -->

