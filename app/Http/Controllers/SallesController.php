<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\salles;
use App\Http\Requests;

class SallesController extends Controller
{
    public function index()
    {
        $salles = Salles::get();
        return view('welcome', compact('salles'));
    }
}
