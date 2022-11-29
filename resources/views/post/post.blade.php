@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h1>Data Post</h1>
            <a href="{{ route('post.create') }}" class="btn btn-primary">Tambah Post</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Judul</th>
                        <th scope="col">isi</th>
                        <th scope="col">penulis</th>
                        <th scope="col">kategori</th>
                        <th scope="col">Tanggal Dibuat</th>
                        <th scope="col">tampil</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->isi }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->kategori->namaKategori }}</td>
                        <td>{{ $item->tanggalDibuat }}</td>
                        <td>{{ $item->tampil }}</td>
                        <td >
                            <a href="{{ route('post.edit', $item->id) }}" class="btn btn-primary">edit</a>
                            <a href="{{ route('deletepost',$item->id) }}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection