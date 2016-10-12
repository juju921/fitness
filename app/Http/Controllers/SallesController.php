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
        return view('salles.index', compact('salles'));
    }


    public function create()
    {
        $salles = new Salles();
        return view('salles.create', compact('salles'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\PostRequest $request)
    {
        //dd($request->all());
        $salles = posts::create($request->all());
        $salles->save();
        return redirect()->to('salles')->with('message','ok');
    }
}
