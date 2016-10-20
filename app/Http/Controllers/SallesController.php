<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salle;
use App\Comment;
use App\Http\Requests;

class SallesController extends Controller
{
    public function index()
    {
        $comments = Salle::find('1')->comments;

        return view('salles.index', ['comments'=> $comments]);
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
