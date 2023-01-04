<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Properti;
use App\Models\TipeProperti;
use Illuminate\Http\Request;
use Illuminate\Support\File;
use App\Models\GalleryProperti;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Properti::all();
        return view('dashboard.listproperti', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        $tipe = TipeProperti::all();
        return view('dashboard.add-properti', compact('lokasi', 'tipe'));
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
            'nama_properti' => 'required',
            'nama_developer' => 'required',
            'cicilan' => 'required',
            'featured_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1048',
            'deskripsi_properti' => 'required',
            'fasilitas' => 'required',
            'deskripsi_lokasi' => 'required',
        ]);
        if ($validated->fails()) {
            return redirect(route('properti.create'))->with('toast_error', $validated->messages()->all()[0])->withInput();
        }


        $image_path = $request->file('featured_image')->store('featured_image');

        $properti = new Properti;
        $properti->nama_properti = $request->nama_properti;
        $properti->nama_developer = $request->nama_developer;
        $properti->cicilan = $request->cicilan;
        $properti->featured_image = $image_path;
        $properti->lokasi_id = $request->lokasi_id;
        $properti->tipe_properti_id = $request->tipe_properti_id;
        $properti->deskripsi_properti = $request->deskripsi_properti;
        $properti->fasilitas = $request->fasilitas;
        $properti->deskripsi_lokasi = $request->deskripsi_lokasi;
        $properti->save();

        foreach ($request->file('gallery') as $gallerys) {
            $image = new GalleryProperti;
            $path = $gallerys->store('gallery-properti', ['disk' =>   'my_files']);
            $image->url = $path;
            $image->properti_id = $properti->id;
            $image->save();
        }



        return redirect()->route('properti.index')->with('success', 'Properti Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Properti  $properti
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $model = Properti::findOrFail($id);



        return view('dashboard.detail-properti', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Properti  $properti
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Properti::findOrFail($id);
        $lokasi = Lokasi::all();
        $tipe = TipeProperti::all();
        return view('dashboard.edit-properti', compact('model', 'lokasi', 'tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Properti  $properti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Properti $properti)
    {
        $image_path = '';
        if ($request->hasFile('featured_image')) {
            $image_path = $request->file('featured_image')->store('featured_image');
            if ($properti->featured_image) {
                Storage::delete($properti->featured_image);
            }
        } else {
            $image_path = $properti->featured_image;
        }

        $postData = [
            'lokasi_id' => $request->lokasi_id,
            'tipe_properti_id' => $request->tipe_properti_id,
            'nama_properti' => $request->nama_properti,
            'nama_developer' => $request->nama_developer,
            'cicilan' => $request->cicilan,
            'featured_image' => $image_path,
            'deskripsi_properti' => $request->deskripsi_properti,
            'fasilitas' => $request->fasilitas,
            'deskripsi_lokasi' => $request->deskripsi_lokasi,
        ];
        if ($request->file('gallery')) {
            foreach ($request->file('gallery') as $gallerys) {
                $image = new GalleryProperti;
                $path = $gallerys->store('gallery-properti', ['disk' =>   'my_files']);


                $oldImagepath = $image->url;
                // Update the database
                $image->properti_id = $properti->id;
                $image->url = $path;
                // Delete the old photo
                // Storage::delete($oldImagepath);
                $image->save();
            }
        }


        // $image->update($gallerysData);



        $properti->update($postData);
        return redirect()->route('properti.index')->with('success', 'Properti Berhasil diedit');
        // $model = Properti::find($properti);

        // if ($request->hasFile('featured_iamge') == null) {
        //     $model->nama_properti = $request->nama_properti;
        //     $model->nama_developer = $request->nama_developer;
        //     $model->cicilan = $request->cicilan;
        //     $model->lokasi_id = $request->lokasi_id;
        //     $model->tipe_properti_id = $request->tipe_properti_id;
        //     $model->deskripsi_properti = $request->deskripsi_properti;
        //     $model->fasilitas = $request->fasilitas;
        //     $model->deskripsi_lokasi = $request->deskripsi_lokasi;
        //     $model->update();
        // } else {

        //     $image_path = $request->file('featured_image')->store('featured_image');
        //     $model->nama_properti = $request->nama_properti;
        //     $model->nama_developer = $request->nama_developer;
        //     $model->cicilan = $request->cicilan;
        //     $model->lokasi_id = $request->lokasi_id;
        //     $model->tipe_properti_id = $request->tipe_properti_id;
        //     $model->deskripsi_properti = $request->deskripsi_properti;
        //     $model->featured_image = $image_path;
        //     $model->fasilitas = $request->fasilitas;
        //     $model->deskripsi_lokasi = $request->deskripsi_lokasi;
        //     $model->update();
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Properti  $properti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Properti $properti)
    {
        //
    }
    public function deletegallery($id)
    {
        GalleryProperti::where('id', $id)->delete();
        return redirect()->route('properti.index')->with('success', 'Gallery Berhasil dihapus');;
    }
}
