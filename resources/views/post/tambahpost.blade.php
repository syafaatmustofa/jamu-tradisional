@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('post.store') }}" id="formid" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="judul" placeholder="masukkan judul">
                </div>
                <div class="mb-3">
                    <textarea name="isi" id="formid" cols="30" rows="10" placeholder="Masukkan isi"></textarea>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="penulis" placeholder="masukkan penulis">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        <option selected>Open this select menu</option>
                        @foreach ($kategori as $kt)
                        <option value="{{ $kt->id }}">{{ $kt->namaKategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" name="tanggalDibuat" placeholder="masukkan tanggal ">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/post" class="btn btn-danger">back</a>
            </form>

        </div>
    </div>
</div>
@endsection