<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Lokasi::all();

        return view('dashboard.lokasi', compact('model'));
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
            'nama_lokasi' => 'required',
        ]);

        if ($validated->fails()) {
            return redirect(route('lokasi.index'))->with('toast_error', $validated->messages()->all()[0])->withInput();
        }

        $lokasi = new Lokasi;
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->save();
        return redirect(route('lokasi.index'))->with('success', 'Lokasi Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function show(Lokasi $lokasi)
    {
        $model = Lokasi::find($lokasi);
        return response()->json(['model' => $model, 'status' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Lokasi $lokasi)
    {
        $model = Lokasi::find($lokasi);
        return response()->json(['model' => $model, 'status' => true]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lokasi $lokasi)
    {
        $model = DB::table('lokasis')->where('id', $request->id)->update([
            'nama_lokasi' => $request->nama_lokasi,
        ]);
        return redirect(route('lokasi.index'))->with('success', 'Lokasi Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lokasi $lokasi)
    {
        $model = Lokasi::find($lokasi);
        $model->each->delete();

        return redirect()->back();
    }
}
