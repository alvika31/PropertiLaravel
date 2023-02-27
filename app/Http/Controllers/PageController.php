<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Properti;
use App\Models\TipeProperti;
use App\Models\TipeUnit;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $lokasi = Lokasi::all();
        $properti = Properti::withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->get();


        return view('pages.home', compact('lokasi', 'properti'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Request $request)
    {

        $properti = Properti::where('slug', $slug)->first();

        $maxharga = TipeUnit::whereRelation('propertis', 'slug', $slug)->max('harga');
        $minharga = TipeUnit::whereRelation('propertis', 'slug', $slug)->min('harga');
        return view('pages.detailproperti', compact('properti', 'maxharga', 'minharga'));
    }

    public function lokasi_filter($slug, Request $request)
    {
        $inputtipeproperti = $request->tipeproperti;
        $inputharga = $request->harga;
        $inputcari = $request->cari;
        $cek = Properti::query();

        if ($request->tipeproperti != '') {
            if ($request->harga == '<1M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeunit', 'harga', '<=', 1000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '1-2M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeunit', 'harga', '>=', 1000000000)->whereRelation('tipeunit', 'harga', '<=', 2000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '2-3M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeunit', 'harga', '>=', 2000000000)->whereRelation('tipeunit', 'harga', '<=', 3000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '3-5M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeunit', 'harga', '>=', 3000000000)->whereRelation('tipeunit', 'harga', '<=', 5000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '>5M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->whereRelation('tipeunit', 'harga', '>=', 5000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } else {
                $cek = $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeproperti', 'nama_tipe', $request->tipeproperti)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            }
        } elseif ($request->harga != '') {
            if ($request->harga == '<1M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeunit', 'harga', '<=', 1000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '1-2M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeunit', 'harga', '>=', 1000000000)->whereRelation('tipeunit', 'harga', '<=', 2000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '2-3M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeunit', 'harga', '>=', 2000000000)->whereRelation('tipeunit', 'harga', '<=', 3000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '3-5M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeunit', 'harga', '>=', 3000000000)->whereRelation('tipeunit', 'harga', '<=', 5000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '>5M') {
                $cek =  $cek->whereRelation('lokasis', 'slug', $slug)->whereRelation('tipeunit', 'harga', '>=', 5000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            }
        } elseif ($request->cari != '') {
            $cek = $cek->where('nama_properti', 'like', "%" . $request->cari . "%")->get();
        } else {
            $cek = Properti::whereRelation('lokasis', 'slug', $slug)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        }

        $lokasi = Lokasi::where('slug', $slug)->first();

        $tipeProperti = TipeProperti::all();



        return view('pages.lokasi', compact('cek', 'lokasi', 'tipeProperti', 'inputtipeproperti', 'inputharga', 'inputcari'));
    }

    function search(Request $request)
    {
        $cari = $request->cari;
        $cek = Properti::where('nama_properti', 'like', "%" . $request->cari . "%")->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        return view('pages.search', compact('cari', 'cek'));
    }

    public function tipeproperti_filter($slug, Request $request)
    {
        $inputtipeproperti = $request->tipeproperti;
        $inputharga = $request->harga;
        $inputcari = $request->cari;

        $cek = Properti::query();
        if ($request->harga != '') {
            if ($request->harga == '<1M') {
                $cek =  $cek->whereRelation('tipeproperti', 'slug', $slug)->whereRelation('tipeunit', 'harga', '<=', 1000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '1-2M') {
                $cek =  $cek->whereRelation('tipeproperti', 'slug', $slug)->whereRelation('tipeunit', 'harga', '>=', 1000000000)->whereRelation('tipeunit', 'harga', '<=', 2000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '2-3M') {
                $cek =  $cek->whereRelation('tipeproperti', 'slug', $slug)->whereRelation('tipeunit', 'harga', '>=', 2000000000)->whereRelation('tipeunit', 'harga', '<=', 3000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '3-5M') {
                $cek =  $cek->whereRelation('tipeproperti', 'slug', $slug)->whereRelation('tipeunit', 'harga', '>=', 3000000000)->whereRelation('tipeunit', 'harga', '<=', 5000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            } elseif ($request->harga == '>5M') {
                $cek =  $cek->whereRelation('tipeproperti', 'slug', $slug)->whereRelation('tipeunit', 'harga', '>=', 5000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
            }
        } elseif ($request->cari != '') {
            $cek = $cek->where('nama_properti', 'like', "%" . $request->cari . "%")->get();
        } else {
            $cek = Properti::whereRelation('tipeproperti', 'slug', $slug)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        }
        // $cek = Properti::whereRelation('tipeproperti', 'slug', $slug)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        $tipeproperti = TipeProperti::where('slug', $slug)->first();

        return view('pages.tipeproperti', compact('tipeproperti', 'cek', 'inputcari', 'inputharga'));
    }

    public function harga_filter($slug)
    {

        $cek = Properti::query();
        if ($slug == '<1M') {
            $cek = $cek->whereRelation('tipeunit', 'harga', '<', 1000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        } elseif ($slug == '1M-2M') {
            $cek = $cek->whereRelation('tipeunit', 'harga', '>=', 1000000000)->whereRelation('tipeunit', 'harga', '<=', 2000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        } elseif ($slug == '2M-3M') {
            $cek = $cek->whereRelation('tipeunit', 'harga', '>=', 2000000000)->whereRelation('tipeunit', 'harga', '<=', 3000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        } elseif ($slug == '3M-5M') {
            $cek = $cek->whereRelation('tipeunit', 'harga', '>=', 3000000000)->whereRelation('tipeunit', 'harga', '<=', 5000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        } elseif ($slug == '>5M') {
            $cek = $cek->whereRelation('tipeunit', 'harga', '>=', 5000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();
        }
        // $cek = Properti::whereRelation('tipeunit', 'harga', '<', 1000000000)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->withMin('tipeunit', 'harga')->withMax('tipeunit', 'harga')->get();


        return view('pages.harga', compact('slug', 'cek'));
    }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
