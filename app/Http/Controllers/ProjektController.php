<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projekt;

class ProjektController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projekt =  Projekt::orderBy('nev','asc')->paginate(10);
        return view('home')->with('projektek', $projekt);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nev' => 'required',
            'leiras' => 'required',
            'statusz' => 'required',
            'kapcsolattarto' => 'required',
            'kapcsMail' => 'required',
        ]);

        $projekt = new Projekt;
        $projekt->nev = $request->input('nev');
        $projekt->leiras = $request->input('leiras');
        $projekt->statusz = $request->input('statusz');
        $projekt->kapcsolattarto = $request->input('kapcsolattarto');
        $projekt->kapcsMail = $request->input('kapcsMail');
        $projekt->save();

        return redirect('/projekt')->with('succes', 'Projekt hozzáadva');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projekt =  Projekt::find($id);
        return view('show')->with('projekt',$projekt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projekt = Projekt::find($id);
        return view('edit')->with('projekt',$projekt);
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
        $this->validate($request, [
            'nev' => 'required',
            'leiras' => 'required',
            'statusz' => 'required',
        ]);

        $projekt = Projekt::find($id);
        $projekt->nev = $request->input('nev');
        $projekt->leiras = $request->input('leiras');
        $projekt->statusz = $request->input('statusz');
        $projekt->kapcsolattarto = $request->input('kapcsolattarto');
        $projekt->kapcsMail = $request->input('kapcsMail');
        $projekt->save();

        return redirect('/projekt')->with('succes', 'Sikeres modósítás!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projekt = Projekt::find($id);
        $projekt->delete();
        return redirect('/projekt')->with('succes', 'Sikeres törlés!');
    }
    public function kapcsDestroy($id)
    {
        $projekt = Projekt::find($id);
        $projekt->kapcsolattarto = '';
        $projekt->kapcsMail = '';
        $projekt->save();
        return redirect('/projekt/'.$projekt->id)->with('succes', 'Kapcsolattartó törölve!');
    }
}
