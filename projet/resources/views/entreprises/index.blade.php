<!DOCTYPE html>
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
    <main class="container">
        <div class="d-flex justify-content-between   pt-3">
            <h2 class="display-6 pt-3">La liste des partenaires</h2>
            <button class="btn btn-warning btn-sm">Ajouter une partenaire</button>
        </div>
    
        <table class="table table-hover mt-3">
            <thead class=" bg-warning">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Siege Social</th>
                    <th>Telephone</th>
                    <th>Date de creation</th>
                    <th>Registre de commerce</th>
                    <th>Ninea</th>
                    <th>Page WEB</th>
                    <th>Dispositif de formation</th>
                    <th>Organigramme</th>
                    <th>Contract</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($entreprises as $entreprise)

                <tr>
                    <th>{{$entreprise->id}}</th>
                    <th>{{$entreprise->nom}}</th>
                    <th>{{$entreprise->siege}}</th>
                    <th>{{$entreprise->telephone}}</th>
                    <th>{{$entreprise->dateCreation}}</th>
                    <th>{{$entreprise->registre}}</th>
                    <th>{{$entreprise->ninea}}</th>
                    <th>{{$entreprise->siteWeb}}</th>
                    <th>{{$entreprise->dispositifFormation}}</th>
                    <th>{{$entreprise->organigramme}}</th>
                    <th>{{$entreprise->contrat}}</th>
                    <th><i class="bi bi-eye-fill text-secondary" id="{{$entreprise->id}}"></i> <i class="bi bi-screwdriver text-success" id="{{$entreprise->id}}"></i> <i class="bi bi-x-circle text-danger" id="{{$entreprise->id}}"></i></th>
                </tr>
                @endforeach

            </tbody>
        </table>
    </main>
</body>
</html>