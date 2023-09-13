<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire | Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(178, 156, 214);
            background: url({{asset('pages/img/img.jpg')}}) center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
        .container{
            margin: 20px;
            border-top: 5px solid green;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 320px;
            background-color: #fff;   
        }
        .form-signup{
            width: 100%;
            padding-bottom: 20px;
        }
        h2{
            margin: 10px 0px 10px 0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" class="form-signup">
            <h2 class="text-center">Inscrire restaurant</h2>
            
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Tapez le nom du restaurant" id="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="Tapez la description du restaurant" id="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="place" placeholder="Tapez le lieu du restaurant" id="">
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="">Heure-Ouverture</label>
                    <input type="time" class="form-control" name="start_time" placeholder="Heure d'ouverture" id="">
                </div>
                @if (Auth::user())
                    <input type="hidden" name="prester_id" value="{{Auth::user()->id}}">
                @endif
                <div class="form-group col-6">
                    <label for="">Heure-Fermeture</label>
                    <input type="time" class="form-control" name="end_time" placeholder="Heure de fermeture" id="">
                </div>
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="cover" placeholder="Image de couverture" id="">
            </div>
            <input type="submit" class="btn btn-success btn-block " name="" value="submit" id="">

        </form>
    </div>
    
</body>
</html>