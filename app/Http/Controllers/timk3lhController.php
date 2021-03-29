<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\timk3lh;

class timk3lhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttimk3lh = timk3lh::paginate(2);
        return view('timk3lh.data-timk3lh',compact('dttimk3lh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('timk3lh.create-timk3lh');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        timk3lh::create([

            'unit_kerja' => $request ->unit_kerja,
            'koordinator' => $request ->koordinator,
            'email_koordinator' => $request ->email_koordinator,
            'ketua' => $request ->ketua,
            'email_ketua' => $request ->email_ketua,

        ]);
        return redirect('data-timk3lh');
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
        $tim = timk3lh::findorfail($id);
        return view('timk3lh.edit-timk3lh',compact('tim'));
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
        $tim = timk3lh::findorfail($id);
        $tim->update($request->all());
        return redirect('data-timk3lh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tim = timk3lh::findorfail($id);
        $tim->delete();
        return back();
    }
}
