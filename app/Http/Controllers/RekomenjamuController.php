<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomenjamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('rekomenjamu');
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
        // $hobi = array($request->hobi);
        $a = new saranPenggunaan($request->keluhan,$request->tahunLahir);

        $data = [
            'namajamu' => $a->namaJamu() ,
            'khasiat' => $a->khasiat(),
            'keluhan' => $request->keluhan,
            'tahunLahir' => $request->tahunLahir,
            'umur' => $a->hitungumur(),
            'saranpenggunaan' => $a->saran1() , $a->saran2()];
        return view('rekomenjamu', compact('data'));
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

class Jamu
{
    public function __construct($keluhan, $tahunLahir)
    {
        $this->keluhan = $keluhan;
        $this->tahunLahir = $tahunLahir;
    }

    public function namaJamu()
    {

        $keluhan = $this->keluhan;

        if ($keluhan == 'keseleo' || 'kurang nafsu makan') {
            return 'Berat Kencur';
        } elseif ($keluhan == 'pegal-pegal') {
            return 'Kunyit Asam';
        } elseif ($keluhan == 'darah tinggi' || 'gula darah') {
            return 'Brotowali';
        } elseif ($keluhan == 'kram perut' || 'masuk angin') {
            return 'Temulawak';
        } else {
            return 'Tidak Menemukan Jamu';
        }
    }

    public function hitungumur()
    {
        return date('Y') - $this->tahunLahir;
    }

    public function khasiat()
    {
        return 'Mujarab';
    }
}

class saranPenggunaan extends Jamu
{
    public function saran1()
    {
        $tahunLahir = $this->hitungumur();
        $jamu = $this->namaJamu();
        $keluhan = $this->keluhan;
        if ($tahunLahir <= 10) {
            return 'dikonsumsi 1x';
        } elseif ($jamu == 'Beras Kencur' && $keluhan == 'Keseleo') {
            return 'Dioleskan';
        } else {
            return 'dikonsumsi 2x';
        }
    }

    public function saran2()
    {
        $jamu = $this->namaJamu();
        $keluhan = $this->keluhan;
        if ($jamu == 'Beras Kencur' && $keluhan == 'Keseleo') {
            return 'Dioleskan';
        } else {
            return 'dikonsumsi';
        }
    }

}
