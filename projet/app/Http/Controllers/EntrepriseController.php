<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all(); 
        return view('entreprises/index', compact('entreprises'));
    }

    public function create()
    {
        $quartier = Quartier::all(); 
        return view('entreprises/create',compact('quartier'));
    }

    public function store(request $request)
    {
        // dd($request->all());
        Entreprise::create($request->all());
        return redirect('/entreprise');

        // $entreprise = new Entreprise();
        // $entreprise->nom = $request->nom;
        // $entreprise->siege = $request->siege;
        // $entreprise->telephone = $request->telephone;
        // $entreprise->dateCreation = $request->dateCreation;
        // $entreprise->registre = $request->registre;
        // $entreprise->ninea = $request->ninea;
        // $entreprise->siteWeb = $request->siteWeb;
        // $entreprise->dispositifFormation = $request->dispositifFormation;
        // $entreprise->organigramme = $request->organigramme;
        // $entreprise->contrat = $request->contrat;

    }
}
