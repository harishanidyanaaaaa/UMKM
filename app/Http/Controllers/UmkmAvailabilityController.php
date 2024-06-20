<?php

namespace App\Http\Controllers;

use App\Models\UmkmAvailability;
use App\Models\UmkmAvalability;
use Illuminate\Http\Request;

class UmkmAvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umkm = UmkmAvailability::all();
        return view('umkm.index')->with('umkm', $umkm);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        UmkmAvailability::create([
            'umkm_id' => $request->umkm_id,
            'day' => $request->day,
            'open' => $request->open,
            'close' => $request->close,
            'located' => $request->located,
        ]);

        return redirect()->route('Umkm-Index');
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
        $umkm = UmkmAvailability::find($id);
        $umkm->umkm_id = $request->umkm_id;
        $umkm->day = $request->day;
        $umkm->open = $request->open;
        $umkm->close = $request->close;
        $umkm->located = $request->located;
        

        $umkm->save();
        return redirect()->route('Umkm-Index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function destroy($id)
    {
        UmkmAvailability::destroy($id);
        return redirect()->route('Umkm-Index')->with('success', 'Data Berhasil Dihapus');
    }
}
