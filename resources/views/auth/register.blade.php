<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire - Inscription</title>
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
        <form action="{{route('userRegister.store')}}" method="POST" class="form-signup">
            @csrf
            <h2 class="text-center">Créer un compte</h2>
            
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="Entrer votre nom" id="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="firstname" placeholder="Entrer votre prénom" id="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Entrer votre email" id="">
            </div>
            <input type="hidden" name="role_id" value="2">
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de password" id="">
            </div>
            <input type="submit" class="btn btn-success btn-block mb-2" name="" value="S'inscrire" id="">

            <p> Avez-vous un compte?
                 <a href="{{route('login')}}">Se connecter</a> 
            </p>
        </form>
    </div>
    
</body>
</html>