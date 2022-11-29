<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\post;
use App\Models\produk;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tampil data
        $data = post::all();
        $data2 = kategori::all()->where('kategori_id', 1);

        return view('post.post', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //pindah halaman
        $kategori = kategori::all();
        return view('post.tambahpost', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //proses tambah data
        post::create($request->all());
        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //tampil detail
        // $data = post::all();
        $produk = produk::all()->where('kategori_id', $post->kategori_id );
         return view('detailberanda',compact('post' , 'produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //pindah halaman
        $kategori = kategori::all();
        return view('post.editpost', compact('kategori', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //proses update data
        $post->update($request->all());
        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //proses delete data
        $post->delete();
        return redirect('post');
    }
}
