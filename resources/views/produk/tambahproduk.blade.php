@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('produk.store') }}" id="formid" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="namaProduk" placeholder="masukkan nama produk">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control" name="foto" placeholder="upload foto">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="harga" placeholder="masukkan harga">
                </div>
                <div class="mb-3">
                    <textarea name="descProduk" id="formid" cols="30" rows="10" placeholder="Masukkan desc produk"></textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        <option selected>Open this select menu</option>
                        @foreach ($kategori as $kt)
                        <option value="{{ $kt->id }}">{{ $kt->namaKategori }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/prodk" class="btn btn-danger">back</a>
            </form>

        </div>
    </div>
</div>
@endsection
