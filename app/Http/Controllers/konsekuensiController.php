<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\kategori;
class konsekuensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtkonsekuensi = konsekuensi::with('kategori')->latest()->paginate(5);
        return view('konsekuensi.data-konsekuensi',compact('dtkonsekuensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kgr= kategori::all();
        return view('istilah.create-istilah',compact('kgr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        konsekuensi::create([
            'kategori_id' => $request->kategori_id,
            'nilai' => $request->nilai,
            'konsekuensi' => $request->konsekuensi,
            'financial'  => $request-> financial,
            'objective' => $request->objective,
            'legal' => $request-> legal,
            'biaya' => $request-> biaya,
            'reputasi' => $request-> reputasi,
            'cakupan' => $request-> cakupan,
            'lama_pemulihan' => $request-> lama_pemulihan,
            'lama_penyimpangan' => $request-> lama_penyimpangan,
            'product_image' => $request->product_image,
            'dampak_sosial' => $request->dampak_sosial,
        ]);
        return redirect('data-kategori');
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
        $kgr = kategori::all();
        $nsi = konsekuensi::with('kategori')->findorfail($id);
        return view('istilah.edit-istilah',compact('nsi','kgr'));
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
        $nsi = konsekuensi::findorfail($id);
        $nsi->update($request->all());
        return redirect('data-konsekuensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nsi = konsekuensi::findorfail($id);
        $nsi >delete();
        return back();
    }
}
