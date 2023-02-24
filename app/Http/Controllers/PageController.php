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
    public function index()
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
    public function show($slug)
    {
        $properti = Properti::where('slug', $slug)->first();

        $maxharga = TipeUnit::whereRelation('propertis', 'slug', $slug)->max('harga');
        $minharga = TipeUnit::whereRelation('propertis', 'slug', $slug)->min('harga');
        return view('pages.detailproperti', compact('properti', 'maxharga', 'minharga'));
    }

    public function lokasi_filter($slug)
    {
        $cek = Properti::whereRelation('lokasis', 'slug', $slug)->withCount('tipeunit')->withMin('tipeunit', 'kamar_tidur')->withMax('tipeunit', 'kamar_tidur')->withMin('tipeunit', 'luas_tanah')->withMax('tipeunit', 'luas_tanah')->withMin('tipeunit', 'luas_bangunan')->withMax('tipeunit', 'luas_bangunan')->get();

        $lokasi = Lokasi::where('slug', $slug)->first();

        $tipeProperti = TipeProperti::all();

        return view('pages.lokasi', compact('cek', 'lokasi', 'tipeProperti'));
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
