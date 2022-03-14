<!DOCTYPE html>
<style>
    body {
    background: linear-gradient(#ccc, #fff);
    font: 14px sans-serif;
    padding: 20px;
    }
    .letter {
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    margin: 26px auto 0;
    max-width: 550px;
    min-height: 300px;
    padding: 24px;
    position: relative;
    width: 80%;
    }
    .letter:before, .letter:after {
    content: "";
    height: 98%;
    position: absolute;
    width: 100%;
    z-index: -1;
    }
    .letter:before {
    background: #fafafa;
    box-shadow: 0 0 8px rgba(0,0,0,0.2);
    left: -5px;
    top: 4px;
    transform: rotate(-2.5deg);
    }
    .letter:after {
    background: #f6f6f6;
    box-shadow: 0 0 3px rgba(0,0,0,0.2);
    right: -3px;
    top: 1px;
    transform: rotate(1.4deg);
    }
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>OSC-Entreprise</title>
</head>
<body>
    <main class="container letter">
        <div class="d-flex justify-content-end">
            <a href="/entreprise">
                <i class="bi bi-x-circle text-danger"></i>
            </a>
        </div>
        <div class="d-flex justify-content-between   pt-3">
            <h2 class="display-6 pt-3 text-warning">{{$entreprise->nom}}</h2>
            <div class="">
              <b>Date de creation :</b>  {{$entreprise->dateCreation}} <br/>
              <b>Ninea :</b>  {{$entreprise->ninea}}

            </div>
        </div>
        <div class="mt-5 text-center">
            <h5><b>Siege social :</b> {{$entreprise->siege}}</h5><br/>
            <h5><b>Telephone :</b> {{$entreprise->telephone}}</h5><br/>
            <h5><b>Registre :</b> {{$entreprise->registre}}</h5><br/>
            <h5><b>Site web :</b> {{$entreprise->siteWeb}}</h5><br/>
            <h5><b>Localite :</b> {{$entreprise->quartier->nom}}</h5><br/>
        </div>
    </main>
</body>
</html>