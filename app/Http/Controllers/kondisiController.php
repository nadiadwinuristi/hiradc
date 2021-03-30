<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\kondisi;
use\App\kategori;
class kondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtkondisi = kondisi::with('kategori')->latest()->paginate(5);
        return view('kondisi.data-kondisi',compact('dtkondisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ktg= kategori::all();
        return view('kondisi.create-kondisi',compact('ktg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kondisi::create([
            'kategori_id' => $request->kategori_id,
            'kondisi' => $request->kondisi,

        ]);
        return redirect('data-kondisi');
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
        $ktg = kategori::all();
        $kon = kondisi::with('kategori')->findorfail($id);
        return view('kondisi.edit-kondisi',compact('kon','ktg'));
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
        $kon = kondisi::findorfail($id);
        $kon->update($request->all());
        return redirect('data-kondisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kon = kondisi::findorfail($id);
        $kon >delete();
        return back();
    }
}
