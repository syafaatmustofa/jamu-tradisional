@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Data Produk</h1>
            <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah produk</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Desc Produk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">tampilkan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->namaProduk }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$item->foto) }}" alt="" width="100px">
                        </td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->descProduk }}</td>
                        <td>{{ $item->kategori->namaKategori }}</td>
                        <td>{{ $item->tampil }}</td>

                        <td >
                            <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-primary">edit</a>
                            <a href="{{ route('deleteproduk',$item->id) }}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection