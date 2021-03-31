<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\threat;
use App\istilah;

class threatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtthreat = threat::with('istilah')->latest()->paginate(25);
        return view('threat.data-threat',compact('dtthreat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $istt= istilah::all();
        return view('threat.create-threat',compact('istt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        threat::create([
            'istilah_id' => $request->istilah_id,
            'nama' => $request ->nama,

        ]);
        return redirect('data-threat');
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
    {   $istt = istilah::all();
        $thr = threat::with('istilah')->findorfail($id);
        return view('threat.edit-threat',compact('thr','istt'));
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
        $thr = threat::findorfail($id);
        $thr->update($request->all());
        return redirect('data-threat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thr = threat::findorfail($id);
        $thr->delete();
        return back();
    }
}
