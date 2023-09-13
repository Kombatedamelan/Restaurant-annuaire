<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire - Connexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
        }
        .container{
            margin: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            width: 300px;
            height: 300px;
            background: #fff;   
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
<form action="{{ route('verification.send') }}" method="POST">
    @csrf
    <h3>Vérification du compte</h3>
    <small style="text-align:center;">
        <p>Verification requis, veuillez consultez
            votre boite mail pour la vérification
            de votre compte
            .</p>
    </small>
    <br>
    <button>Renvoyer le lien</button>
</form>
</div>
    
</body>
</html>