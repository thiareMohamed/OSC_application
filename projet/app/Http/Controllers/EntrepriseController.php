<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::with('quartier')->get(); 
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
    }

    // public function delete(request $request)
    // {
    //     // dd($request->all());
    //     Entreprise::find($id)->delete();
    //     return redirect('/entreprise');
    // }
}
