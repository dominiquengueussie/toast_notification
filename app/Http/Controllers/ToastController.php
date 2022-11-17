<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToastController extends Controller
{
    public function index()
    {
        session()->put('success', "l\'utilisateur a été créer avec succès.");
        return view('toastrCheck');
    }
}
