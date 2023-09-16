@extends('pages.dashboard.base')
@section("title", "Accueil")




@section("main")

<style>
  .content-wrapper{
    background: url("{{asset('pages/img/img.jpg')}}") center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
  }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="text-white">Bienvenue </h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill  text-primary py-1 px-3 mb-3"></div>
                <h1 class="display-6 text-white mb-5">Nous somme la meilleur plateforme dans notre domaine</h1>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


   
    
@endsection
