@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('kategori.store') }}" method="POST" id="idform">
                @csrf
                <div class="mb-3">
                    <label class="form-label">nama</label>
                    <input type="text" class="form-control" name="namaKategori" required placeholder="masukkan nama kategori">
                </div>
                <div class="mb-3">
                    {{-- <label class="form-label">Desc Kategori</label> --}}
                    <textarea name="descKategori" id="idform" cols="30" rows="10" placeholder="masukkan descripsi"></textarea>
                    {{-- <input type="text" class="form-control" name="nama" required placeholder="masukkan nama kategori"> --}}
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/kategori" class="btn btn-danger">back</a>
            </form>

        </div>
    </div>
</div>
@endsection