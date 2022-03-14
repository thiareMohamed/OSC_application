<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index()
    {
        $entreprise = Entreprise::all(); 
        return view('entreprises/index', compact('entreprise'));
    }

    public function create()
    {
       
        return view('entreprises/create');
    }
}
