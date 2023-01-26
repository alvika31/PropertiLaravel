<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use App\Models\TipeUnit;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TipeUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('dashboard.add-tipeunit', $id);
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
            'image_tipe' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1048',
            'nama_tipe' => 'required',
            'harga' => 'required',
            'kamar_tidur' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->with('toast_error', $validated->messages()->all()[0])->withInput();
        }

        $image_path = $request->file('image_tipe')->store('image_tipe');
        $tipeunit = new TipeUnit;
        $tipeunit->property_id = $request->property_id;
        $tipeunit->image_tipe = $image_path;
        $tipeunit->nama_tipe = $request->nama_tipe;
        $tipeunit->harga = $request->harga;
        $tipeunit->kamar_tidur = $request->kamar_tidur;
        $tipeunit->luas_tanah = $request->luas_tanah;
        $tipeunit->luas_bangunan = $request->luas_bangunan;
        $tipeunit->save();

        return redirect()->route('properti.index')->with('success', 'Tipe Unit Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipeUnit  $tipeUnit
     * @return \Illuminate\Http\Response
     */
    public function show(TipeUnit $tipeUnit)
    {
        return view('dashboard.add-tipeunit', $tipeUnit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipeUnit  $tipeUnit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = TipeUnit::find($id);
        return view('dashboard.edit-tipeunit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipeUnit  $tipeUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_path = '';
        $unit = TipeUnit::find($id);

        if ($request->hasFile('image_tipe')) {
            $image_path = $request->file('image_tipe')->store('image_tipe');
            if ($unit->image_tipe) {
                Storage::delete($unit->image_tipe);
            }
        } else {
            $image_path = $unit->image_tipe;
        }

        $unit->property_id = $request->property_id;
        $unit->image_tipe = $image_path;
        $unit->nama_tipe = $request->nama_tipe;
        $unit->harga = $request->harga;
        $unit->kamar_tidur = $request->kamar_tidur;
        $unit->luas_tanah = $request->luas_tanah;
        $unit->luas_bangunan = $request->luas_bangunan;
        $unit->save();
        // $postData = [
        //     'property_id' => $request->property_id,
        //     'image_tipe' => 1,
        //     'nama_tipe' => $request->nama_tipe,
        //     'harga' => $request->harga,
        //     'kamar_tidur' => $request->kamar_tidur,
        //     'luas_tanah' => $request->luas_tanah,
        //     'luas_bangunan' => $request->luas_bangunan,

        // ];

        // $tipeUnit->update($postData);
        return redirect()->route('properti.index')->with('success', 'Properti Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipeUnit  $tipeUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipeUnit $tipeUnit)
    {
        $model = TipeUnit::find($tipeUnit);

        $model->each->delete();
        return redirect()->back();
    }

    public function addtipeunit($id)
    {
        $model = Properti::findOrFail($id);
        return view('dashboard.add-tipeunit', compact('model'));
    }
}
