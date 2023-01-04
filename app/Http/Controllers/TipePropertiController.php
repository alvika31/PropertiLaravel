<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\TipeProperti;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TipePropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = TipeProperti::all();
        return view('dashboard.tipe-properti', compact('model'));
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
        $validated = Validator::make($request->all(), [
            'nama_tipe' => 'required',
        ]);

        if ($validated->fails()) {
            return redirect(route('tipe-properti.index'))->with('toast_error', $validated->messages()->all()[0])->withInput();
        }

        $tipeproperti = new TipeProperti;
        $tipeproperti->nama_tipe = $request->nama_tipe;
        $tipeproperti->save();
        return redirect(route('tipe-properti.index'))->with('success', 'Lokasi Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipeProperti  $tipeProperti
     * @return \Illuminate\Http\Response
     */
    public function show(TipeProperti $tipeProperti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipeProperti  $tipeProperti
     * @return \Illuminate\Http\Response
     */
    public function edit(TipeProperti $tipeProperti)
    {
        $model = TipeProperti::find($tipeProperti);
        return response()->json(['model' => $model, 'status' => true]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipeProperti  $tipeProperti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipeProperti $tipeProperti)
    {
        $model = DB::table('tipe_propertis')->where('id', $request->id)->update([
            'nama_tipe' => $request->nama_tipe,
        ]);
        return redirect(route('tipe-properti.index'))->with('success', 'Tipe Properti Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipeProperti  $tipeProperti
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipeProperti $tipeProperti)
    {
        $model = TipeProperti::find($tipeProperti);
        $model->each->delete();

        return redirect()->back();
    }
}
