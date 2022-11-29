@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $post->judul }}">
                </div>
                <div class="mb-3">
                    <textarea name="isi" id="formid" cols="30" rows="10">{{ $post->isi }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">penulis</label>
                    <input type="text" class="form-control" name="penulis" value="{{ $post->penulis }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        <option selected>select menu</option>
                        @foreach ($kategori as $kt)
                        <option value="{{ $kt->id }}" @selected($post->kategori_id==$kt->id)>{{ $kt->namaKategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-control p-3">
                    <label>Tampilkan</label>
                    <input type="radio" class="form-check-input" name="tampil" {{ $post->tampil == 1 ? 'checked' : '' }} value="1">
                    <label>sembunyikan</label>
                    <input type="radio" class="form-check-input" name="tampil" {{ $post->tampil == 0 ? 'checked' : '' }} value="0">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Artikel</label>
                    <input type="text" class="form-control" name="tanggalDibuat" value="{{ $post->tanggalDibuat }}">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/post" class="btn btn-danger">back</a>
            </form>

        </div>
    </div>
</div>
@endsection
