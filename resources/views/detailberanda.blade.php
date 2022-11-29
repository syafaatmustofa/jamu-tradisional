@extends('layouts.app')

@section('content')
<div class="container">
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $post->judul }}</h1>
                <p class="lead text-muted">{{ $post->isi }}</p>
                <p class="lead text-muted">{{ $post->penulis }}</p>
                <p class="lead text-muted">{{ $post->tanggalDibuat }}</p>
                <a href="/" class="btn btn-danger">Back</a>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container m-3">
            <div class="row">
                @foreach ($produk as $item)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $item->foto) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->namaProduk }}</h5>
                        <p class="card-text">{{ $item->harga }}</p>
                        <p class="card-text">{{ $item->descProduk }}</p>
                        <p class="card-text">{{ $item->kategori->namaKategori }}</p>

                    </div>
                </div>
        
        
                @endforeach
            </div>
        </div>
    </div>

    </main>

</div>

@endsection
