<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Director::all();
        return view('directors.index',compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Director::create($request->all());
        return redirect('/director');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */

    //Per il Model Binding è necessario che il parametro abbbia lo stesso nome del id nella route
    //In questo caso /director/{director} (da route list)
    //Precedentemente la route era /d/{d} , rendendo impossibile il MB
    public function show(Director $director)
    {
        return view('directors.show',compact('director'));
    }
    // public function show($id)
    // {
    //     $director = Director::findOrFail($id);
    //     return view('directors.show',compact('director'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        return view('directors.edit',compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        $director->update($request->all());
        return redirect('/director');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        $director->delete();
        return redirect('/director');
    }
}