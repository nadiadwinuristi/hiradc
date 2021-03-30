<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kemungkinan;

class kemungkinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtkemungkinan = kemungkinan::paginate(5);
        return view('kemungkinan.data-kemungkinan',compact('dtkemungkinan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kemungkinan.create-kemungkinan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kemungkinan::create([

            'nama' => $request ->nama,
            'nilai' => $request ->nilai,
            'keterangan' => $request ->keterangan,

        ]);
        return redirect('data-kemungkinan');
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
        $kem = kemungkinan::findorfail($id);
        return view('kemungkinan.edit-kemungkinan',compact('kem'));
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
        $kem = kemungkinan::findorfail($id);
        $kem->update($request->all());
        return redirect('data-kemungkinan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kem = kemungkinan::findorfail($id);
        $kem->delete();
        return back();
    }
}
