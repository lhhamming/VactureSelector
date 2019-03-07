<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Vacture;
use Auth;

class Search extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vacture::all();
        //dd($data);
        $name = Auth::user()->name;
        if($name == "Admin"){
            return view('search.index', ['Vactures' => $data])->with('AllowAdd', 'true');
        }
        return view('search.index', ['Vactures' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            X
        $name = Auth::user()->name;
        if($name != "Admin")
        {
            return redirect('/Search');
        }
        else
        {
            return view('search.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacture = new Vacture();
        if( request('naam') == "" || request('linknaar') == "" || request('soort') == ""){
            return view('search.create')->with('errormessage', 'Er is 1 of meer velden niet ingevult.');
        } 
        $vacture->Name = request('naam');
        $vacture->Link = request('linknaar');
        $vacture->Type = request('soort');

        $vacture->save();

        $data = Vacture::all();
        return view('search.index', ['Vactures' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacture = Vacture::findOrFail($id);
        $vacture->delete();
        $data = Vacture::all();
        return redirect('/Search');
        return view('search.index', ['Vactures' => $data]);
    }
}
