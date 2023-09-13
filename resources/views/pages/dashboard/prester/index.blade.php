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
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="#"
                data-toggle="modal" data-target="#addEventModal"><i
                    class="fas fa-users fa-sm text-white-50"></i>Enregistrer votre restaurant</a>
            </ol>
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

@section('add-feature')
    <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="addEventLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enregistrement du restaurant</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form class="event" method="POST" id="add_event_form" action="#"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row mb-2" style="margin-top: 20px">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="text" class="form-control form-control-user" id="name"
                                  name="name" placeholder="Nom du restaurant">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="name"
                              name="place" placeholder="Lieu du restaurant">
                          </div>
                      </div>
                      <div class="col-sm-12 mb-3 mb-sm-0" style="margin-top: 20px">
                          <textarea class="form-control form-control-user" name="description" id="description" cols="5" rows="5">
                              </textarea>
                      </div>
                      <input type="hidden" name="user_id" id="">
                      <div class="form-group row mb-2" style="margin-top: 20px">
                    
                          <div class="col-sm-12 mb-3 mb-sm-0">
                              <input type="file" class="form-control" id="cover" name="cover"
                                  placeholder="Photo de couverture de l'evenement">
                          </div>
                      </div>
                      <hr style="margin-bottom: 0.2rem"><label>Horaires  Ouverture - Fermeture</label>
                      <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="time" class="form-control form-control-user"
                                  placeholder="Date & heure de début de l'evenement" name="start_time" id="start_time">
                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="time" class="form-control form-control-user"
                                  placeholder="Date & heure de début de l'evenement" name="end_time" id="end_time">
                          </div>
                      </div>
                      
                      <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                          <button class="btn btn-success">Ajouter</button>
                      </div>
                  </form>
              </div>

            </div>
        </div>
    </div>
    </div>

    
@endsection