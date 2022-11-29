@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            {{-- form proses edit --}}
            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">nama Produk</label>
                    <input type="text" class="form-control" name="namaProduk" value="{{ $produk->namaProduk }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">foto</label>
                    <img src="{{ asset('storage/'.$produk->foto) }}" alt="" width="100px">
                    <input class="form-control" type="file" name="foto">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}">
                </div>
                <div class="mb-3">
                    <textarea name="descProduk" id="formid" cols="30" rows="10">{{ $produk->descProduk }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        <option selected>select menu</option>
                        @foreach ($kategori as $kt)
                        <option value="{{ $kt->id }}" @selected($produk->kategori_id==$kt->id)>{{ $kt->namaKategori }}</option>
                        @endforeach
                    </select>
                </div>    
                <div class="form-control p-3">
                    <label>Tampilkan</label>
                    <input type="radio" class="form-check-input" name="tampil" {{ $produk->tampil == 1 ? 'checked' : '' }} value="1">
                    <label>sembunyikan</label>
                    <input type="radio" class="form-check-input" name="tampil" {{ $produk->tampil == 0 ? 'checked' : '' }} value="0">
                </div>        
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/produk" class="btn btn-danger">back</a>
            </form>

        </div>
    </div>
</div>
@endsection