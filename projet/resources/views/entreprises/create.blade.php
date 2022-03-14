<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire OSC</title>
</head>
<body>
    <main class="container">
        <h3 class="h3">Formulaire d'ajout partenaire</h3>
        <form class="row g-3"action="/entreprise/store" method="post">
            @csrf
            <div class="col-md-6">
                <label for="inputNom4" class="form-label">Nom</label>
                <input type="text" class="form-control" id="inputNom4" name="nom">
            </div>
            <div class="col-md-6">
                <label for="inputSiege4" class="form-label">Siege</label>
                <input type="text" class="form-control" id="inputSiege4" name="siege">
            </div>
            <div class="col-12">
                <label for="inputTelephone" class="form-label">Telephone</label>
                <input type="number" class="form-control" id="inputTelephone" placeholder="Telephone" name="telephone">
            </div>
            <div class="col-12">
                <label for="inputDateCreation" class="form-label">Date de creation</label>
                <input type="date" class="form-control" id="inputDateCreation" placeholder="Date de creation" name="dateCreation">
            </div>
            <div class="col-md-6">
                <label for="inputRegistre" class="form-label">Registre</label>
                <input type="text" class="form-control" id="inputRegistre" name="registre">
            </div>
            <div class="col-md-3">
                <label for="inputNinea" class="form-label">Ninea</label>
                <input type="text" class="form-control" id="inputNinea" name="ninea">
            </div>
            <div class="col-md-3">
                <label for="inputSiteWeb" class="form-label">Site Web</label>
                <input type="text" class="form-control" id="inputSiteWeb" name="siteWeb">
            </div>

            <div class="col-md-4">
                <label for="inputDispositifFormation" class="form-label">Dispositif de formation</label>
                <select id="inputDispositifFormation" class="form-select" name="dispositifFormation">
                    <option value="false" selected>faux</option>
                    <option>vrai</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputOrganigramme" class="form-label">Organigramme</label>
                <select id="inputOrganigramme" class="form-select"  name="organigramme">
                    <option value="false" selected>faux</option>
                    <option value="true">vrai</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputContrat" class="form-label">Contracts</label>
                <select id="inputContrat" class="form-select"  name="contrat">
                    <option value="false" selected>faux</option>
                    <option  value="true" >vrai</option>
                </select>
            </div> 
            <div class="col-md-4">
                <label for="inputQuartier" class="form-label">Quartier</label>
                <select id="inputQuartier" class="form-select"  name="quartier_id">
                    @foreach($quartier as $quart)
                        <option value="{{$quart->id}}" selected>{{$quart->nom}}</option>
                    @endforeach;
                </select>
            </div> 
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </main>
</body>
</html>