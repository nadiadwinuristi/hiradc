<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\istilah;
use\App\kategori;
class istilahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtistilah = istilah::with('kategori')->latest()->paginate(5);
        return view('istilah.data-istilah',compact('dtistilah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ktt= kategori::all();
        return view('istilah.create-istilah',compact('ktt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        istilah::create([
            'kategori_id' => $request->kategori_id,
            'kode' => $request->kode,
            'istilah' => $request->istilah,

        ]);
        return redirect('data-istilah');
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
        $ktt = kategori::all();
        $ist = istilah::with('kategori')->findorfail($id);
        return view('istilah.edit-istilah',compact('ist','ktt'));
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
        $ist = istilah::findorfail($id);
        $ist->update($request->all());
        return redirect('data-istilah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ist = istilah::findorfail($id);
        $ist >delete();
        return back();
    }
}
